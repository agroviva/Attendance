<?php
/**
 * attendance - sync:.
 *
 * @link http://www.agroviva.de
 *
 * @author Enver Morinaj
 * @copyright (c) 2015-16 by Agroviva GmbH <info@agroviva.de>
 * @license ---- GPL - GNU General Public License
 *
 * @version $Id: class.attendance_sync.inc.php $
 */
include_once __DIR__.'/../api/app.php';

use AgroEgw\DB;
use Attendance\Categories;
use Attendance\Contract;
use Attendance\Holidays;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Attendance\TimeAccount;

class attendance_sync
{
    private $db;
    private $so;
    private $bo;
    private $holiday;

    public function __construct()
    {
        include_once 'class.attendance_so.inc.php';
        $this->so = new attendance_so();
        $this->bo = new attendance_bo();

        $this->db = $GLOBALS['egw']->db;
        $this->category = Categories::Get();
    }

    public function init($now_time)
    {
        $unix_time = strtotime($now_time);
        $CarbonDate = Carbon::parse($now_time);

        $yearShift = $CarbonDate->year - intval(date("Y"));

        $this->holiday = Holidays::Render('de', $yearShift)->District('Baden-Württemberg');

        // Here are the Categories defined
        $parent_category = $this->category['parent'];
        $vacation_cat = $this->category['vacation'];
        $sickness_cat = $this->category['sickness'];
        $school_cat = $this->category['school'];
        $holiday_cat = $this->category['holiday'];

        if (defined('SYNC') && SYNC) {
            //Here it will check every user that is available by Work Contract
            echo "<div style='text-align: center;font-size: larger;font-weight: bold;font-family: monospace;color: navy;background-color: #6e905029;width: 100%;height: auto;'>";
        }

        $sql_category = [
            [
                'id'   => $sickness_cat['id'],
                'name' => $sickness_cat['name'],
            ],
            [
                'id'   => $school_cat['id'],
                'name' => $school_cat['name'],
            ],
            [
                'id'   => $vacation_cat['id'],
                'name' => $vacation_cat['name'],
            ],
        ];

        $sql = "
            SELECT * FROM egw_attendance a 
            LEFT OUTER JOIN egw_addressbook b ON a.user = b.account_id 
            WHERE a.end is NULL OR a.end >= '$now_time'
            GROUP BY b.account_id
        ";

        $users = (new DB($sql))->FetchAll();

        if (empty($users)) {
            return;
        }

        $dayName = Weekdays()[($CarbonDate->dayOfWeekIso - 1)];

        foreach ($users as $key => $user) {
            unset($user["contact_jpegphoto"]);
            $days = $this->bo->weekdaysSplit($user['weekdays_rhymes'], $user['start'], $user['user']);

            $contract = new Contract($user['id']);
            $shouldHours = $contract->shouldOn($user["id"], $CarbonDate->format("Y-m-d"));

            if ($shouldHours <= 0) {
                if (defined('SYNC') && SYNC) {
                    echo "$user[n_fileas] doesn't work today</p>";
                }
                continue;
            }

            if (!$HolidayName = Holidays::isHoliday(date('Y-m-d', $unix_time))) {
                foreach ($sql_category as $category => $value) {
                    $sql_query = "
                    SELECT * FROM egw_cal a 
                    LEFT OUTER JOIN egw_cal_user b ON a.cal_id = b.cal_id 
                    INNER JOIN egw_cal_dates c ON a.cal_id = c.cal_id 
                    WHERE (c.cal_start = b.cal_recur_date OR (c.cal_start = a.range_start AND b.cal_recur_date = 0)) 
                        AND b.cal_user_id = $user[user] 
                        AND a.cal_category = $value[id] 
                        AND b.cal_role = 'NON-PARTICIPANT' 
                        AND from_unixtime(c.cal_start,'%Y-%m-%d') <= '$now_time' 
                        AND from_unixtime(c.cal_end,'%Y-%m-%d') >= '$now_time' 
                        AND a.cal_deleted IS NULL 
                        AND b.cal_status !='X'
                    ";
                    if ($calendar_data = (new DB($sql_query))->FetchAll()) {
                        foreach ($calendar_data as $cal => $result) {
                            $title = $result['cal_title'];
                            $ts_owner = $result['cal_user_id'];
                            $cat_id = $value['id'];
                            $proof = $this->so->proof_timesheet($now_time, $ts_owner, [
                                $sql_category[0]['id'],
                                $sql_category[1]['id'],
                                $sql_category[2]['id'],
                            ]);
                            $cat_name = $value['name'];
                            $username = $user['n_fileas'];

                            if (defined('SYNC') && SYNC) {
                                echo "User $username is selected with category \"$cat_name\"</br>";
                            }

                            $this->bo->UserAvailability($unix_time, $ts_owner, $cat_name, $username, $days, $user, $title, $proof, $cat_id);
                        }
                    }
                }
            } else {
                if (defined('SYNC') && SYNC) {
                    echo "User $user[n_fileas] is selected with category $holiday_cat[name]</br>";
                }
                $ts_owner = $user['user'];
                $cat_id = $holiday_cat['id'];
                $proof = $this->so->proof_timesheet($now_time, $ts_owner, $cat_id);
                if ($proof > 0) {
                    if (defined('SYNC') && SYNC) {
                        echo "This Holiday proces it's made one time today for $user[n_fileas]</p>";
                    }
                } else {
                    $duration = $shouldHours * 60;
                    $start = $unix_time;
                    $title = $HolidayName;

                    $this->so->insert_timesheet($start, $duration, $title, $cat_id, $ts_owner, $start, $ts_owner);
                    if (defined('SYNC') && SYNC) {
                        echo "This Holiday is inserted for $user[n_fileas]</p>";
                    }
                }
            }
        }
        if (defined('SYNC') && SYNC) {
            echo "</div>\n";
        }
        ob_end_flush();
    }

    public function synchron()
    {
        // $this->testdebug();
        $to = date('Y-m-d');
        $from = date('Y-m-d', strtotime($to. ' - 30 days'));

        if (!$from) {
            $this->init($to);
        } else {
            $period = CarbonPeriod::create($from, $to);

            foreach ($period as $carbon) {
                $date = $carbon->format('Y-m-d');
                $this->init($date);
            }
        }
    }

    public function testdebug(){
        $Infolog = EGW_SERVER_ROOT."/infolog/inc";
        $dir = opendir($Infolog);
        while($file = readdir($dir)){
            if ($file !== "." && $file !== "..") {
                Include $Infolog."/$file";
            }
        }

        $bo = new infolog_bo();
        $bo->async_notification();
        exit();
    }
}
