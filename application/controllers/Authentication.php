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
				/**
				*	get value from school table with schoolID.
				*/
				$this->load->model('School_info');
				$schoolInfo = $this->School_info->getInfo($loginData->schoolID);
				/**
				*	setting the user information and school info into session object.
				*/
				$this->session->set_userdata('loginData',$lsessionData);
				$this->session->set_userdata('isLogin', true);
				$this->session->set_userdata('schoolInfo', $schoolInfo->row());
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

	/**
	*	$this method activate when user going to logout.
	*/
	public function logout() {
		/**
		*	this function discribes in login_helper.
		*/
		logoutAll();
	}


	/** 
	*	url ->  base_url()/forget this is for forget page.
	*/
	public function forget() {
		$data['title'] = 'EasySchool::Reset Password';
		$data['body'] = 'authentication/forget';
		$this->load->view('authentication/layout', $data);
	}

	public function register() {
		/**
		 *  this is array variable witch is pass into view.
		 */
		$data['title'] = 'EasySchool::Register';
		$data['body'] = 'authentication/register';

		/**
		 * This if block for check is methos is 'GET'.
		 */
		if($this->input->method() == 'get'){
			$this->load->view('authentication/layout', $data);
		}
		/**
		 * this block will execute if input method 'POST'
		 */
		else if($this->input->method() == 'post'){

			/**
			 * 	this function sets the error messange in error box and send to view. 
			 */
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

			/**
			 * 	Validation for input field and it will also checks unique usename in databse.
			 */
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[loginTable.username]',
			array('required' => 'You must provide a %s.')
			);

			/**
			 * 
			 */
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
