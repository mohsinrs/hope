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
}