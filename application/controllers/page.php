<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends Base_Controller {

    function __construct() {
        parent::__construct();
        $this->setLayout('user');
    }

    public function accomodations() {

        $data = array();
        $layout['title'] = "Accomodations";
        $this->render('user/pages/accomodations', $data, $layout);
    }

    public function clinical() {
        
        $data = array();
        $layout['title'] = "Clinical Rotations and Externhips";
        $this->render('user/pages/clinical', $data, $layout);
    }

    public function rotations() {

        $data = array();
        $layout['title'] = "University Rotations";
        $this->render('user/pages/rotations', $data, $layout);
    }

    public function loan() {

        $data = array();
        $layout['title'] = "HOPE Loan Program";
        $this->render('user/pages/loan', $data, $layout);
    }

    public function consenus() {

        $data = array();
        $layout['title'] = "HOPE Consenus Statements for USMLE Exams";
        $this->render('user/pages/consenus', $data, $layout);
    }

    public function visaissues() {

        $data = array();
        $layout['title'] = "Visa Issues";
        $this->render('user/pages/visaissues', $data, $layout);
    }

    public function links() {
        
        $data = array();
        $layout['title'] = "Useful Links";
        $this->render('user/pages/links', $data, $layout);
    }

    public function sessions() {

        $data = array();
        $layout['title'] = "Student Club Skype Sessions";
        $this->render('user/pages/sessions', $data, $layout);
    }

    public function preparing() {

        $data = array();
        $layout['title'] = "Preparing for CS exams and residency interviews";
        $this->render('user/pages/preparing', $data, $layout);
    }

    public function research() {

        $data = array();
        $layout['title'] = "Research Opportunities";
        $this->render('user/pages/research', $data, $layout);
    }

}