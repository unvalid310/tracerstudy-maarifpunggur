<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_admin();
	}

	public function index() {
		$this->data['page_title'] 	= 'Daftar Admin';
		$this->data['breadcrumb']	= 'Daftar admin';

		$this->load_admin('admin/index');
	}

}

/* End of file admin.php */
/* Location: ./application/modules/administrator/controllers/admin.php */