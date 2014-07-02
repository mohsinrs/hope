<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends Base_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        $data = array();
        $layout['title'] = "Dashboard";
        $this->render('admin/dashboard/index', $data, $layout);
    }

    function logout() 
    {
        $this->session->unset_userdata('user');
        session_destroy();
        redirect('admin', 'refresh');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */