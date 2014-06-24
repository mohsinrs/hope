<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends CI_Controller {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('Student_model');
    }

	public function index()
	{
        $data = array();
        $data['result'] = $this->Student_model->fetchAll();

		$this->load->view('students/index', $data);
	}

	public function view($id)
	{
        $data = '';
		if( $this->input->post('submit') ) {
			$result = $this->Student_model->insert($this->input->post());
            if($result == true) {
                $this->session->set_flashdata('message', 'Student added');
                redirect('/students/index');
            } else {
                $this->session->set_flashdata('message', 'Student can not be added');
            }
		}

        if(!is_null($id)) {
            $data = $this->Student_model->getOne($id);
            var_dump($data); exit;
        }

		$this->load->view('students/view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */