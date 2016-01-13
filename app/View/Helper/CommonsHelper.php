<?php
App::uses('CakeNumber', 'Utility');
/**
 * Commons helper
 *
 * Add your functions execute to use commons
 *
 * @package       app.View.Helper
 */
class CommonsHelper extends AppHelper {

    public function __construct(View $view, $settings = array()) {
        parent::__construct($view, $settings);
    }

    /**
     * Extract gender
     *
     * @return	string gender
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function extract_gender($gender) {
        if ( $gender == 1 ) {
            return '男 ';
        } elseif ( $gender == 2 ) {
            return '女';
        } else {
            return '男女';
        }
    }

    /**
     * Extract gender actor
     *
     * @return	string gender
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function extract_gender_actor($gender) {
        if ( $gender == 1 ) {
            return '男 ';
        } elseif ( $gender == 2 ) {
            return '女';
        } else {
            return '共通';
        }
    }

    /**
     * Extract gender
     *
     * @return	string status
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function extract_status($status) {
        if ( $status == FREE_USER ) {
            return FREE_USER_TEXT;
        } elseif ( $status == FEE_USER ) {
            return FEE_USER_TEXT;
        } else {
            return LEAVE_USER_TEXT;
        }
    }

    /**
     * Extract category plan
     *
     * @return	string category plan
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function extract_category_plan($category) {
        $cat_plan = '';
        if ( $category == PLAN_DAY_ONE_LIVE ) {
            $cat_plan =  PLAN_DAY_ONE_LIVE_TEXT;
        } elseif ( $category == PLAN_MONTH ) {
            $cat_plan = PLAN_MONTH_TEXT;
        }
        return $cat_plan ;
    }

    /**
     * Extract Action player
     *
     * @return	string category plan
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function convert_player ($data) {
        if($data =='true') {
           return '○';
        } elseif($data =='false') {
            return '×' ;
        }

    }

    /**
     * Check checked in radio
     *
     * @return	string checked
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function get_status ($data,$value) {
        if ($data == $value) {
           return 'checked';
        } else {
            return '' ;
        }

    }

    /**
     * Check checked in radio
     *
     * @return	array checked
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function get_status_r ($data) {
        $result =  array();
        if (isset($data['Talk'])) {
           $result['on'] = 'checked';
           $result['off'] = '';
        } else {
            $result['off'] = 'checked';
            $result['on'] = '';
        }
        return $result;
    }

    /**
     * get schedule base actor id
     *
     * @return	array schedule
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function get_schedule($actor_id,$date){
        App::import("Model", "Schedule");
        $model = new Schedule();
        $data = $model->get_schedule($actor_id,$date);
        return $data;

    }

    /**
     * Check extension image file
     *
     * @return	string image
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function check_img_ext($url_file_name,$ext){
        $time = strtotime(date('Y-m-d h:i:s'));
        if ($ext != ''){
            return $url_file_name.'.'.$ext.'?'.$time;
        } else {
            return '/images/no_avatar.jpg';
        }
        //return '/images/no_avatar.jpg';
    }

    /**
     * Check exists image file
     *
     * @return	string image
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function is_url_exist($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if($code == 200){
            $status = true;
        }else{
            $status = false;
        }
        curl_close($ch);
        return $status;
    }

    /**
     * Extract status of schedule
     *
     * @return	string status or value of status
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function extract_status_csl($status,$type){
        if ($type = 1) {
            // extract value to text status
            if ($status == 0) {
                return 'Lock';
            } elseif($status == 1) {
                return 'Open';
            }elseif ($status == 2){
                return 'Closed';
            } else {
                return 'Empty';
            }
        } else {
            // extract text to value
            if ($status == 'Lock') {
                return 0;
            } elseif($status == 'Open') {
                return 1;
            }elseif ($status == 'Closed'){
                return 2;
            } else {
                return 3;
            }
        }
    }

    /**
     * Get status of schedule
     *
     * @return	string status or value of status
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function get_status_schedule($status,$is_reserve){
        $result = array();
        if ($is_reserve == 1){
            $result['real'] = $status;
            $result['mask'] = 'Closed';
        } else {
            $result['real'] =  $result['mask'] = $status;
        }
        return $result;
    }

    /**
     * Get status of limit age
     *
     * @return	string limit age or value of limit age
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function check_status_limit($type,$limit_age){
        $age_list = explode(',',$limit_age);
        if (in_array($type,$age_list)) {
            return "◎";
        } else {
            return 'x';
        }
    }

    /**
     * Get extract internet option
     *
     * @return	string internet option
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function internet_option($type){
        $string = '';
        if($type == 1){
            $string  = 'Home Connection (Non-USB)';
        } elseif ($type ==2) {
            $string = 'USB Internet Connection (Globe Tattoo,SmartBro、etc.)';
        }elseif ($type ==3) {
            $string = 'Internet Café/Shops';
        }elseif ($type ==4) {
            $string = 'School';
        }elseif ($type ==5) {
            $string = 'Office';
        }
        return $string;
    }

    /**
     * Get extract internet option
     *
     * @return	string internet option
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function live_this_month($live,$time){
        $month = explode('/',$time);
        if ($month[0] < date('Y')) {
            return 0;
        } elseif($month[1] < date('m')){
            return 0;
        } else {
            return $live;
        }
    }

    /**
     * Get extract how find
     *
     * @return	string how find
     * @author:	UTC.HocNV
     * @date:	2015/09/07
     */
    public function how_find($type){
        $string = '';
        if($type == 1){
            $string  = 'Flyer';
        } elseif ($type ==2) {
            $string = 'Poster';
        }elseif ($type ==3) {
            $string = 'Internet';
        }elseif ($type ==4) {
            $string = 'Television';
        }elseif ($type ==5) {
            $string = 'Radio';
        }elseif ($type ==6) {
            $string = 'Newspaper/Magazine Advertisement';
        }elseif ($type ==7) {
            $string = 'Heard from a friend or Acquaintance';
        }elseif ($type ==8) {
            $string = 'Promotional/Hiring Event';
        }elseif ($type ==9) {
            $string = 'Others';
        }
        return $string;
    }

    /*
     * Convert price
     * @return	string price
     * Author: UTC.HaiTT
     * date: 04/11/2015
     */
    public function convert_price($number) {

        return  CakeNumber::format($number, array(
            'places' => 0,
            'before' => ' ',
            'escape' => false,
            'decimals' => '.',
            'thousands' => ','
        ));

    }

    /**
     * Get time current system philiphin
     *
     * @return date
     * @author: UTC.MauBV
     * @date:   2015/10/15
     */
    public function get_ph_time_current() {
        // Get datetime philiphin
        $gmt_time_zone = new DateTimeZone('Asia/Manila');
        $ph_dt = new DateTime(date(''), $gmt_time_zone);
        $ph_datetime = $ph_dt->format('Y-m-d H:i:s');

        return $ph_datetime;
    }
}