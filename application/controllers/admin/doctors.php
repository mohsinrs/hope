<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Doctors extends Base_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Doctor_model');
        $this->load->model('Speciality_model');
    }

    public function index() {
        $data = array();
        $layout['title'] = "Consultants";
        $data['result'] = $this->Doctor_model->fetchAll();
        $this->render('admin/doctors/index', $data, $layout);
    }

    public function view($id = NULL) {
        $data = NULL;
        if ($this->input->post('submit') && $id !== NULL) {

            try {
                $result = $this->Doctor_model->update($id);
                if ($result == true) {
                    setNotification('success', 'Record updated successfully');
                    redirect(base_url('admin/doctors/index'));
                }
            } catch (Exception $e) {
                setNotification('error', 'Error in updating record');
            }
        } else if ($this->input->post('submit') && $id == NULL) {

            try {
                $result = $this->Doctor_model->insert();
                if ($result == true) {
                    setNotification('success', 'Record added successfully');
                    redirect('/admin/doctors/index');
                }
            } catch (Exception $e) {
                setNotification('error', 'Error in adding record');
            }
        }

        if (!is_null($id)) {
            $data = $this->Doctor_model->getOne($id);
            if (isset($data[0])) {
                $data['result'] = $data[0];
            }
        }
        $layout['title'] = "Doctors";
        $data['speciality'] = $this->Speciality_model->fetchAll();
        $this->render('admin/doctors/view', $data, $layout);
    }
    
    public function confirm($id) {
        
        try {
            $password = generatePassword();
            //$password = '12345';
            $this->load->library('email');

            $this->email->from('info@kemcaana.com', 'Hope KEMCAANA');
            $this->email->to('admin@hope.com'); 
            $this->email->subject('Account created');
            $this->email->message('Your account created in hope.kemcaana.com.pk <br/>. Login with your provided email. Your account password is  '.$password);
            $result = $this->Doctor_model->confirm($id, $password);
            $this->email->send();
            if ($result == true) {
                setNotification('success', 'Confirmation sent successfully');
                redirect(base_url('admin/doctors/index'));
            }
        } catch (Exception $e) {
            setNotification('error', 'Error in deleting record');
        }
    }

    public function delete($id) {
        if (empty($id)) {
            setNotification('notice', 'Record not found');
            redirect(base_url('admin/doctors/index'));
        }

        try {
            $result = $this->Doctor_model->delete($id);
            if ($result == true) {
                setNotification('success', 'Record deleted successfully');
                redirect(base_url('admin/doctors/index'));
            }
        } catch (Exception $e) {
            setNotification('error', 'Error in deleting record');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */