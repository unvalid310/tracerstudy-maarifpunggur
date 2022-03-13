<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_admin();
	}

	public function index() {
		$this->data['page_title'] 	= 'Penilaian Instansi';
		$this->data['breadcrumb']	= 'Penilaian Instansi';

		$this->load_admin('penilaian/index');
	}

}

/* End of file penilaian.php */
/* Location: ./application/modules/administrator/controllers/penilaian.php */