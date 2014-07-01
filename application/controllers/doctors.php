<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctors extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
     function __construct()
    {
        parent::__construct();
        $this->load->model('Docter_model');
    }
	public function index()
	{
            $data = array();
        $data['result'] = $this->Docter_model->fetchAll();
		$this->load->view('doctors/index' , $data);
	}

	public function view($id = NULL)
	{
            $data = NULL;
        if( $this->input->post('submit') && $this->input->post('action') == 'edit' ) {
           
            $result = $this->Docter_model->update($this->input->post(), $id);
            if($result == true) {
                $this->session->set_flashdata('message', 'Docter updated');
                redirect('/doctors/index');
            } else {
                $this->session->set_flashdata('message', 'Docter can not be updated');
            }
        } else if( $this->input->post('submit') && $this->input->post('action') == 'insert' ) {
			$result = $this->Docter_model->insertDocter($this->input->post());
            if($result == true) {
                $this->session->set_flashdata('message', 'Docter added');
                redirect('/doctors/index');
            } else {
                $this->session->set_flashdata('message', 'Docter can not be added');
            }
                
	
            }
            if(!is_null($id)) {
            $data = $this->Docter_model->getOne($id);
            if(isset($data[0])) {
                $data['result'] = $data[0];
            }
            	
        }
        $this->load->view('doctors/view.php' , $data);
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */