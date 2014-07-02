<?php
class Offer_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
     function fetchAll()
    {
        
        $query = $this->db->get_where('rotation', array('IsDeleted' => 0), NULL, NULL);
        return $query->result();
    }
     function getOne($id)
    {
        $query = $this->db->get_where('rotation', array('RotationID' => $id, 'IsDeleted' => 0), NULL, NULL);
        return $query->result();
    }
    function insertRotaion($data)
    {
        $array = array(
            'Hospital' => $data['txtHospital'] ,
            'FoodState' => $data['foodState'] ,
            'FoodCity' => $data['foodCity'] ,
            'Year' => $data['year'] ,
            'MultipleYears' => $data['multi'] ,
            'TillTear' => $data['Tyear'] ,
            'January' => $data['january'] ,
            'Febuary' => $data['february'] ,
            'March' => $data['march'] ,
            'April' => $data['april'] ,
            'May' => $data['may'] ,
            'June' => $data['june'] ,
            'July' => $data['july'] ,
            'August' => $data['august'] ,
            'September' => $data['september'] ,
            'October' => $data['october'] ,
            'November' => $data['november'] ,
            'December' => $data['december'] ,
            'IsDeleted' => 0 ,
            'OfferType' => 'rotation' ,
            
        );

        $this->db->insert('rotation', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function update($data, $id)
    {
        $array = array(
            'Hospital' => $data['txtHospital'] ,
            'FoodState' => $data['foodState'] ,
            'FoodCity' => $data['foodCity'] ,
            'Year' => $data['year'] ,
            'MultipleYears' => $data['multi'] ,
            'TillTear' => $data['Tyear'] ,
            'January' => $data['january'] ,
            'Febuary' => $data['february'] ,
            'March' => $data['march'] ,
            'April' => $data['april'] ,
            'May' => $data['may'] ,
            'June' => $data['june'] ,
            'July' => $data['july'] ,
            'August' => $data['august'] ,
            'September' => $data['september'] ,
            'October' => $data['october'] ,
            'November' => $data['november'] ,
            'December' => $data['december'] ,
            
        );

        $this->db->where('RotationID', $id);
        $this->db->update('rotation', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }
    
    function insertFood($data)
    {
        $array = array(
            'TotalStudent' => $data['txtStudent'] ,
            'FoodState' => $data['foodState'] ,
            'FoodCity' => $data['txtCity'] ,
            'IsDeleted' => 0 ,
            'OfferType' => 'food' ,
            
        );

        $this->db->insert('rotation', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function updateFood($data, $id)
    {
        $array = array(
            'TotalStudent' => $data['txtStudent'] ,
            'FoodState' => $data['foodState'] ,
            'FoodCity' => $data['foodCity'] ,
            
            
        );

        $this->db->where('RotationID', $id);
        $this->db->update('rotation', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }
    //function StudentSum($id){
        
    //}
    
 }
 
 ?>