<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * EmailTemplate class
 *
 * @package	tracker
 * @subpackage	Libraries
 * @category	shortcodes
 * @author	Khalid Bhai

 */
class Emailtemplate {

    private $subject = null;
    private $body = null;
    private $to = array();
    private $from = array();
    private $cc = array();
    private $bcc = array();
    private $reply_to = array();
    private $params = array();
    private $extra_vars = array();

    public function __construct() {
        
    }

    public function send($key = '') {
        if (!empty($key)) {
            $this->prepareEmail($key);
        }
        $this->load->library('email');

//        $this->email->from($this->from['email'], $this->from['name']);
//        $this->email->to($this->to['email'], $this->to['name']);
//        $this->email->reply_to($this->email->reply_to($this->reply_to['email'], $this->reply_to['name']));
//  
//        $this->email->subject($this->subject);
//        $this->email->message($this->body);
        
        
//        foreach ($this->cc as $cc)
//            $this->email->cc($cc['email'], $cc['name']);
//        foreach ($this->bcc as $bcc)
//            $this->email->bcc($bcc['email'], $bcc['name']);

        if (ENVIRONMENT == 'development') {
            echo "<pre>";
            //print_r($this->email->send());
            echo "</pre>";
        } 
//        else {
//            $this->email->send();
//        }
        return true;
    }

    private function prepareEmail($key) {
        
        $CI =& get_instance();
        $CI->load->model('emailtemplate_model');
        $row = $CI->emailtemplate_model->getEmailtemplate($key);
        $this->subject = $this->parseVariables($row->subject, $key);
        $this->body = $this->parseVariables($row->template, $key);
        
    }

    private function parseVariables($subject, $key) {
        $filters = $this->getFilters($key);

        $pattern = array();
        $replace = array();

        foreach ($filters as $ptrn => $rplce) {
            array_push($pattern, $ptrn);
            array_push($replace, $rplce);
        }

        for ($i = 0; $i < count($pattern); $i++)
            $pattern[$i] = '/' . $pattern[$i] . '/';
        return preg_replace($pattern, $replace, $subject);
    }

    private function getFilters($key) {
        $filters = array();

        switch ($key):
            case 'DEFAULT_EMAIL':
                $filters = array(
                    "#USERNAME#" => 'azeemgujjar',
                    "#NAME#" => 'Azeem Hassan',
                );
                break;
            default:
                break;
        endswitch;
        return $filters;
    }

}
