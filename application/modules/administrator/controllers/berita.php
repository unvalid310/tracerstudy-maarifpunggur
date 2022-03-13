<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_admin();
	}

	function index() {
		$this->data['page_title'] 	= 'Daftar Berita';
		$this->data['breadcrumb']	= 'Daftar Berita';

		$this->load_admin('berita/index');
	}

	function create() {
		$this->data['page_title'] 	= 'Tambah Berita';
		$this->data['breadcrumb']	= 'Tambah Berita';

		$this->load_admin('berita/add');
	}

	function update($id) {
		$this->data['page_title'] 	= 'Update Berita';
		$this->data['breadcrumb']	= 'Update Berita';
		$this->data['id']			= $id;
		$this->data['json']			= $this->vw_berita_m->get_by(array('page_id' =>$id));

		$this->load_admin('berita/add');
	}
}

/* End of file berita.php */
/* Location: ./application/modules/administrator/controllers/berita.php */