<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instansi extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_admin();
	}

	function index() {
		$this->data['page_title'] 	= "Instansi";
		$this->data['breadcrumb']	= "Daftar Instansi";

		$this->load_admin('instansi/index');
	}

}

/* End of file instansi.php */
/* Location: ./application/modules/administrator/controllers/instansi.php */