<?php

class Student_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function fetchAll()
    {
        $query = $this->db->get_where('student', array('IsDeleted' => 0), NULL, NULL);
        return $query->result();
    }

    function getOne($id)
    {
        $query = $this->db->get_where('student', array('StudentID' => $id, 'IsDeleted' => 0), NULL, NULL);
        return $query->result();
    }

    function insert($data)
    {
        $array = array(
            'Name' => $data['txtName'] ,
            'Gender' => $data['cmbGender'] ,
            'GraduationYear' => $data['cmbGraduation'] ,
            'USMLE1Score' => $data['txtStep1Score'] ,
            'USMLE2Score' => $data['txtStep2Score'] ,
            'USMLE2CS' => $data['cmbStep2CS'] ,
            'PostQual' => $data['txtQualification'] ,
            'Email' => $data['txtEmail'] ,
            'State' => $data['cmbState'] ,
            'City' => $data['txtCity'] ,
            'Address' => $data['txtAddress'] ,
            'Phone' => $data['txtPhone'] ,
            'ContactMethod' => $data['rdoPMC'] ,
            'IsDeleted' => 0
        );

        $this->db->insert('student', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function update($data, $id)
    {
        $array = array(
            'Name' => $data['txtName'] ,
            'Gender' => $data['cmbGender'] ,
            'GraduationYear' => $data['cmbGraduation'] ,
            'USMLE1Score' => $data['txtStep1Score'] ,
            'USMLE2Score' => $data['txtStep2Score'] ,
            'USMLE2CS' => $data['cmbStep2CS'] ,
            'PostQual' => $data['txtQualification'] ,
            'Email' => $data['txtEmail'] ,
            'State' => $data['cmbState'] ,
            'City' => $data['txtCity'] ,
            'Address' => $data['txtAddress'] ,
            'Phone' => $data['txtPhone'] ,
            'ContactMethod' => $data['rdoPMC'] ,
            'IsDeleted' => 0
        );

        $this->db->where('StudentID', $id);
        $this->db->update('student', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }

}