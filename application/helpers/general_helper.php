<?php

function UploadImage($file_name, $file_tmp, $folder_name, $insert_id = '') {
    if (!file_exists(ROOT_PATH . '/public/uploads/' . $folder_name))
        mkdir(ROOT_PATH . '/public/uploads/' . $folder_name);
    if (!file_exists(ROOT_PATH . '/public/uploads/' . $folder_name . '/' . $insert_id))
        mkdir(ROOT_PATH . '/public/uploads/' . $folder_name . '/' . $insert_id);
    move_uploaded_file($file_tmp, ROOT_PATH . '/public/uploads/' . $folder_name . '/' . $insert_id . '/' . $file_name);
}

function GetUploadFileName($file) {
    $file_name = $file['name'];
    $file_name = str_replace(' ', '_', $file_name);
    $file_name = time() . '_' . $file_name;
    return $file_name;
}

function Msg($msg, $msg_type) {
    $CI = & get_instance();
    $CI->session->set_flashdata('msg', $msg);
    $CI->session->set_flashdata('msg_type', $msg_type);
}

function renderMsg() {
    $CI = & get_instance();
    $msg = $CI->session->flashdata('msg');
    $msg_type = $CI->session->flashdata('msg_type');
    if (empty($msg))
        return false;
    echo '<div class="alert alert-' . $msg_type . '">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        ' . $msg . '
    </div>';
}

function getTSFileName($test_scenario_id) {
    $CI = &get_instance();
    return $CI->test_scenario_model->getTSFileName($test_scenario_id);
}

function getProjectFileName($test_case_id) {
    $CI = &get_instance();
    return $CI->project_model->getProjectFileName($test_case_id);
}

//////////////////////
/////////////////////


function isActive($para) {
    if ($para == 1) {
        return 'y';
    } else {
        return 'n';
    }
}

function getCategoryName($category_id) {
    $CI = & get_instance();
    $category_name = $CI->asset_model->getCategoryName($category_id);
    return $category_name;
}

function uploadInsertFile($file) {
    if ($file['error'] != 4) {
        $file_name = $file['name'];
        $file_name = time() . '_' . str_replace(' ', '_', $file_name);
        $file_tmp = $file['tmp_name'];
        move_uploaded_file($file_tmp, ROOT_PATH . '/public/uploads/' . $file_name);
    } else {
        $file_name = '';
    }
    return $file_name;
}

function getFileName($asset_id) {
    $CI = & get_instance();
    $asset_file = $CI->asset_model->getFileName($asset_id);
    return $asset_file;
}

function uploadUpdateFile($file, $asset_id) {
    if ($file['error'] != 4) {
        $file_name = $file['name'];
        $file_name = time() . '_' . str_replace(' ', '_', $file_name);
        $file_tmp = $file['tmp_name'];
        $asset_file = getFileName($asset_id);
        @unlink(ROOT_PATH . '/public/uploads/' . $asset_file);
        move_uploaded_file($file_tmp, ROOT_PATH . '/public/uploads/' . $file_name);
    } else {
        $file_name = getFileName($asset_id);
    }
    return $file_name;
}

function setNotification($message, $type = 'error') {
    Msg($message, $type);
}

function renderNotification() {
    renderMsg();
}

function shorten($text, $length) {
    if (strlen($text) > $length)
        return preg_replace('/\s+?(\S+)?$/', '', substr($text, 0, $length)) . " ...";
    else
        return $text;
}

function getLoginUserId() {
    $CI = & get_instance();
    $user = $CI->session->userdata('user');
    return $user->resource_id;
}

function getDefaultProjectID() {
    $CI = & get_instance();
    //if ($CI->session->userdata('default_project') == 0)
    //   return 0;
    return $CI->session->userdata('default_project');
}

//function accessLevelControl() {
//    $CI = & get_instance();
//    $CI->acl->has_permission();
//    //  $hasPermision = $CI->acl->has_permission();
//    // if (empty($hasPermision)) {
//    //    redirect(base_url('index'));
//    // }
//}

function showLeftMenus($menu_name) {
    $CI = & get_instance();
    $user = $CI->session->userdata('user');
    //var_dump($user);
    if ($CI->config->item('trackerAcl') && $user->role_id != 1) {
        $CI = & get_instance();
        $user_menu_access = $CI->session->userdata('user_menu_access');
        //var_dump($user_menu_access);//exit; 
        if (is_array($user_menu_access) && in_array($menu_name, $user_menu_access))
            return true;
        else
            return false;
    }
    else
        return true;
}
