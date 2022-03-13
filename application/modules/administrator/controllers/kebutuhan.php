<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kebutuhan extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_admin();
	}

	public function index() {
		$this->data['page_title'] 	= 'Kebutuhan Informasi';
		$this->data['breadcrumb']	= 'Kebutuhan Informasi';

		$this->load_admin('kebutuhan/index');
	}

}

/* End of file kebutuhan.php */
/* Location: ./application/modules/administrator/controllers/kebutuhan.php */