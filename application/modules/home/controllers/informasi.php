<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends MY_Controller {

	function list($page = null) {
		$this->data['breadcrumb']	= 'Berita';
		$this->data['page'] 		= (!empty($page)) ? $page : 1;

		$this->load_theme('informasi/index');
	}

	function view($id) {
		$this->data['breadcrumb']	= 'Berita';
		$this->data['page_id']		= $id;
		
		$this->load_theme('informasi/view');
	}

}

/* End of file informasi.php */
/* Location: ./application/modules/home/controllers/informasi.php */