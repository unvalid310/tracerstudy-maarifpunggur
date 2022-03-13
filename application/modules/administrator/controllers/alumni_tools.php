<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni_tools extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_admin();
	}

	function index() {
		
	}
	
	function jurusan() {
		$this->data['page_title'] 	= "Jurusan";
		$this->data['breadcrumb']	= "Daftar Jurusan";

		$this->load_admin('jurusan/index');
	}

	function import() {
		$this->data['page_title'] 	= "Tools";
		$this->data['breadcrumb']	= "Import Data Alumni";

		$this->load_admin('alumni/import');
	}
}

/* End of file alumni_tools.php */
/* Location: ./application/modules/administrator/controllers/alumni_tools.php */