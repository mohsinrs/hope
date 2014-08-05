<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attachment extends Base_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
        $this->load->model('Offer_model');
        $this->load->model('Attachment_model');
    }

    public function index()
    {
        if ($this->input->post('submit')) {
            try {
                $data = $this->input->post();
                $result = $this->Attachment_model->insert($data);
                if ($result == true) {
                    $Offer = $this->Offer_model->getOne($data['cmbOffer']);
                    $this->Attachment_model->updateOffer($Offer[0], $data['cmbMonth']);
                    $this->Student_model->inactive($data['cmbStudent']);
                    
                    $this->session->set_flashdata('message', 'Record inserted successfully');
                    redirect(base_url('admin/attachment/index'));
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('message', 'Error in inserting record');
            }
        }
        
        $data = array();
        $data['result'] = $this->Student_model->fetchAll();
        $data['offer'] = $this->Offer_model->fetchAll();
        
        $layout['title'] = "Attachment";
        $this->render('admin/attachment/index', $data, $layout);
    }
    
    public function getoffermonths($a, $id)
    {
        $months_arr = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $Offers = $this->Offer_model->getMonths($id);
        $Offer = $Offers[0];
        
        $options = '';
        foreach($months_arr as $month) {
            if( isset($Offer->$month) && $Offer->$month > 0 ) {
                $options .= '<option>'. $month .'</option>';
            }
        }
        exit($options);
    }

    public function allMatch(){
         $data = array();
        $data['result'] = $this->Attachment_model->fetchAll();
        $layout['title'] = "All Match";
        $this->render('admin/attachment/view',$data,$layout);
    }
    
}
    
/* End of file welcome.php */
/* Location: ./application/controllers/speciality.php */