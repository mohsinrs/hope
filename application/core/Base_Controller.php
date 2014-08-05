<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Base_Controller extends CI_Controller {

    protected $layout = 'layout/main';
    protected $enableLayout = true;
    protected $user;

    public function __construct() {
        parent::__construct();
        
        $StaticPages = array('index', 'offers', 'register', 'page');
        if ( !in_array($this->router->fetch_class(), $StaticPages) ) {
            $user_data = $this->session->userdata('user');
            if (empty($user_data)) {
                redirect(base_url('admin/'));
            } else {
                $this->user = $user_data;
            }
        }
    }

    protected function render($file = NULL, $viewData = array(), $layoutData = array()) 
    {
        if ($this->enableLayout === false) {
            $this->load->view($file, $viewData);
        } else {
            
            if (!is_null($file)) {
                $data['content'] = $this->load->view($file, $viewData, TRUE);
                $data['layout'] = $layoutData;
                $data['admin'] = $this->session->userdata('user');
                $this->load->view($this->layout, $data);
            } else {
                $this->load->view($this->layout, $viewData);
            }
        }
        $viewData = array();
    }

    protected function disableLayout() 
    {
        $this->enableLayout = false;
    }
    
    public function setLayout($layout = 'main') {
        
        $this->layout = 'layout/'.$layout;
    }

}