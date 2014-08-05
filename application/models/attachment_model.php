<?php

class Attachment_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function insert($data) {
        $array = array(
            'StudentID' => $data['cmbStudent'],
            'OfferID' => $data['cmbOffer'],
            'Month' => $data['cmbMonth']
        );

        $this->db->insert('attachment', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function updateOffer($Offer, $month)
    {
        $this->db->where('OfferID', $Offer->OfferID);
        $this->db->update('offer', array($month => ($Offer->$month - 1)));
        return true;
    }
    
    function fetchAll(){
        $this->db->select('*');
        $this->db->from('attachment');
        $this->db->join('student', 'student.StudentID = attachment.StudentID');
        $this->db->join('offer' , 'offer.OfferID = attachment.OfferID');
        $query = $this->db->get();
        
        return $query->result();
    }
    
}
