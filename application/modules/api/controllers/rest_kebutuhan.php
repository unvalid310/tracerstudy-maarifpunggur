<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_kebutuhan extends MY_Controller {

	function index() {
		if (isset($_POST['tahun'])) {
			# code...
			$_tahun = $_POST['tahun'];
		} else {
			$_tahun = null;
		}

		if (!empty($_tahun)) {
			# code...
			$_q_jumlah 		= $this->vw_kebutuhan_tahun_m->get_by(array('th_keluar' => $_tahun));
			$_complete 		= count($this->vw_alumni_m->get_by(array('is_complete' => '1', 'th_keluar' => $_tahun)));
			$_uncomplete 	= count($this->vw_alumni_m->get_by(array('is_complete' => '0', 'th_keluar' => $_tahun)));
			$_q_jurusan 	= $this->vw_kebutuhan_jurusan_tahun_m->get_by(array('th_keluar' => $_tahun));
		} else {
			$_q_jumlah 		= $this->vw_kebutuhan_m->get();
			$_complete 		= count($this->vw_alumni_m->get_by(array('is_complete' => '1')));
			$_uncomplete 	= count($this->vw_alumni_m->get_by(array('is_complete' => '0')));
			$_q_jurusan 	= $this->vw_kebutuhan_jurusan_m->get();
		}

		foreach ($_q_jumlah as $key => $value) {
			# code...
			$_info_kerja 	= $value->info_kerja;
			$_info_kuliah	= $value->info_kuliah;
			$_info_lainnya 	= $value->lainnya;
			$_p_kerja 		= $value->persentase_kerja;
			$_p_kuliah 		= $value->persentase_kuliah;
			$_p_lainnya		= $value->persentase_lainnya;
		}

		if (count($_q_jurusan) > 0) {
			# code...
			foreach ($_q_jurusan as $key => $value) {
				# code...
				$jurusan[$key] = array(
					'kode'		=> $value->kode_jurusan,
					'jurusan'	=> $value->jurusan,
					'jumlah'	=> $value->responden
				);
			}
		} else {
			$jurusan = array();
		}

		$data = array(
			'info_kerja' 	=> $_info_kerja,
			'info_kuliah'	=> $_info_kuliah,
			'info_lainnya'	=> $_info_lainnya,
			'p_kerja'		=> $_p_kerja,
			'p_kuliah'		=> $_p_kuliah,
			'p_lainnya'		=> $_p_lainnya,
			'complete'		=> $_complete,
			'uncomplete'	=> $_uncomplete,
			'jurusan' 		=> $jurusan
		);

		echo json_encode($data, 200);
	}

	function geTable() {
		$query = $this->vw_kebutuhan_lainnya_m->get();
		if (count($query) < 1) {
			# code...
			$data['data'] = array();
		} else {
			foreach ($query as $key => $value) {
				# code...
				$data['data'][$key] = $value;
			}
		}

		echo json_encode($data, 200);
	}
}

/* End of file rest_kebutuhan.php */
/* Location: ./application/modules/api/controllers/rest_kebutuhan.php */