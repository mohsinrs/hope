<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| PAGINATION SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to set pagination on records.
|
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
*/

$active_group = 'default';
if($_SERVER['HTTP_HOST'] == 'it-bees.com')
    $active_group = 'test';

// Pagination Config setup
$config['base_url'] = base_url();
$config['total_rows'] = 20; // Overwrite with you table's total records
$config['per_page'] = 10;
$config["uri_segment"] = 4;
$config['num_links'] = 2;

$config['full_tag_open'] = '<ul>';
$config['full_tag_close'] = '</ul>';
$config['next_link'] = 'Next → ';
$config['next_tag_open'] = '<li class="next">';
$config['next_tag_close'] = '</li>';        
$config['prev_link'] = '← Previous';
$config['prev_tag_open'] = '<li class="prev">';
$config['prev_tag_close'] = '</li>';        
$config['cur_tag_open'] = '<li class="active"><a href="#">';
$config['cur_tag_close'] = '</a></li>';        
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';

$config['first_link'] = 'First';
$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';
$config['last_link'] = 'Last';
$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';
//$config['use_page_numbers'] = TRUE;


/* End of file pagination.php */
/* Location: ./application/config/pagination.php */