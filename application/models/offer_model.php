<?php

class Offer_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        
    }
    
    function fetchBySpeciality($SpecialityID)
    {
        $query = $this->db->get_where('offer', array('SpecialityID' => $SpecialityID), NULL, NULL);
        return $query->result();
    }
    function fetchBySpecialityName($SpecialityID)
    {
        $query = $this->db->get_where('speciality', array('SpecialityID' => $SpecialityID), NULL, NULL);
        return $query->result();
    }
    function fetchAllRotation() {
        $this->db->select('*');
        $this->db->from('offer');
        $this->db->join('speciality', 'speciality.SpecialityID = offer.SpecialityID');
        $this->db->where(array('offer.IsActive' => 1,'offer.OfferType' => 'rotation'), NULL, NULL);
        $query = $this->db->get();
        return $query->result();
    }
    
    function fetchAllFood() {
        $query = $this->db->get_where('offer', array('IsActive' => 1,'OfferType' => 'food'), NULL, NULL);
        return $query->result();
    }
    
    function fetchAllConsultant() {
        $query = $this->db->get_where('offer', array('IsActive' => 1,'OfferType' => 'consulting'), NULL, NULL);
        return $query->result();
    }
    
    function fetchAllResearch() {
        $query = $this->db->get_where('offer', array('IsActive' => 1,'OfferType' => 'research'), NULL, NULL);
        return $query->result();
    }

    function getOne($id) {
        $query = $this->db->get_where('offer', array('OfferID' => $id, 'IsActive' => 1), NULL, NULL);
        return $query->result();
    }

    function fetchMonth() {
        $query = $this->db->get_where('offer', array('OfferID' => $id), NULL, NULL);
        return $query->result();
    }

    function insertElective() {
        $data = $this->input->post();
        $array = array(
            'DoctorID' => $data['cmbDoctor'],
            'SpecialityID' => $data['cmbSpeciality'],
            'Hospital' => $data['txtHospital'],
            'Year' => $data['cmbYear'],
            'MultipleYears' => 0, // Dummy Value
            'TillYear' => 0, // Dummy Value
            'State' => $data['cmbState'],
            'City' => $data['txtCity'],
            'January' => $data['cntJanuary'],
            'February' => $data['cntFebruary'],
            'March' => $data['cntMarch'],
            'April' => $data['cntApril'],
            'May' => $data['cntMay'],
            'June' => $data['cntJune'],
            'July' => $data['cntJuly'],
            'August' => $data['cntAugust'],
            'September' => $data['cntSeptember'],
            'October' => $data['cntOctober'],
            'November' => $data['cntNovember'],
            'December' => $data['cntDecember'],
            'IsActive' => 1,
            'OfferType' => 'rotation'
        );

        $this->db->insert('offer', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function updateElective($data, $id) {
        $array = array(
            'DoctorID' => $data['cmbDoctor'],
            'SpecialityID' => $data['cmbSpeciality'],
            'Hospital' => $data['txtHospital'],
            'Year' => $data['cmbYear'],
            'MultipleYears' => 0, // Dummy Value
            'TillYear' => 0, // Dummy Value
            'State' => $data['cmbState'],
            'City' => $data['txtCity'],
            'January' => $data['cntJanuary'],
            'February' => $data['cntFebruary'],
            'March' => $data['cntMarch'],
            'April' => $data['cntApril'],
            'May' => $data['cntMay'],
            'June' => $data['cntJune'],
            'July' => $data['cntJuly'],
            'August' => $data['cntAugust'],
            'September' => $data['cntSeptember'],
            'October' => $data['cntOctober'],
            'November' => $data['cntNovember'],
            'December' => $data['cntDecember'],
            'IsActive' => 1,
            'OfferType' => 'rotation'
        );

        $this->db->where('OfferID', $id);
        $this->db->update('offer', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }

    function insertFood() {
        $data = $this->input->post();
        $array = array(
            
            'State' => $data['State'],
            'City' => $data['City'],
            'IsActive' => 1,
            'OfferType' => 'food',
            'January' => $data['cntJanuary'],
            'February' => $data['cntFebruary'],
            'March' => $data['cntMarch'],
            'April' => $data['cntApril'],
            'May' => $data['cntMay'],
            'June' => $data['cntJune'],
            'July' => $data['cntJuly'],
            'August' => $data['cntAugust'],
            'September' => $data['cntSeptember'],
            'October' => $data['cntOctober'],
            'November' => $data['cntNovember'],
            'December' => $data['cntDecember'],
        );

        $this->db->insert('offer', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function updateFood($data, $id) {
        $array = array(
            
            'State' => $data['State'],
            'City' => $data['City'],
            'January' => $data['cntJanuary'],
            'February' => $data['cntFebruary'],
            'March' => $data['cntMarch'],
            'April' => $data['cntApril'],
            'May' => $data['cntMay'],
            'June' => $data['cntJune'],
            'July' => $data['cntJuly'],
            'August' => $data['cntAugust'],
            'September' => $data['cntSeptember'],
            'October' => $data['cntOctober'],
            'November' => $data['cntNovember'],
            'December' => $data['cntDecember'],
            'OfferType' => 'food',
        );

        $this->db->where('OfferID', $id);
        $this->db->update('offer', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }

    function insertConsulting() {
        $data = $this->input->post();
        $array = array(
            
            'State' => $data['State'],
            'City' => $data['City'],
            'January' => $data['cntJanuary'],
            'February' => $data['cntFebruary'],
            'March' => $data['cntMarch'],
            'April' => $data['cntApril'],
            'May' => $data['cntMay'],
            'June' => $data['cntJune'],
            'July' => $data['cntJuly'],
            'August' => $data['cntAugust'],
            'September' => $data['cntSeptember'],
            'October' => $data['cntOctober'],
            'November' => $data['cntNovember'],
            'December' => $data['cntDecember'],
            'OfferType' => 'consulting',
            'IsActive' => 1,
        );

        $this->db->insert('offer', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function updateConsulting($data, $id) {
        $array = array(
            
            'State' => $data['State'],
            'City' => $data['City'],
            'January' => $data['cntJanuary'],
            'February' => $data['cntFebruary'],
            'March' => $data['cntMarch'],
            'April' => $data['cntApril'],
            'May' => $data['cntMay'],
            'June' => $data['cntJune'],
            'July' => $data['cntJuly'],
            'August' => $data['cntAugust'],
            'September' => $data['cntSeptember'],
            'October' => $data['cntOctober'],
            'November' => $data['cntNovember'],
            'December' => $data['cntDecember'],
            'OfferType' => 'consulting',
        );

        $this->db->where('OfferID', $id);
        $this->db->update('offer', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }

    function delete($id) {
        $this->db->where('OfferID', $id);
        $this->db->delete('offer');

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function insertResearch() {
        $data = $this->input->post();
        $array = array(
            
            'State' => $data['State'],
            'City' => $data['City'],
            'January' => $data['cntJanuary'],
            'February' => $data['cntFebruary'],
            'March' => $data['cntMarch'],
            'April' => $data['cntApril'],
            'May' => $data['cntMay'],
            'June' => $data['cntJune'],
            'July' => $data['cntJuly'],
            'August' => $data['cntAugust'],
            'September' => $data['cntSeptember'],
            'October' => $data['cntOctober'],
            'November' => $data['cntNovember'],
            'December' => $data['cntDecember'],
            'OfferType' => 'research',
            'IsActive' => 1,
        );

        $this->db->insert('offer', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function updateResearch($data, $id) {

        $array = array(
            
            'State' => $data['State'],
            'City' => $data['City'],
            'January' => $data['cntJanuary'],
            'February' => $data['cntFebruary'],
            'March' => $data['cntMarch'],
            'April' => $data['cntApril'],
            'May' => $data['cntMay'],
            'June' => $data['cntJune'],
            'July' => $data['cntJuly'],
            'August' => $data['cntAugust'],
            'September' => $data['cntSeptember'],
            'October' => $data['cntOctober'],
            'November' => $data['cntNovember'],
            'December' => $data['cntDecember'],
            'OfferType' => 'research',
        );

        $this->db->where('OfferID', $id);
        $this->db->update('offer', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }
    
    function getMonths($id)
    {
        $query = $this->db->get_where('offer', array('OfferID' => $id, 'IsActive' => 1), NULL, NULL);
        return $query->result();
    }

}

?>