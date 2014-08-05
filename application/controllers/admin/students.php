<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Students extends Base_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Student_model');
        $this->load->model('Speciality_model');
        $this->load->model('Offer_model');
    }

    public function index() {
        $data = array();
        $data['result'] = $this->Student_model->fetchAll();
        $layout['title'] = "Students";
        $this->render('admin/students/index', $data, $layout);
    }

    public function view($id = NULL) {
        $data = NULL;
        if ($this->input->post('submit') && $id !== NULL) {

            try {
                $result = $this->Student_model->update($id);
                if ($result == true) {
                    setNotification('success', 'Record updated successfully');
                    redirect(base_url('admin/students/index'));
                }
            } catch (Exception $e) {
                setNotification('error', 'Error in updating record');
            }
        } else if ($this->input->post('submit') && $id == NULL) {

            $result = $this->Student_model->insert();
            if ($result == true) {
                setNotification('success', 'Record added successfully');
                redirect(base_url('admin/students/index'));
            } else {
                setNotification('error', 'Error in adding record');
            }
        }

        if (!is_null($id)) {
            $data = $this->Student_model->getOne($id);
            if (isset($data[0])) {
                $data['result'] = $data[0];
            }
        }

        $layout['title'] = "Students";
        $data['speciality'] = $this->Speciality_model->fetchAll();
        $this->render('admin/students/view', $data, $layout);
    }
    
    public function confirm($id) {
        
        try {
            $password = generatePassword();
            $this->load->library('email');

            $this->email->from('info@kemcaana.com', 'Hope KEMCAANA');
            $this->email->to('admin@hope.com'); 
            $this->email->subject('Account created');
            $this->email->message('Your account created in hope.kemcaana.com.pk <br/>. Login with your provided email. Your account password is '.$password);

            $result = $this->Student_model->confirm($id, $password);
            if ($result == true) {
                setNotification('success', 'Confirmation sent successfully');
                redirect(base_url('admin/students/index'));
            }
        } catch (Exception $e) {
            setNotification('error', 'Error in deleting record');
        }
    }

    public function delete($id) {
        if (empty($id)) {
            setNotification('notice', 'Record not found');
            redirect(base_url('admin/students/index'));
        }

        try {
            $result = $this->Student_model->delete($id);
            if ($result == true) {
                setNotification('success', 'Record deleted successfully');
                redirect(base_url('admin/students/index'));
            }
        } catch (Exception $e) {
            setNotification('error', 'Error in deleting record');
        }
    }
    
    public function match($id) {
        
        if ($this->input->post('submit')) {
            try {
                $data = $this->input->post();
                $result = $this->Student_model->match($id, $data);
                if ($result == true) {
                    $Offer = $this->Offer_model->getOne($data['cmbOffer']);
                    $this->Student_model->updateOffer($Offer[0], $data['cmbMonth']);
                    $this->Student_model->inactive($data['cmbStudent']);
                    
                    setNotification('success', 'Record inserted successfully');
                    redirect(base_url('admin/students/index'));
                }
            } catch (Exception $e) {
                setNotification('error', 'Error in inserting record');
            }
        }
        
        if (empty($id)) {
            setNotification('notice', 'Record not found');
            redirect(base_url('admin/students/index'));
        }
        $data = array();
        $graduate = $this->Student_model->getOne($id);
        $data['graduate'] = $graduate[0];
        $data['offers'] = $this->Offer_model->fetchBySpeciality($graduate[0]->SpecialityID);
        $layout['title'] = "Match Offer";
        $this->render('admin/students/match', $data, $layout);
    }
    
    public function getoffermonths($id)
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

}

/* End of file welcome.php */
/* Location: ./application/controllers/students.php */