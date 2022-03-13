<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	function __construct(){
		parent::__construct();
	}

	function index() {
		$this->auth_check();
		$this->data['page_title'] 	= "Login";
		
		$this->load_auth('signin/index');
	}

	function signUpInstansi() {
		$this->data['page_title'] 	= "Login";

		$this->load_auth('signup/instansi');
	}

	function signUpAlumni() {
		$this->data['page_title'] 	= "Registrasi Alumni";

		$this->load_auth('signup/alumni');
	}

	function logout() {
        $this->tb_user_m->logout();
        redirect(base_url('auth'), 'refresh');
	}
}

/* End of file auth.php */
/* Location: ./application/modules/auth/controllers/auth.php */