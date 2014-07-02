<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctors extends Base_Controller {

     function __construct()
    {
        parent::__construct();
        $this->load->model('Doctor_model');
    }
	public function index()
	{
        $data = array();
        $layout['title'] = "Doctors";
        $data['result'] = $this->Doctor_model->fetchAll();
        $this->render('admin/doctors/index', $data, $layout);
	}

	public function view($id = NULL)
	{
        $data = NULL;
        if( $this->input->post('submit') && $this->input->post('action') == 'edit' ) {
           
            $result = $this->Doctor_model->update($this->input->post(), $id);
            if($result == true) {
                $this->session->set_flashdata('message', 'Doctor updated');
                redirect('/admin/doctors/index');
            } else {
                $this->session->set_flashdata('message', 'Doctor can not be updated');
            }
        } else if( $this->input->post('submit') && $this->input->post('action') == 'insert' ) {
			$result = $this->Doctor_model->insertDoctor($this->input->post());
            if($result == true) {
                $this->session->set_flashdata('message', 'Doctor added');
                redirect('/admin/doctors/index');
            } else {
                $this->session->set_flashdata('message', 'Doctor can not be added');
            }

        }
            if(!is_null($id)) {
            $data = $this->Doctor_model->getOne($id);
            if(isset($data[0])) {
                $data['result'] = $data[0];
            }
        }
        $layout['title'] = "Doctors";
        $this->render('admin/doctors/view', $data, $layout);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */