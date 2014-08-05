<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends Base_Controller {

    function __construct() {
        parent::__construct();
        $this->setLayout('user');
        $this->load->model('Student_model');
        $this->load->model('Doctor_model');
        $this->load->model('Speciality_model');
    }
    
    public function index() 
    {
        $data = array();
        $layout['title'] = "Register";
        $this->render('user/register', $layout);
    }
    public function login() 
    {
        $data = array();
        $layout['title'] = "Login";
        $this->render('user/signup', $layout);
    }
    
    public function graduate() 
    {
        if ($this->input->post('submit')) {

            $result = $this->Student_model->insert();
            if ($result == true) {
                $this->session->set_flashdata('message', 'Record added successfully');
                redirect(base_url('index'));
            } else {
                $this->session->set_flashdata('message', 'Error in adding record');
            }
        }
        $data = array();
        $layout['title'] = "Register";
        $this->render('user/graduate', $data, $layout);
    }

    public function consultant() 
    {
        if ($this->input->post('submit')) {

            $result = $this->Doctor_model->insert();
            if ($result == true) {
                $this->session->set_flashdata('message', 'Record added successfully');
                redirect(base_url('index'));
            } else {
                $this->session->set_flashdata('message', 'Error in adding record');
            }
        }
        $data = array();
        $data['Specilities'] = $this->Speciality_model->fetchAll();
        $layout['title'] = "Register";
        $this->render('user/consultant', $data, $layout);
    }
    
}
