<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
        
    }

    public function validate() {

        $email = $this->input->post('email');
        $this->input->post('password');
        $password = md5($this->input->post('password'));
        if(!empty($email) && !empty($password))
        {
            if($this->input->post('remember') == false)
               $remember_me = false;
            else
                $remember_me = true;

            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('email', $email);
            $this->db->where('password', ($password));
            //$this->db->where('is_delete','n');
            $this->db->limit(1);
            $query = $this->db->get();
            $hour = time() + 3600*60;
            //echo $this->db->last_query();
            if ($remember_me) {
                setcookie('REMEMBER_USER', $this->input->post('email'), $hour, '/');
            }
            //  elseif (isset($_COOKIE['REMEMBER_USER'])) {
            //     $past = time() - 100;
            //    setcookie('REMEMBER_USER', '', $past,'/');
            //  }
            if ($query->num_rows() == 1) {
                $row = $query->row();
                $this->session->set_userdata('user', $row);
                return true;
            }
            return false;

        } else {
            return false;
        }
    }

}

?>