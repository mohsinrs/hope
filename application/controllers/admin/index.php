<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends Base_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index($msg = NULL) 
    {
        $user = $this->session->userdata('user');
        if (!empty($user)) {
            redirect(base_url('admin/dashboard'));
        }
        $this->disableLayout();
        $data['msg'] = $msg;
        $this->load->view('admin/index', $data);
    }

    public function process() 
    {
        $this->load->model('login_model');
        $result = $this->login_model->validate();
        if (!$result) {
            $msg = 'Invalid User name or Password';
            $data['msg'] = $msg;
            redirect(base_url('admin/index', $data));
        } else {
            redirect(base_url('admin/dashboard'));
        }
    }

    public function logout() 
    {
        $this->session->unset_userdata('user');
        redirect(base_url('admin/index'));
    }

    public function forgot() 
    {
        $this->load->library('email');

        $this->email->from('info@kemcaana.com', 'Hope KEMCAANA');
        $this->email->to('admin@hope.com'); 
//        $this->email->cc('another@another-example.com'); 
//        $this->email->bcc('them@their-example.com'); 

        $this->email->subject('Password Recovery');
        $this->email->message('Your password is "admin" ');
        
        setNotification('success', 'Password email sent to you. Check your inbox.');
        
        redirect(base_url('admin/index'));
//        $this->email->send();

    }
}