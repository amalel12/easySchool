<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        $this->load->helper("form");
    }

	public function index() {

		/**
		*	This is get method for defalt login page.
		*/
		if($this->input->method() == 'get'){
			$data['title'] = 'EasySchool::Login';
			$data['body'] = 'authentication/login';
			$this->load->view('authentication/layout', $data);
		}
		/**
		*	This is post method for same. it will execute when user attampt for login.
		*/
		else if($this->input->method() == 'post') {
			/**
				loading the model for Login_table
			*/
			$this->load->model('Login_table');
			/**
			*	get the data form login table for that pirticular email
			*/
			$loginData = $this->Login_table->getLogin($this->input->post('email'));
			$loginData = $loginData->row();

			/**
			*	this condition compairs the password provided by user and stored in database. if it return true then it will redirect to dasboard other wise login page with message of wrong username or password.
			*/
			if($loginData->password === hash('sha1', $this->input->post('password'))) {
				$sessionData = array(
					"loginID" =>  $loginData->id,
					"schoolID" => $loginData->schoolID,
					"isAdmin" => $loginData->isAdmin,
					"email" => $this->input->post('email')
				);
				$this->load->model('School_info');
				
				/**
				*	setting the user information into session object.
				*/
				$this->session->set_userdata('loginData',$lsessionData);
				$this->session->set_userdata('isLogin', true);
				/**
				*	redirecting the dashboard.
				*/
				redirect(base_url()."dashboard/");
			}
			/**
			*	redirecting onto login page if username or password are wrong.
			*/
			else {
				$this->session->set_flashdata('msg', 'Wrong username or password!');
				redirect(base_url());
			}
		}
		/**
		*	This block will axecuts if user trying to call with wrong method.
		*/
		else {
			$this->session->set_flashdata('msg', 'Trying to call wrong method.');
			redirect(base_url());
		}
	}

	public function logout() {
		logout();
	}

	public function forget() {
		$data['title'] = 'EasySchool::Reset Password';
		$data['body'] = 'authentication/forget';
		$this->load->view('authentication/layout', $data);
	}

	public function register() {

		$data['title'] = 'EasySchool::Register';
		$data['body'] = 'authentication/register';

		if($this->input->method() == 'get'){
			$this->load->view('authentication/layout', $data);
		}
		else if($this->input->method() == 'post'){

			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[loginTable.username]',
			array('required' => 'You must provide a %s.')
			);
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]',
				array('required' => 'You must provide a %s.')
			);
			$this->form_validation->set_rules('schoolName', 'School Name', 'required');
			$this->form_validation->set_rules('contactNumber', 'Contact Number', 'required|numeric');


			if ($this->form_validation->run() == FALSE) {
				$this->load->view('authentication/layout', $data);
			}
			else {
				$this->load->model('Login_table');
				$this->load->model('School_info');

				$schoolInfoData = array(
					"schoolName" => $this->input->post('schoolName'),
					"contactOne" => $this->input->post('contactNumber')
				);
				$schoolInfoID = $this->School_info->setInfo($schoolInfoData);
				
				$loginTableData = array(
					"schoolID" => $schoolInfoID,
					"isAdmin" => true,
					"username" => $this->input->post('email'),
					"password" => hash('sha1', $this->input->post('password'))
				);
				echo $this->Login_table->setLogin($loginTableData);

				$query['isLogin'] = true;
				$this->session->set_userdata($query);
				redirect(base_url()."dashboard/");
			}

		}
		else {
			$data['error'] = 'Bad Request';
			$this->load->view('authentication/layout', $data);
		}
	}

}
