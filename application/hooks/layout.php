<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * CI Layout
 *
 * 
 */
class Layout {
    public function index()
    {
        $CI =& get_instance();
 
        $current_output = $CI->output->get_output();
 
        $layout_file = APPPATH . 'views/layout.php';
        $layout = $CI->load->file($layout_file, true);
        $mod_output = str_replace("{content}", $current_output, $layout);
 
        echo $mod_output;
    }
}