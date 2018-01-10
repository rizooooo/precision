<?php
/**
 * This is where we put our customized functions
 */
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('is_logged_in'))    
{
    function is_logged_in()
    { 
        $CI = & get_instance();
        $CI->load->library('ion_auth');
        $CI->ion_auth->logged_in();
        if(!$CI->ion_auth->logged_in()){
            $CI->session->set_flashdata('logged', '<script>alert("You\'ve been logged out. Please Login ulet");</script>');
            redirect('login');
        }
    }
}