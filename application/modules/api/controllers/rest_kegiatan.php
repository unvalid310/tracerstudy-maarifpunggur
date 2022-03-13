<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_kegiatan extends MY_Controller {

	public function index() {
		if (isset($_POST['tahun'])) {
			# code...
			$_tahun = $_POST['tahun'];
		} else {
			$_tahun = null;
		}

		$_maxchart = array();

		if (!empty($_tahun)) {
			# code...
			$_q_jumlah 		= $this->vw_chart_kegiatan_m->get_by(array('th_keluar' => $_tahun));
			$_complete 		= count($this->vw_alumni_m->get_by(array('is_complete' => '1', 'th_keluar' => $_tahun)));
			$_uncomplete 	= count($this->vw_alumni_m->get_by(array('is_complete' => '0', 'th_keluar' => $_tahun)));
			$_query 		= $this->vw_kegiatan_jurusan_tahun_m->get_by(array('th_keluar' => $_tahun)); 
			$_q_jurusan 	= $this->vw_jurusan_tahun_m->get_by(array('th_keluar' => $_tahun));
		} else {
			$_q_jumlah 		= $this->vw_sum_kegiatan_m->get();
			$_complete 		= count($this->vw_alumni_m->get_by(array('is_complete' => '1')));
			$_uncomplete 	= count($this->vw_alumni_m->get_by(array('is_complete' => '0')));
			$_query 		= $this->vw_kegiatan_jurusan_m->get();
			$_q_jurusan 	= $this->vw_jurusan_m->get();
		}

		if (count($_query) > 0) {
			# code...
			foreach ($_query as $key => $value) {
				# code...
				$chart[$key] = array(
					'y' 		=> $value->kode_jurusan,
					'kerja' 	=> $value->kerja,
					'kuliah'	=> $value->kuliah,
					'wirausaha'	=> $value->wirausaha,
					'lainnya'	=> $value->belum
				);
				array_push($_maxchart, $value->kerja, $value->kuliah, $value->wirausaha, $value->belum);
			}
		} else {
			$chart = array();
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

		foreach ($_q_jumlah as $jumlah) {
			# code...
			$_kerja 		= $jumlah->kerja;
			$_kuliah 		= $jumlah->kuliah;
			$_wirausaha 	= $jumlah->wirausaha;
			$_belum 		= $jumlah->belum;
		}

		$data = array(
			'kerja' 		=> $_kerja,
			'kuliah' 		=> $_kuliah,
			'wirausaha' 	=> $_wirausaha,
			'belum' 		=> $_belum,
			'complete' 		=> $_complete,
			'uncomplete' 	=> $_uncomplete,
			'chart'			=> $chart,
			'jurusan' 		=> $jurusan,
			'_maxchart' 	=> $_maxchart
		);

		echo json_encode($data, 200);
	}

}

/* End of file rest_kegiatan.php */
/* Location: ./application/modules/api/controllers/rest_kegiatan.php */