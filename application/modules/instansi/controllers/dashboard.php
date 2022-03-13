<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_instansi();
	}

	public function index() {
		$this->data['page_title'] 	= 'Dashboard';
		$this->data['breadcrumb']	= 'Dashboard';

		$this->load_instansi('dashboard/index');
	}

}

/* End of file dashboard.php */
/* Location: ./application/modules/alumni/controllers/dashboard.php */