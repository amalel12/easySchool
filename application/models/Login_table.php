<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_table extends CI_Model {

	function setLogin($data) {
		$this->db->set($data);
		$this->db->insert("loginTable");
		return $this->db->insert_id();
	}

	function getLogin($email) {
		$this->db->where('username', $email);
		return $this->db->get('loginTable');
	}

}