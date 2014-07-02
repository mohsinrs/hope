<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
       
        //$user = $this->session->userdata('user');
        //if (!empty($user)) {
        //    redirect(base_url('admin/dashboard'));
        //}
        $this->load->view('user/index');
    } 

}
