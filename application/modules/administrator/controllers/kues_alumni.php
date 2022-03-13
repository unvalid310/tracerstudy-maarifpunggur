<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kues_alumni extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_admin();
	}

	function index() {
		
	}

	function kategori() {
		# code...
		$this->data['page_title'] 	= "Kategori Pertanyaan";
		$this->data['breadcrumb']	= "Daftar Kategori";

		$this->load_admin('kategori alumni/index');
	}

	function kuesioner() {
		$this->data['page_title'] 	= "Kuesioner";
		$this->data['breadcrumb']	= "Daftar Kuesioner";

		$this->load_admin('kuesioner alumni/index');
	}
}

/* End of file kues_alumni.php */
/* Location: ./application/modules/administrator/controllers/kues_alumni.php */