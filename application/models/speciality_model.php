<?php

class Speciality_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function fetchAll()
    {
        $query = $this->db->get_where('speciality', array('IsActive' => 1), NULL, NULL);
        return $query->result();
    }

    function insert($data)
    {
        $array = array(
            'Text' => $data['txtName'] ,
            'Type' => $data['cmbSpecialityType'] ,
            'isActive' => $data['isActive']
        );

        $this->db->insert('speciality', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

}