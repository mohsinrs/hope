<?php

if (!defined('BASEPATH'))
    exit('No direct script  allow');

class general_model extends CI_Model {

    public $table_user = 'user';
    public $table_module = 'module';
    public $table_requirement = 'requirement';

    function getUserName($user_id) {
        $select = 'user_name';
        $where['user_id'] = $user_id;
        $user_info = $this->db->select($select)->from($this->table_user)->where($where)->get();
        $user_info = $user_info->row();
        return $user_info->user_name;
    }

    function getProjectId($module_id) {
        $select = 'project_id';
        $where['module_id'] = $module_id;
        $project_info = $this->db->select($select)->from($this->table_module)->where($where)->get();
        $project_info = $project_info->row();

        return $project_info->project_id;
    }

    function getImageName($id) {
        $select = 'requirement_screenshot';
        $where['requirement_id'] = $id;
        $image_info = $this->db->select($select)->from($this->table_requirement)->where($where)->get();
        $image_info = $image_info->row();
        return $image_info->requirement_screenshot;
    }

}

?>