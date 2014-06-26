<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Speciality extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Speciality_model');
    }

	public function index()
	{
        $data = array();
        $data['result'] = $this->Speciality_model->fetchAll();

		$this->load->view('speciality/index', $data);
	}

	public function view()
	{
        if( $this->input->post('submit') ) {
            $result = $this->Speciality_model->insert($this->input->post());
            if($result == true) {
                $this->session->set_flashdata('message', 'Speciality added');
                redirect('/speciality/index');
            } else {
                $this->session->set_flashdata('message', 'Speciality can not be added');
            }
        }
		$this->load->view('speciality/view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */