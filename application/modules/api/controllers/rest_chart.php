<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_chart extends MY_Controller {

	public function index() {
		
	}

	function chart_kegiatan() {
		$_query = $this->vw_chart_kegiatan_m->get();
		$chart['value'] = array();
		if (count($_query)>0) {
			# code...
			foreach ($_query as $key => $value) {
				# code...
				$th_keluar[$key] 	= $value->th_keluar;
				$kerja[$key]		= $value->kerja;
				$kuliah[$key]		= $value->kuliah;
				$wirausaha[$key]	= $value->wirausaha;
				$belum[$key]		= $value->belum;
				array_push($chart['value'], $value->kerja, $value->kuliah, $value->wirausaha, $value->belum);
			}

			$name[0]		= 'Bekerja';
			$name[1]		= 'Kuliah';
			$name[2]		= 'Wirausaha';
			$name[3]		= 'Belum Bekerja/Kuliah';
			$data[0]		= $kerja;
			$data[1]		= $kuliah;
			$data[2]		= $wirausaha;
			$data[3]		= $belum;
			for ($i=0; $i<4; $i++) { 
				# code...
				$compare[$i] = array(
					'name' => $name[$i],
					'data' => $data[$i]
				);
			}
			$chart['labels'] 	= $th_keluar;
			$chart['series']	= $compare;
		} else {
			$chart['labels'] = array();
			$chart['series'] = array(
				'name' => array(),
				'data' => array()
			);
		}

		echo json_encode($chart, 200);
	}

}

/* End of file rest_chart.php */
/* Location: ./application/modules/api/controllers/rest_chart.php */