<?php
class Doctor_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function fetchAll()
    {
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->join('speciality', 'speciality.SpecialityID = doctor.SpecialityID');
        $query = $this->db->get();
        
        return $query->result();
    }

    function getOne($id)
    {
        $query = $this->db->get_where('doctor', array('DoctorID' => $id), NULL, NULL);
        return $query->result();
    }

    function insert()
    {
        $data = $this->input->post();
        $USMLECS = isset($data['chkUSMLECS']) ? 1 : 0;
        $IsActive = array_key_exists("rdoStatus" , $data) ? $data['rdoStatus'] : 1;

        $array = array(
            'FirstName' => $data['txtFirstName'] ,
            'LastName' => $data['txtLastName'] ,
            'Gender' => $data['rdoGender'] ,
            'GraduationYear' => $data['cmbGraduation'] ,
            'USMLE1' => $data['cmbUSMLE1'] ,
            'USMLE2' => $data['cmbUSMLE2'] ,
            'USMLECS' => $USMLECS ,
            'SpecialityID' => $data['cmbSpeciality'] ,
            'PostQualification' => $data['txtQualification'] ,
            'Email' => $data['txtEmail'] ,
            'State' => $data['cmbState'] ,
            'City' => $data['txtCity'] ,
            'Address' => $data['txtAddress'] ,
            'Phone' => $data['txtPhone'] ,
            'ContactMethod' => $data['rdoContactMethod'] ,
            'ConfirmationSent' => 0 ,
            'IsActive' => $IsActive
        );

        $this->db->insert('doctor', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function update($id)
    {
        $data = $this->input->post();
        $USMLECS = isset($data['chkUSMLECS']) ? 1 : 0;
        $array = array(
            'FirstName' => $data['txtFirstName'] ,
            'LastName' => $data['txtLastName'] ,
            'Gender' => $data['rdoGender'] ,
            'GraduationYear' => $data['cmbGraduation'] ,
            'USMLE1' => $data['cmbUSMLE1'] ,
            'USMLE2' => $data['cmbUSMLE2'] ,
            'USMLECS' => $USMLECS ,
            'SpecialityID' => $data['cmbSpeciality'] ,
            'PostQualification' => $data['txtQualification'] ,
            'Email' => $data['txtEmail'] ,
            'State' => $data['cmbState'] ,
            'City' => $data['txtCity'] ,
            'Address' => $data['txtAddress'] ,
            'Phone' => $data['txtPhone'] ,
            'ContactMethod' => $data['rdoContactMethod'] ,
            'IsActive' => $data['rdoStatus']
        );

        $this->db->where('DoctorID', $id);
        $this->db->update('doctor', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }
    
    function confirm($id, $pass)
    {
        $array = array(
            'ConfirmationSent' => 1 ,
            'Password' => md5 ($pass)
        );

        $this->db->where('DoctorID', $id);
        $this->db->update('doctor', $array);

        return true;
    }

    function delete($id)
    {
        $this->db->where('DoctorID', $id);
        $this->db->delete('doctor');

        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
}