<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
        parent::__construct();
        loginCheck();
    }

	public function index() {
		$data['title'] = 'EasySchool::Dashboard';
		$data['body'] = 'dashboard/dashboard';
		$this->load->view('layout', $data);
	}

}
