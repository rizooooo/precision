<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Security extends CI_Controller {

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
		 $this->load->model('administrations/SecurityModel');
	}

	public function index()
	{
		$data['tab'] = 'administrations'; //parent tab
		$data['tab_b'] = 'security'; //parent tab
		$this->load->view('layouts/header');
		$this->load->view('navs/dashboard_nav');
		$this->load->view('tabs', $data);
		$this->load->view('tabs/administrations_tabs', $data);
		$this->load->view('pages/administrations/security');
		$this->load->view('closing_tabs');
		$this->load->view('layouts/footer');
	}

	public function load_security_table(){
	    $result = $this->ion_auth->users()->result();

	     foreach ($result as $row)
            {
            	 $item = array(
        			'id' => $row->id,
        			'username' =>$row->username,
        			'email'=> $row->email,
					'activation_code'=> $row->activation_code,
					'forgotten_password_code'=> $row->forgotten_password_code,
					'forgotten_password_time'=> $row->forgotten_password_time,
					'remember_code'=> $row->remember_code,
					'created_on'=> $row->created_on,
					'last_login'=> $row->last_login,
					'active'=> $row->active,
					'first_name'=> $row->first_name,
					'last_name'=> $row->last_name,
					'phone'=> $row->phone,
					'DHCSUserID'=> $row->DHCSUserID,
					'ManagerEmail'=> $row->ManagerEmail,
					'ManagerName'=> $row->ManagerName,
					'UserCondition'=> $row->UserCondition,
					'Timezone'=> $row->Timezone,
					'status'=> $row->status,
					'LastModified'=> $row->LastModified,
					'AccessLevel'=> $this->ion_auth->get_users_groups($row->id)->row()->description,
					'user_id'=> $row->user_id
    			 );
    			$user_with_group[] = $item;
            }
	  	echo json_encode($user_with_group);
	}
}
