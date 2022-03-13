<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends MY_Controller {

	function index() {}

	function list($page = null) {
		$this->data['breadcrumb']	= 'Berita';
		$this->data['page'] 		= (!empty($page)) ? $page : 1;

		$this->load_theme('berita/index');
	}

	function view($id) {
		$this->data['breadcrumb']	= 'Berita';
		$this->data['page_id']		= $id;
		
		$this->load_theme('berita/view');
	}

	function archive($month = null, $year = null, $page = null) {
		$this->data['breadcrumb']	= 'Archive';
		$this->data['page'] 		= (!empty($page)) ? $page : 1;
		$this->data['month'] 		= $month;
		$this->data['year'] 		= $year;
		$this->data['where'] 		= array('month(create_on)' => $this->data['month'], 'year(create_on)' => $this->data['year'], 'is_publish' => '1');

		$this->load_theme('archive/index');
	}
}

/* End of file berita.php */
/* Location: ./application/modules/home/berita.php */