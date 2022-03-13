<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_admin();
	}

	function index() {
		$this->data['page_title'] 	= "Alumni";
		$this->data['breadcrumb']	= "Daftar Alumni";

		$this->load_admin('alumni/index');
	}

	function create() {
		$this->data['page_title'] 	= "Alumni";
		$this->data['breadcrumb']	= "Tambah Alumni";

		$this->load_admin('alumni/add');
	}

	function update($id) {
		$this->data['page_title'] 	= "Alumni";
		$this->data['breadcrumb']	= "Tambah Alumni";
		$this->data['id'] 			= $id;
		$this->data['json']			= $this->tb_user_m->get_by(array('user_id' => $id));

		$this->load_admin('alumni/add');
	}
}

/* End of file alumni.php */
/* Location: ./application/modules/administrator/controllers/alumni.php */