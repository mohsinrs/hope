<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Offer extends Base_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Offer_model');
        $this->load->model('Doctor_model');
        $this->load->model('Speciality_model');
    }

    public function rotation() {
        $data = array();
        $data['result'] = $this->Offer_model->fetchAllRotation();

        $layout['title'] = "Offers";
        $this->render('admin/offers/all-rotation', $data, $layout);
    }
    
    public function foodAll() {
        $data = array();
        $data['result'] = $this->Offer_model->fetchAllfood();

        $layout['title'] = "Offers";
        $this->render('admin/offers/all-food', $data, $layout);
    }
    
    public function consultant() {
        $data = array();
        $data['result'] = $this->Offer_model->fetchAllConsultant();

        $layout['title'] = "Offers";
        $this->render('admin/offers/all-consulting', $data, $layout);
    }
    
    
    public function researchAll() {
        $data = array();
        $data['result'] = $this->Offer_model->fetchAllResearch();

        $layout['title'] = "Offers";
        $this->render('admin/offers/all-research', $data, $layout);
    }
 
    public function electives($id = NULL) {
        $data = NULL;
        if ($this->input->post('submit') && $id !== NULL) {

            try {
                $data = $this->input->post();
                $result = $this->Offer_model->updateElective($data,$id);
                if ($result == true) {
                    $this->session->set_flashdata('message', 'Record updated successfully');
                    redirect(base_url('admin/offer/rotation'));
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('message', 'Error in updating record');
            }
        } else if ($this->input->post('submit') && $id == NULL) {

            try {
                $result = $this->Offer_model->insertElective();
                if ($result == true) {
                    $this->session->set_flashdata('message', 'Record added successfully');
                    redirect(base_url('admin/offer/rotation'));
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('message', 'Error in adding record');
            }
        }

        if (!is_null($id)) {
            $data = $this->Offer_model->getOne($id);
            if (isset($data[0])) {
                $data['result'] = $data[0];
            }
        }

        $data['doctors'] = $this->Doctor_model->fetchAll();
        $data['speciality'] = $this->Speciality_model->fetchAll('Doctor');
        $layout['title'] = "Electives Opportunities";
        $this->render('admin/offers/electives-opportunities', $data, $layout);
    }

    public function food($id = NULL) {
        $data = NULL;
        if ($this->input->post('submit') && $id !== NULL) {

            try {
                $data = $this->input->post();
                $result = $this->Offer_model->updateFood($data,$id);
                if ($result == true) {
                    $this->session->set_flashdata('message', 'Record updated successfully');
                    redirect(base_url('admin/offer/foodAll'));
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('message', 'Error in updating record');
            }
        } else if ($this->input->post('submit') && $id == NULL) {

            try {
                $result = $this->Offer_model->insertFood();
                if ($result == true) {
                    $this->session->set_flashdata('message', 'Record added successfully');
                    redirect(base_url('admin/offer/foodAll'));
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('message', 'Error in adding record');
            }
        }

        if (!is_null($id)) {
            $data = $this->Offer_model->getOne($id);
            if (isset($data[0])) {
                $data['result'] = $data[0];
            }
        }

        $layout['title'] = "Food";
        $this->render('admin/offers/food', $data, $layout);
    }

    public function consulting($id = NULL) {
        $data = NULL;
        if ($this->input->post('submit') && $id !== NULL) {

            try {
                $data = $this->input->post();
                $result = $this->Offer_model->updateConsulting($data,$id);
                if ($result == true) {
                    $this->session->set_flashdata('message', 'Record updated successfully');
                    redirect(base_url('admin/offer/consultant'));
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('message', 'Error in updating record');
            }
        } else if ($this->input->post('submit') && $id == NULL) {

            try {
                $result = $this->Offer_model->insertConsulting();
                if ($result == true) {
                    $this->session->set_flashdata('message', 'Record added successfully');
                    redirect(base_url('admin/offer/consultant'));
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('message', 'Error in adding record');
            }
        }

        if (!is_null($id)) {
            $data = $this->Offer_model->getOne($id);
            if (isset($data[0])) {
                $data['result'] = $data[0];
            }
        }

        $layout['title'] = "Consulting";
        $this->render('admin/offers/consulting', $data, $layout);
    }

    public function delete($id) {
        if (empty($id)) {
            $this->session->set_flashdata('message', 'Record not found');
            redirect(base_url('admin/offer/index'));
        }

        try {
            $result = $this->Offer_model->delete($id);
            if ($result == true) {
                $this->session->set_flashdata('message', 'Record deleted successfully');
                redirect(base_url('admin/offer/index'));
            }
        } catch (Exception $e) {
            $this->session->set_flashdata('message', 'Error in deleting record');
        }
    }

    public function research($id = NULL) {
        $data = NULL;
        if ($this->input->post('submit') && $id !== NULL) {

            try {
                $data = $this->input->post();
                $result = $this->Offer_model->updateResearch($data, $id);
                if ($result == true) {
                    $this->session->set_flashdata('message', 'Record updated successfully');
                    redirect(base_url('admin/offer/researchAll'));
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('message', 'Error in updating record');
            }
        } else if ($this->input->post('submit') && $id == NULL) {

            try {
                $result = $this->Offer_model->insertResearch();
                if ($result == true) {
                    $this->session->set_flashdata('message', 'Record added successfully');
                    redirect(base_url('admin/offer/researchAll'));
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('message', 'Error in adding record');
            }
        }

        if (!is_null($id)) {
            $data = $this->Offer_model->getOne($id);
            if (isset($data[0])) {
                $data['result'] = $data[0];
            }
        }

        $layout['title'] = "Research";
        $this->render('admin/offers/research', $data, $layout);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/offers.php */