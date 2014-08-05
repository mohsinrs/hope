<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offers extends Base_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Offer_model');
        $this->load->model('Doctor_model');
        $this->load->model('Speciality_model');
    }
}