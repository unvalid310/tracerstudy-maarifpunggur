<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_admin();
	}

	public function index() {
		$this->data['page_title'] 	= 'Daftar Pengguna';
		$this->data['breadcrumb']	= 'Daftar Pengguna';

		$this->load_admin('user/index');
	}

}

/* End of file user.php */
/* Location: ./application/modules/administrator/controllers/user.php */