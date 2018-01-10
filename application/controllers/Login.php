<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	function __construct(){
        parent:: __construct();
		$this->load->library('ion_auth');
    }

	public function index()
	{
		$this->load_view();
	}

	public function load_view(){
		$data['tab'] = 'login';
		$this->load->view('layouts/header');
		$this->load->view('navs/index_nav', $data);
		$this->load->view('pages/login');
		$this->load->view('layouts/footer');
	}

	public function submit(){
		$config = array(
				        array(
				                'field' => 'email',
				                'label' => 'email address',
				                'rules' => 'required|valid_email'
				        ),
				        array(
				                'field' => 'password',
				                'label' => 'password',
				                'rules' => 'required'
				        ),
				        array(
				                'field' => 'g-recaptcha-response',
				                'label' => 'reCaptcha',
				                'rules' => 'callback_recaptcha_check'
				        )
				);
				$this->form_validation->set_error_delimiters('<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Oh snap!</strong>&nbsp;', '</div>');
		    	$this->form_validation->set_rules($config);
		      	if ($this->form_validation->run() == FALSE)
                {
                	// print_r($_POST);
                        $this->load_view();
                }
                else
                {	  
					$remember = FALSE; // remember the user
					$result = $this->ion_auth->login($this->input->post('email'), $this->input->post('password'), $remember);

					if($result){
						redirect('home');

					} else {
						redirect(base_url());
					}
                }
	}

	public function recaptcha_check($response)
    {
    	$url = 'https://www.google.com/recaptcha/api/siteverify';
        $privatekey = '6LckeSoUAAAAALBYSPeDOyqXGrD5FT4Ye-uqGg1-';
        $response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$this->input->ip_address());
        $res = json_decode($response);
        if (isset($res->success) AND $res->success==true){ //captcha
          return true;
        }
        else{
        	$this->form_validation->set_message('recaptcha_check', 'This reCaptcha is not checked');
   		  return false;
        }
    }
}
