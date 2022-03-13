<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kebutuhan extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_alumni();
	}

	public function index() {
		$this->data['page_title'] 	= 'Kebutuhan Informasi';
		$this->data['breadcrumb']	= 'Kebutuhan Informasi';

		$this->load_alumni('kebutuhan/index');
	}

}

/* End of file kebutuhan.php */
/* Location: ./application/modules/alumni/controllers/kebutuhan.php */