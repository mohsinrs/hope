<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offers extends CI_Controller {

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
        $this->load->model('Offer_model');
    }
	public function index()
	{
             $data = array();
             $data['result'] = $this->Offer_model->fetchAll();
             $this->load->view('offers/index' , $data);
	}
        
	public function electives($id = NULL)
	{
            $data = NULL;
        if( $this->input->post('submit') && $this->input->post('action') == 'edit' ) {
           
            $result = $this->Offer_model->update($this->input->post(), $id);
            if($result == true) {
                $this->session->set_flashdata('message', 'Offer updated');
                redirect('/offers/index');
            } else {
                $this->session->set_flashdata('message', 'Offer can not be updated');
            }
        } else if( $this->input->post('submit') && $this->input->post('action') == 'insert' ) {
			$result = $this->Offer_model->insertRotaion($this->input->post());
            if($result == true) {
                $this->session->set_flashdata('message', 'Offer added');
                redirect('/offers/index');
            } else {
                $this->session->set_flashdata('message', 'Offer can not be added');
            }
                
	
            }
            if(!is_null($id)) {
            $data = $this->Offer_model->getOne($id);
            if(isset($data[0])) {
                $data['result'] = $data[0];
            }
            	
        }
        $this->load->view('offers/electives-opportunities.php' , $data);
        }
        public function food($id = NULL)
	{
            $data = NULL;
        if( $this->input->post('submit') && $this->input->post('action') == 'edit' ) {
           
            $result = $this->Offer_model->updateFood($this->input->post(), $id);
            if($result == true) {
                $this->session->set_flashdata('message', 'Offer updated');
                redirect('/offers/index');
            } else {
                $this->session->set_flashdata('message', 'Offer can not be updated');
            }
        } else if( $this->input->post('submit') && $this->input->post('action') == 'insert' ) {
			$result = $this->Offer_model->insertFood($this->input->post());
            if($result == true) {
                $this->session->set_flashdata('message', 'Offer added');
                redirect('/offers/index');
            } else {
                $this->session->set_flashdata('message', 'Offer can not be added');
            }
                
	
            }
            if(!is_null($id)) {
            $data = $this->Offer_model->getOne($id);
            if(isset($data[0])) {
                $data['result'] = $data[0];
            }
            	
        }
        $this->load->view('offers/food.php' , $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */