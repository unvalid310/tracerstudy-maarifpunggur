<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_admin();
	}

	function index() {
		$this->data['page_title'] 	= 'Daftar Informasi';
		$this->data['breadcrumb']	= 'Daftar Informasi';

		$this->load_admin('informasi/index');
	}

	function create() {
		$this->data['page_title'] 	= 'Tambah Informasi';
		$this->data['breadcrumb']	= 'Tambah Informasi';

		$this->load_admin('informasi/add');
	}

	function update($id) {
		$this->data['page_title'] 	= 'Update Informasi';
		$this->data['breadcrumb']	= 'Update Informasi';
		$this->data['id']			= $id;
		$this->data['json']			= $this->vw_informasi_m->get_by(array('page_id' =>$id));

		$this->load_admin('informasi/add');
	}

}

/* End of file informasi.php */
/* Location: ./application/modules/administrator/controllers/informasi.php */