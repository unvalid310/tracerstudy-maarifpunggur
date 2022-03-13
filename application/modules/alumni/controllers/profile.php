<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_alumni();
	}

	public function index() {
		$this->data['page_title'] 	= 'Profile Alumni';
		$this->data['breadcrumb']	= 'Profile Alumni';

		$this->load_alumni('profile/index');
	}

}

/* End of file profile.php */
/* Location: ./application/modules/alumni/controllers/profile.php */