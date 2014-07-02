<?php
class Docter_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
     function fetchAll()
    {
        $query = $this->db->get_where('docter', array('IsDeleted' => 0), NULL, NULL);
        return $query->result();
    }
     function getOne($id)
    {
        $query = $this->db->get_where('docter', array('DocterID' => $id, 'IsDeleted' => 0), NULL, NULL);
        return $query->result();
    }
    function insertDocter($data)
    {
        $array = array(
            'UserName' => $data['txtUserName'] ,
            'FirstName' => $data['txtFirstName'] ,
            'LastName' => $data['txtLastName'] ,
            'GraduationYear' => $data['txtGraduation'] ,
            'City' => $data['txtCity'] ,
            'Zip' => $data['txtZip'] ,
            'Phone' => $data['txtPhone'] ,
            'Qualification' => $data['txtQualification'] ,
            'Institute' => $data['txtInstitute'] ,
            'Designation' => $data['cmbDesignation'] ,
            'Detail' => $data['txtDetails'] ,
            'Email' => $data['txtEmail'] ,
            'Address' => $data['txtAddress'] ,
            'State' => $data['txtState'] ,
            'Country' => $data['txtCountry'] ,
            'Fax' => $data['txtFax'] ,
            'Speciality' => $data['cmbSpeciality'] ,
            'PracticeType' => $data['cmbPracticeType'] ,
            'MemberType' => $data['cmbMemberType'] ,
            'IsDeleted' => 0 ,
            
            
        );

        $this->db->insert('docter', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function update($data, $id)
    {
        $array = array(
           'UserName' => $data['txtUserName'] ,
            'FirstName' => $data['txtFirstName'] ,
            'LastName' => $data['txtLastName'] ,
            'GraduationYear' => $data['txtGraduation'] ,
            'City' => $data['txtCity'] ,
            'Zip' => $data['txtZip'] ,
            'Phone' => $data['txtPhone'] ,
            'Qualification' => $data['txtQualification'] ,
            'Institute' => $data['txtInstitute'] ,
            'Designation' => $data['cmbDesignation'] ,
            'Detail' => $data['txtDetails'] ,
            'Email' => $data['txtEmail'] ,
            'Address' => $data['txtAddress'] ,
            'State' => $data['txtState'] ,
            'Country' => $data['txtCountry'] ,
            'Fax' => $data['txtFax'] ,
            'Speciality' => $data['cmbSpeciality'] ,
            'PracticeType' => $data['cmbPracticeType'] ,
            'MemberType' => $data['cmbMemberType'] ,
            'IsDeleted' => 0 ,
            
        );

        $this->db->where('DocterID', $id);
        $this->db->update('docter', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }
    
}