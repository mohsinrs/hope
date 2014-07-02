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

    private $to_fullname = null;
    private $to_email = null;
    private $from_fullname = null;
    private $form_email = null;
    private $resourceto = null;
    private $title = null;
    private $description = null;
    private $path = null;
    private $activity_description = null;

    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->library('email');
        $this->CI->load->model('bug_model');
        $this->CI->load->model('bugactivity_model');

        $user = $this->CI->session->userdata('user');
        $this->form_email = $user->email;
        $this->from_fullname = $user->fullname;
    }

    function send($key, $data) {
        $this->assignToValues($key, $data);
        $this->getAssignedToUserInfo();
        $find_replace = $this->getValueAgainstTokens($key);
        extract($find_replace);
        $content = $this->getTemplate($key);
        extract($content);
        $message = preg_replace($find, $replace, $template);
        //echo $message;
        //exit;
        $this->CI->email->from($this->form_email, $this->from_fullname);
        $this->CI->email->to($this->to_email);
        $this->CI->email->subject($subject);
        $this->CI->email->message($message);
        $this->CI->email->send();
    }

    function getAssignedToUserInfo() {
        $to_row = $this->CI->bug_model->getMailAndName($this->resourceto);
        $this->to_fullname = $to_row->fullname;
        $this->to_email = $to_row->email;
    }

    function assignToValues($key, $data) {
        switch ($key) {
            case 'ASSIGN_BUG':
                $this->resourceto = $data['resourceto'];
                $this->title = $data['title'];
                $this->description = $data['description'];
                $this->path = $data['path'];
                break;
            case 'ACTIVITY_BUG':
                $this->resourceto = $data['resourceto'];
                $bug_id = $data['bug_id'];
                $this->activity_description = $data['description'];
                $bug_info = $this->CI->bugactivity_model->getBugInfo($bug_id);
                $this->title = $bug_info->title;
                $this->description = $bug_info->description;
                $this->path = $bug_info->path;
                break;
        }
    }

    function getValueAgainstTokens($key) {

        function includeExpression($element) {
            return '/##' . $element . '##/';
        }

        $find = array();
        $replace = array();
        switch ($key) {
            case 'ASSIGN_BUG':
                $find = array('name', 'title', 'description', 'path');
                $find = array_map("includeExpression", $find);
                $replace = array($this->to_fullname, $this->title, $this->description, $this->path);
                break;
            case 'ACTIVITY_BUG':
                $find = array('name', 'title', 'description', 'path', 'bug_activity_description');
                $find = array_map("includeExpression", $find);
                $replace = array($this->to_fullname, $this->title, $this->description, $this->path, $this->activity_description);
                break;
        }
        return array("find" => $find, "replace" => $replace);
    }

    function getTemplate($key) {
        $info = $this->CI->bug_model->getTemplate($key);
        return array('subject' => $info->subject, 'template' => $info->template);
    }

}