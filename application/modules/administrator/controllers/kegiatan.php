<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_admin();
	}

	public function index() {
		$this->data['page_title'] 	= 'Kegiatan';
		$this->data['breadcrumb']	= 'Kegiatan';

		$this->load_admin('kegiatan/index');
	}

}

/* End of file kegiatan.php */
/* Location: ./application/modules/administrator/controllers/kegiatan.php */