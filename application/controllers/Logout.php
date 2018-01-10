<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
      	$this->load->library('ion_auth');
	}

	public function index()
	{
		$this->ion_auth->logout();
		redirect(base_url());
	}
}
