<?php
App::uses('AppController', 'Controller');

/**
 * Index controller
 *
 * @author		UTC.HocNV
 * @date		2015/08/21
 * @package		app.Controller
 */
class IndexController extends AppController {
	/**
     * beforeFilter
     *
     * @author	UTC.HocNV
     * @date	2015/08/21
     */
    public function beforeFilter() {
        parent::beforeFilter();

    }

    /**
     * Action dashboard
     *
     * @return	void
     * @author:	UTC.HocNV
	 * @date:	2016/01/06
     */
    public function dashboard() {
        $this->layout = 'index';
    }

    /**
     * Action yahman mail
     *
     * @return	void
     * @author:	UTC.HocNV
     * @date:	2016/01/06
     */
    public function onlyminerals() {
        $this->layout = 'mail';
        $dates = array(); $files = array();
        if ($handle = opendir('html/'.TYPE_OM)) {
            $blacklist = array('.', '..');
            while (false !== ($file = readdir($handle))) {
                if (!in_array($file, $blacklist)) {
                    $year_month = substr($file, 0, 6);
                    $dates[$year_month][] = $file;
                    if($handle_2 =  opendir('html/'.TYPE_OM.'/'. $file)){
                        while (false !== ($file_2 = readdir($handle_2))) {
                            if (!in_array($file_2, $blacklist)) {
                                if($year_month == date('Ym')){
                                    $files[] = 'html/'.TYPE_OM.'/'. $file . '/'. $file_2;
                                }
                            }
                        }
                        closedir($handle_2);
                    }
                }
            }
            closedir($handle);
        }

        if(!isset($dates[date('Ym')]))
            $dates[date('Ym')] = date('Ymd');

        $data = array(
            'dates' => $dates,
            'files' => $files,
        );
        $this->set('data', $data);
    }


    /**
     * Action yahman magazine
     *
     * @return	void
     * @author:	UTC.HocNV
     * @date:	2016/01/06
     */
    public function yahman_magazine() {
        $this->layout = 'magazine';
		$dates = array(); $files = array();
        if ($handle = opendir('html/yd')) {
            $blacklist = array('.', '..');
            while (false !== ($file = readdir($handle))) {
                if (!in_array($file, $blacklist)) {
                    $year_month = substr($file, 0, 6);
                    $dates[$year_month][] = $file;
                    if($handle_2 =  opendir('html/yd/'. $file)){
                        while (false !== ($file_2 = readdir($handle_2))) {
                            if (!in_array($file_2, $blacklist)) {
                                if($year_month == date('Ym')){
                                    $files[] = 'html/yd/'. $file . '/'. $file_2;
                                }
                            }
                        }
                        closedir($handle_2);
                    }
                }
            }
            closedir($handle);
        }

        if(!isset($dates[date('Ym')]))
            $dates[date('Ym')] = date('Ymd');

        $data = array(
            'dates' => $dates,
            'files' => $files,
        );
        $this->set('data', $data);
    }

    /**
     * Action create yahman mail
     *
     * @return	void
     * @author:	UTC.HocNV
     * @date:	2016/01/06
     */
    public function create_onlyminerals() {
        $this->layout = 'mail';
        if ($this->request->is('post')) {
            $data = $this->request->data['mineral'];
            $folder = 'html/'.TYPE_OM.'/'.$data['file_name'];
            if(is_dir($folder))
            {
                // override file name if exist file
                $filename = $folder.'/'.$data['title'].$data['file_name'].'.html';
                if (file_exists($filename)) {
                    // Delete old file and create new file
                   unlink($filename);
                   $this->generate_html($filename,$data,TYPE_OM);
                } else {
                    $this->generate_html($filename,$data,TYPE_OM);
                }
            }
            else
            {
                mkdir($folder);
                $filename = $folder.'/'.$data['title'].$data['file_name'].'.html';
                $this->generate_html($filename,$data,TYPE_OM);
            }

            // upload file to ftp
            // connect and login to FTP server
            $ftp_conn = ftp_connect(FTP_NAME) or die("Could not connect to ".FTP_NAME);
            $login = ftp_login($ftp_conn, FTP_USER, FTP_PASS);
            // upload file
            ftp_mkdir($ftp_conn, $folder);
            if (ftp_put($ftp_conn, $filename, $filename, FTP_ASCII))
            {
                $msg =  "Successfully uploaded.";
            }
            else
            {
                $msg =  "Error uploading .";
            }
            // close connection
            ftp_close($ftp_conn);
            $this->set('data',$msg);
            $this->render('finish_create');

        }
    }
	
	public function create_yahman_mail(){
		$this->layout = 'magazine';
		if ($this->request->is('post')) {
            $data = $this->request->data['yd'];
            $folder = 'html/yd/'.$data['file_date'];
            if(is_dir($folder))
            {
                // override file name if exist file
                $filename = $folder.'/'.$data['file_title'].$data['file_date'].'.html';
                if (file_exists($filename)) {
                    // Delete old file and create new file
                   unlink($filename);
                   $this->generate_html($filename,$data,TYPE_YD);
                } else {
                    $this->generate_html($filename,$data,TYPE_YD);
                }
            }
            else
            {
                mkdir($folder);
                $filename = $folder.'/'.$data['file_title'].$data['file_date'].'.html';
                $this->generate_html($filename,$data,TYPE_YD);
            }

            $this->redirect('/'.$filename);

        }
	}

    /**
     * Action preview only mineral
     *
     * @return	void
     * @author:	UTC.HocNV
     * @date:	2016/01/06
     */
    public function preview_onlyminerals() {
        $this->layout = '';

    }

    /**
     * Action ajax load html file
     *
     * @return	void
     * @author:	UTC.HocNV
     * @date:	2016/01/06
     */
    public function ajax_load_html(){
        $this->layout = '';
		$folder = "html/".TYPE_OM."/";
		if(trim($_GET['type']) == "ym"){
			$folder = "html/yd/";
		}
        $files = array();
        if(isset($_GET['time']) && (trim($_GET['time']) != '')){
            if ($handle = opendir($folder)) {
                $blacklist = array('.', '..');
                while (false !== ($file = readdir($handle))) {
                    if (!in_array($file, $blacklist)) {
                        $year_month = substr($file, 0, 6);
                        if($year_month == $_GET['time']){
                            if($handle_2 =  opendir($folder. $file)){
                                while (false !== ($file_2 = readdir($handle_2))) {
                                    if (!in_array($file_2, $blacklist)) {
                                        $files[] = $folder. $file . '/'. $file_2;
                                    }
                                }
                                closedir($handle_2);
                            }
                        }
                    }
                }
                closedir($handle);
            }
        }
        $this->set('data', $files);
    }

    public function read_html(){
        $this->autoRender = false;
        if(isset($_GET['path']) && (trim($_GET['path']) != '')){
			$contents  =  file_get_contents($_GET['path']);
			$regexp="/<input type=\"hidden\" class=\"json\" value=\'(.*?)\'>/s";
			preg_match($regexp,$contents,$match);
			var_dump($match[1]);
			$regexp = "/<div class=\"json\" style=\"display:none\">(.+?)<\/div>/";
			preg_match($regexp,$contents,$match);
			var_dump($match[1]);
			     
		}
    }


    private function generate_html($file_name,$data,$type){
		iconv_set_encoding('internal_encoding', 'EUC-JP');
		iconv_set_encoding('input_encoding', 'SJIS');
		iconv_set_encoding('output_encoding', 'EUC-JP');
		setlocale(LC_ALL, 'ja_JP.EUC-JP');
        $this->layout = '';
        $fileHandle = fopen($file_name, 'w') or die("file could not be accessed/created");
        $this->set('data',$data);
		if($type==TYPE_OM){
			$view = $this->render('preview_onlyminerals');
		}else{
			$view = $this->render('preview_ym');
		}
		
        fwrite($fileHandle, $view);
        fclose($fileHandle);

    }

}
