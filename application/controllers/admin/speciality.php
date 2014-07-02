<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Speciality extends Base_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Speciality_model');
    }

	public function index()
	{
        $data = array();
        $data['result'] = $this->Speciality_model->fetchAll();
        $layout['title'] = "Speciality";
        $this->render('admin/speciality/index', $data, $layout);
	}

	public function view()
	{
        $data = array();
        if( $this->input->post('submit') ) {
            $result = $this->Speciality_model->insert($this->input->post());
            if($result == true) {
                $this->session->set_flashdata('message', 'Speciality added');
                redirect('/admin/speciality/index');
            } else {
                $this->session->set_flashdata('message', 'Speciality can not be added');
            }
        }
        $layout['title'] = "Speciality";
        $this->render('admin/speciality/view', $data, $layout);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/speciality.php */