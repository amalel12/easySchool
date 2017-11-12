<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School_info extends CI_Model {

	function setInfo($data) {
		$this->db->set($data);
		$this->db->insert("schoolInfo");
		return $this->db->insert_id();
	}

	function getInfo($schoolID) {
		$this->db->where('id', $schoolID);
		return $this->db->get('schoolInfo');
	}
	
}