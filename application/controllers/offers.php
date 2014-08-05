<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Offers extends Base_Controller {

    function __construct() {
        parent::__construct();
        $this->setLayout('user');
        $this->load->model('Offer_model');
        //$this->load->model('Doctor_model');
    }
public function index() {
       
       $data = array();
        $layout['title'] = "Login";
        $this->render('user/login', $data, $layout);
        
//        $this->load->view('user/index');
    }
    
  public function electives() {
       if( $this->input->post('submit')) {

          $result = $this->Offer_model->insertElective();
            if($result == true) {
                $this->session->set_flashdata('message', 'Record added successfully');
                redirect( base_url('index/login') );
            } else {
                $this->session->set_flashdata('message', 'Error in adding record');
            }
         }
        $data = array();
        $layout['title'] = "Elective";
        $this->render('user/offers/electives', $data, $layout);
    }
    
    
      public function food() {
       if ($this->input->post('submit') && $id == NULL) {

            try {
                $result = $this->Offer_model->insertFood();
                if ($result == true) {
                    $this->session->set_flashdata('message', 'Record added successfully');
                    redirect( base_url('index/login') );
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('message', 'Error in adding record');
            }
        }
        $data = array();
        $layout['title'] = "Food";
        $this->render('user/offers/food', $data, $layout);
    }
    
    public function consulting() {
    
    if ($this->input->post('submit')) {

            try {
                $result = $this->Offer_model->insertConsulting();
                if ($result == true) {
                    $this->session->set_flashdata('message', 'Record added successfully');
                    redirect( base_url('index/login') );
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('message', 'Error in adding record');
            }
        }
        
        $data = array();
        $layout['title'] = "Food";
        $this->render('user/offers/consulting', $data, $layout);
        
    }
    
    public function research() {
    
    if ($this->input->post('submit')) {

            try {
                $result = $this->Offer_model->insertResearch();
                if ($result == true) {
                    $this->session->set_flashdata('message', 'Record added successfully');
                    redirect( base_url('index/login') );
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('message', 'Error in adding record');
            }
        }
        
        $data = array();
        $layout['title'] = "Food";
        $this->render('user/offers/research', $data, $layout);
        
    }
}