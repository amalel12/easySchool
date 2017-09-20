<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function index() {
		$data['title'] = 'EasySchool::Login';
		$data['body'] = 'authentication/login';
		$this->load->view('authentication/layout', $data);
	}

	public function forget() {
		$data['title'] = 'EasySchool::Reset Password';
		$data['body'] = 'authentication/forget';
		$this->load->view('authentication/layout', $data);
	}

	public function register() {
		$data['title'] = 'EasySchool::Register';
		$data['body'] = 'authentication/register';
		$this->load->view('authentication/layout', $data);
	}

	
}
