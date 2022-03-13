<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_instansi();
	}

	public function index() {
		$this->data['page_title'] 	= 'Profile Instansi';
		$this->data['breadcrumb']	= 'Profile Instansi';

		$this->load_instansi('profile/index');
	}

}

/* End of file profile.php */
/* Location: ./application/modules/alumni/controllers/profile.php */