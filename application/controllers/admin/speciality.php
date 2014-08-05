<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Speciality extends Base_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Speciality_model');
    }

    public function index() {
        $data = array();
        $data['result'] = $this->Speciality_model->fetchAll();
        $layout['title'] = "Speciality";
        $this->render('admin/speciality/index', $data, $layout);
    }

    public function view($id = NULL) {
        $data = NULL;
        if ($this->input->post('submit') && $id !== NULL) {

            try {
                $data = $this->input->post();
                $result = $this->Speciality_model->update($data, $id);
                if ($result == true) {
                    setNotification('success', 'Record updated successfully');
                    redirect(base_url('admin/speciality/index'));
                }
            } catch (Exception $e) {
                setNotification('error', 'Error in updating record');
            }
        } else if ($this->input->post('submit') && $id == NULL) {

            try {
                $result = $this->Speciality_model->insert();
                if ($result == true) {
                    setNotification('success', 'Record added successfully');
                    redirect(base_url('admin/speciality/index'));
                }
            } catch (Exception $e) {
                setNotification('error', 'Error in adding record');
            }
        }

        if (!is_null($id)) {
            $data = $this->Speciality_model->getOne($id);
            if (isset($data[0])) {
                $data['result'] = $data[0];
            }
        }
        $layout['title'] = "Speciality";
        //$data['speciality'] = $this->Speciality_model->fetchAll('Student');
        $this->render('admin/speciality/view', $data, $layout);
    }

    public function delete($id) {
        if (empty($id)) {
            setNotification('notice', 'Record not found');
            redirect(base_url('admin/speciality/index'));
        }

        try {
            $result = $this->Speciality_model->delete($id);
            if ($result == true) {
                setNotification('success', 'Record deleted successfully');
                redirect(base_url('admin/speciality/index'));
            }
        } catch (Exception $e) {
            setNotification('error', 'Error in deleting record');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/speciality.php */