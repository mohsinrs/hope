<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offers extends Base_Controller {

     function __construct()
    {
        parent::__construct();
        $this->load->model('Offer_model');
    }
	public function index()
	{
        $data = array();
        $data['result'] = $this->Offer_model->fetchAll();
        $layout['title'] = "Offers";
        $this->render('admin/offers/index', $data, $layout);
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
        $layout['title'] = "Electives Opportunities";
        $this->render('admin/offers/electives-opportunities', $data, $layout);
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
        $layout['title'] = "Food";
        $this->render('admin/offers/food', $data, $layout);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/offers.php */