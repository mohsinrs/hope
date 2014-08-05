<?php

class Student_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function fetchAll()
    {
        $this->db->select('*');
        $this->db->from('student');
        $this->db->join('speciality', 'speciality.SpecialityID = student.SpecialityID');
        $query = $this->db->get();
        
        return $query->result();
    }

    function getOne($id)
    {
        $this->db->select('*');
        $this->db->from('student');
        $this->db->join('speciality', 'speciality.SpecialityID = student.SpecialityID');
        $this->db->where(array('student.StudentID' => $id), NULL, NULL);
        $query = $this->db->get();
        return $query->result();
    }

    function insert()
    {
        $data = $this->input->post();
        $USMLECS = isset($data['chkUSMLECS']) ? 1 : 0;
        $array = array(
            'FirstName' => $data['txtFirstName'] ,
            'LastName' => $data['txtLastName'] ,
            'Gender' => $data['rdoGender'] ,
            'GraduationYear' => $data['cmbGraduation'] ,
            'USMLE1Score' => $data['cmbUSMLE1'] ,
            'USMLE2Score' => $data['cmbUSMLE2'] ,
            'USMLE2CS' => $USMLECS ,
            'SpecialityID' => $data['cmbSpeciality'] ,
            'Email' => $data['txtEmail'] ,
            'City' => $data['txtCity'] ,
            'Address' => $data['txtAddress'] ,
            'Phone' => $data['txtPhone'] ,
            'ContactMethod' => $data['rdoContactMethod'] ,
            'IsActive' => $data['rdoStatus']
        );

        $this->db->insert('student', $array);
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
            'USMLE1Score' => $data['cmbUSMLE1'] ,
            'USMLE2Score' => $data['cmbUSMLE2'] ,
            'USMLE2CS' => $USMLECS ,
            'SpecialityID' => $data['cmbSpeciality'] ,
            'Email' => $data['txtEmail'] ,
            'City' => $data['txtCity'] ,
            'Address' => $data['txtAddress'] ,
            'Phone' => $data['txtPhone'] ,
            'ContactMethod' => $data['rdoContactMethod'] ,
            'IsActive' => $data['rdoStatus']
        );

        $this->db->where('StudentID', $id);
        $this->db->update('student', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }
    
    function confirm($id, $pass)
    {
        $array = array(
            'ConfirmationSent' => 1 ,
            'Password' => md5 ($pass)
        );

        $this->db->where('StudentID', $id);
        $this->db->update('student', $array);

        return true;
    }

    function delete($id)
    {
        $this->db->where('StudentID', $id);
        $this->db->delete('student');

        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function inactive($id)
    {
        $array = array('IsActive' => 0);
        $this->db->where('StudentID', $id);
        $this->db->update('student', $array);

        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function match($id, $data) {
        $array = array(
            'StudentID' => $id,
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

}