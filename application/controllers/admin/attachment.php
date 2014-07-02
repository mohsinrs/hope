<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attachment extends Base_Controller {

     function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
        $this->load->model('Offer_model');
    }
	public function index()
	{
            $data = array();
            $layout['title'] = "Student";
            $data['result']['student'] = $this->Student_model->fetchAll();
            $data['result']['offer'] = $this->Offer_model->fetchAll();
            $this->render('admin/attachment/index',$data,  $layout);
        }
}