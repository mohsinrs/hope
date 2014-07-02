<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Simple config file based ACL
 *
 * @author Kevin Phillips <kevin@kevinphillips.co.nz>
 */
class Acl {

    private $_CI;
    private $acl;

    function __construct() {
        $this->CI = & get_instance();
    }

    public function has_permission() {
        $user = $this->CI->session->userdata('user');
        if ($this->CI->config->item('trackerAcl') && $user->role_id != 1) {
            $permissions = array();
            $user_menu_access = $this->CI->session->userdata('user_menu_access');
            if (!empty($user_menu_access)) {//if session have value
                //$permissions = $user_menu_access;
            } else {
                $menu_access = $this->CI->project_model->screenMenuAccess();
                if (!empty($menu_access)) {
                    foreach ($menu_access as $row) {
                        if ($row->privilege_name == 'Requirements') {
                            $permissions[11] = 'test_scenario';
                            $permissions[12] = 'test_case';
                            $permissions[13] = 'bug';
                            $permissions[14] = 'bugactivity';
                            $permissions[15] = 'bugactivitys';
                        }
                        $permissions[$row->privilege_id] = $row->privilege_name;
                    }
                }
                else
                    $permissions = array('No menu access');
                $this->CI->session->set_userdata('user_menu_access', $permissions);
            }
            // $flag = 0;
//            foreach ($permissions as $screen_menu_name) {
//                if (strcmp($screen_menu_name, $controller_name) == 0) {
//                    $flag = 1;
//                }
//            }
//            if ($flag == 1)
//                return true;
//            else
//                return false;
        }
        //  else
        //     return true;
    }

}

/* End of application/libraries/acl.php */