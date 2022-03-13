<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_instansi();
	}
	
	function index() {
		$this->data['page_title'] 	= 'Penilaian Instansi';
		$this->data['breadcrumb']	= 'Penilaian Instansi';

		$this->load_instansi('penilaian/index');
	}

	function penilaianDaftar() {
		$this->data['page_title'] 	= 'Daftar Penilaian Instansi';
		$this->data['breadcrumb']	= 'Daftar Penilaian Instansi';

		$this->load_instansi('penilaian/penilaian');
	}
}

/* End of file penilaian.php */
/* Location: ./application/modules/instansi/controllers/penilaian.php */