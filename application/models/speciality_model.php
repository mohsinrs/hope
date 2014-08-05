<?php

class Speciality_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function fetchAll($type = NULL) {
        $query = $this->db->get_where('speciality', array(), NULL, NULL);
        return $query->result();
    }

    function getOne($id) {
        $query = $this->db->get_where('speciality', array('SpecialityID' => $id), NULL, NULL);
        return $query->result();
    }

    function insert() {
        $data = $this->input->post();
        $array = array(
            'Text' => $data['txtText'],
            'isActive' => $data['isActive']
        );

        $this->db->insert('speciality', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function update($data, $id) {
        $array = array(
            'Text' => $data['txtText'],
            'isActive' => $data['isActive']
        );

        $this->db->where('SpecialityID', $id);
        $this->db->update('speciality', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }

    function delete($id) {
        $this->db->where('SpecialityID', $id);
        $this->db->delete('speciality');

        return ($this->db->affected_rows() != 1) ? false : true;
    }

}