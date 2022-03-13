<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_alumni();
	}

	public function index() {
		$this->data['page_title'] 	= 'Dashboard';
		$this->data['breadcrumb']	= 'Dashboard';

		$this->load_alumni('dashboard/index');
	}

}

/* End of file dashboard.php */
/* Location: ./application/modules/alumni/controllers/dashboard.php */