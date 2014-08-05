<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends Base_Controller {

    function __construct() {
        parent::__construct();
        $this->setLayout('user');
        $this->load->model('Student_model');
        $this->load->model('Doctor_model');
    }

    public function index() {

        $data = array();
        $layout['title'] = "Home";
        $this->render('user/index', $data, $layout);

//        $this->load->view('user/index');
    }

    public function login() {

        $data = array();
        $layout['title'] = "Login";
        $this->render('user/login', $data, $layout);
    }

    public function graduate() {
        if ($this->input->post('submit')) {

            $result = $this->Student_model->insert();
            if ($result == true) {
                $this->session->set_flashdata('message', 'Record added successfully');
                redirect(base_url('index/register'));
            } else {
                $this->session->set_flashdata('message', 'Error in adding record');
            }
        }
        $data = array();
        $layout['title'] = "Register";
        $this->render('user/register', $data, $layout);
    }

    public function register_doc() {
        if ($this->input->post('submit')) {

            $result = $this->Doctor_model->insert();
            if ($result == true) {
                $this->session->set_flashdata('message', 'Record added successfully');
                redirect(base_url('index/register'));
            } else {
                $this->session->set_flashdata('message', 'Error in adding record');
            }
        }
        $data = array();
        $layout['title'] = "Register";
        $this->render('user/register_doc', $data, $layout);
    }

    public function processconsultant() {
        $this->load->model('login_model');
        $result = $this->login_model->validateConsultant();
        if (!$result) {
            $msg = 'Invalid User name or Password';
            $data['msg'] = $msg;
            redirect(base_url('index', $data));
        } else {
            redirect(base_url('index/login'));
        }
    }

    public function logout() {


        $this->session->unset_userdata('consultant');
        redirect(base_url('/'));
    }

}
