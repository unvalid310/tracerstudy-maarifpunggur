<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_instansi();
	}

	function index() {
		$this->data['page_title'] 	= "Alumni";
		$this->data['breadcrumb']	= "Daftar Alumni";

		$this->load_instansi('alumni/index');
	}

}

/* End of file alumni.php */
/* Location: ./application/modules/instansi/controllers/alumni.php */