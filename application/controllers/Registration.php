<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

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
        $this->load->library('form_validation');
        $this->load->model('RegistrationModel');
    }


	public function index()
	{
		//Default step 1
		$this->session->unset_userdata('personal_info');
		$this->load_step(1);
	}

	 public function showAllQuestions(){
       $result = $this->RegistrationModel->getUserSecurityQuestion();
       echo json_encode($result);
    } 



	public function user(){
		$array = $this->uri->uri_to_assoc();
		print_r($array);
	}

	public function step($step){
		
		switch ($step) {
		    case 1: //step 1
		        $this->load_step($step);
		        break;
		    case 2:
		    	if ($this->session->has_userdata('personal_info'))
			    {
			    	$this->load_step($step);	
			    } else {
			    	redirect(base_url() . 'registration/step/1?step1=false');
			    }
		    break;
		    case 3:
		    if ($this->session->has_userdata('account_info') && $this->session->has_userdata('account_info'))
			    {
			    	$this->load_step($step);	
			    }
			    else if(!$this->session->has_userdata('account_info') && $this->session->has_userdata('account_info')){
			    	redirect(base_url() . 'registration/step/2?step2=false');
			    }
			    else {
			    	redirect(base_url() . 'registration/step/1?step1=false');
			    }
		    break;
		    default:
		      redirect('registration');
		}
	}

	public function load_step($step){
		$data['tab'] = 'registration';
		$data['step'] = 'step' . $step;
		$this->load->view('layouts/header');
		$this->load->view('navs/index_nav', $data);
		$this->load->view('pages/registration/wizard_header');
		$this->load->view('pages/registration/step_wizard');
		$this->load->view('pages/registration/step' . $step, $data);
		$this->load->view('pages/registration/wizard_footer');
		$this->load->view('container_closing');
		$this->load->view('footers/index_footer');
		$this->load->view('layouts/footer');
	}

	public function submit($x){
		switch ($x) {
		    case 1: //step 1
		    	$config = array(
				        array(
				                'field' => 'email',
				                'label' => 'email address',
				                'rules' => 'required|valid_email'
				        ),
				        array(
				                'field' => 'confirmEmail',
				                'label' => 'confirm email address',
				                'rules' => 'required|valid_email|matches[email]'
				        ),
				        array(
				                'field' => 'firstName',
				                'label' => 'first name',
				                'rules' => 'required'
				        ),
				        array(
				                'field' => 'lastName',
				                'label' => 'last name',
				                'rules' => 'required'
				        ),
				        array(
				                'field' => 'contact',
				                'label' => 'contact number',
				                'rules' => 'required'
				        )
				);
		    	$this->form_validation->set_rules($config);
		      	if ($this->form_validation->run() == FALSE)
                {
                        $this->load_step(1);
                }
                else
                {	  
                  	$personal_info = array(
						"email" => $this->input->post('confirmEmail'),
			    		"first_name" => $this->input->post('firstName'),
			    		"last_name" => $this->input->post('lastName'),
			    		"contact" => $this->input->post('contact'),
					);
					$this->session->set_userdata('personal_info', $personal_info);
                   	redirect('registration/step/2'); //go to step 2
                }
		        break;
		    case 2:
				$config = array(
				        array(
				                'field' => 'dhcs',
				                'label' => 'DHCS ID',
				                'rules' => 'required'
				        ),
				        array(
				                'field' => 'managerName',
				                'label' => 'manager name',
				                'rules' => 'required'
				        ),
				        array(
				                'field' => 'managerEmail',
				                'label' => 'manager email',
				                'rules' => 'required|valid_email'
				        ),
				        array(
				                'field' => 'password',
				                'label' => 'password',
				                'rules' => 'required|min_length[8]'
				        ),
				        array(
				                'field' => 'confirmPass',
				                'label' => 'confirm password',
				                'rules' => 'required|min_length[8]|matches[password]'
				        )
				);
		    	$this->form_validation->set_rules($config);
		      	if ($this->form_validation->run() == FALSE)
                {
                        $this->load_step(2);
                }
                else
                {	  
                  	$account_info = array(
						"dhcs" => $this->input->post('dhcs'),
			    		"managerName" => $this->input->post('managerName'),
			    		"managerEmail" => $this->input->post('managerEmail'),
			    		"password" => $this->input->post('password'),
					);
					$this->session->set_userdata('account_info', $account_info);
                   	redirect('registration/step/3'); //go to step 2
                }
		        break;
		    case 3:
		         if($this->check_recaptcha()){
		         	$security_info = array(
		         		"question_1" => $this->input->post('question_1'),
		         		"question_2" => $this->input->post('question_2'),
		         		"question_3" => $this->input->post('question_3'),
		         		"question_4" => $this->input->post('question_4'),
		         		"question_5" => $this->input->post('question_5'),
		         		"answer1"=> $this->input->post('answer1'),
		         		"answer2"=> $this->input->post('answer2'),
		         		"answer3"=> $this->input->post('answer3'),
		         		"answer4"=> $this->input->post('answer4'),
		         		"answer5"=> $this->input->post('answer5')
		         	);

					

					$additional_data = array(
								'first_name' => $_SESSION['personal_info']['first_name'],
								'last_name' => $_SESSION['personal_info']['last_name'],
								'phone' => $_SESSION['personal_info']['contact'],
								'DHCSUserID' => $_SESSION['account_info']['dhcs'],
								'ManagerEmail' => $_SESSION['account_info']['managerEmail'],
								'ManagerName' => $_SESSION['account_info']['managerName'],
								'UserCondition' => 'Pending',
								'active' => 0
					);

					$group = array('3'); // Sets user to staff

					$username =  str_replace(' ', '', strtolower($_SESSION['personal_info']['first_name'] . '.' . $_SESSION['personal_info']['last_name']));

					
					$result = $this->ion_auth->register($username, $_SESSION['account_info']['password'] , $_SESSION['personal_info']['email'], $additional_data, $group);

					if($result){
						unset(
						    $_SESSION['personal_info'],
						    $_SESSION['account_info']
						);
						redirect(base_url() . 'registration?registered=true');	
					} else {
						redirect(base_url() . '?registered=false');	
					}
					
					


				} else {
					redirect(base_url() . 'registration/step/3?captcha=false');
				}
		        break;
		    default:
		       print_r($_POST);
		}
	}

	public function question_check($str)
    {
                if ($str == 0 || $str == '0')
                {
                        $this->form_validation->set_message('question_check', 'Please select a question');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
   	}

   	public function test(){
   		$user_groups = $this->ion_auth->get_users_groups(4)->result(); 
   		print_r($user_groups);
   	}

	public function check_recaptcha(){
		$url = 'https://www.google.com/recaptcha/api/siteverify';
        $privatekey = '6LckeSoUAAAAALBYSPeDOyqXGrD5FT4Ye-uqGg1-';
        $response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$this->input->ip_address());
        $res = json_decode($response);
        if (isset($res->success) AND $res->success==true){ //captcha
          return true;
        }
        else{
   		  return false;
        }
    }
}
