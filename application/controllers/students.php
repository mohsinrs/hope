<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
    }

	public function index()
	{
        $data = array();
        $data['result'] = $this->Student_model->fetchAll();

		$this->load->view('students/index', $data);
	}

	public function view($id = NULL)
	{
        $data = NULL;
        if( $this->input->post('submit') && $this->input->post('action') == 'edit' ) {
            $result = $this->Student_model->update($this->input->post(), $id);
            if($result == true) {
                $this->session->set_flashdata('message', 'Student updated');
                redirect('/students/index');
            } else {
                $this->session->set_flashdata('message', 'Student can not be updated');
            }
        } else if( $this->input->post('submit') && $this->input->post('action') == 'insert' ) {
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
            if(isset($data[0])) {
                $data['result'] = $data[0];
            }
        }

		$this->load->view('students/view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */