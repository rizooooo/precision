<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grants extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() 
    {
        parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		$data['tab'] = 'draw'; //parent tab
		$data['tab_b'] = 'grants'; //parent tab
		$this->load->view('layouts/header');
		$this->load->view('navs/dashboard_nav');
		$this->load->view('tabs', $data);
		$this->load->view('tabs/draw_tabs', $data);
		$this->load->view('pages/draw/grants');
		$this->load->view('closing_tabs');
		$this->load->view('layouts/footer');
	}
}
