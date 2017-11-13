<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function loginCheck(){

	/**
		This if block checks the if isLogin variable available in session or not
		if not then it will throw on login page otherwise stay on current action.
	*/
	$ci =& get_instance();

	if(!$ci->session->userdata('isLogin'))
		return redirect(base_url());
}

function logoutAll() {	
	unset_only();
	redirect(base_url());
}

function unset_only() {
	$ci =& get_instance();
    $user_data = $ci->session->all_userdata();

    foreach ($user_data as $key => $value) {
        if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
            $ci->session->unset_userdata($key);
        }
    }
}


function checkHelper() {
	return "helper true";
}