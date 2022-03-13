<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_jurusan extends MY_Controller {

	function index() {
		$id 			= $this->input->post('jurusan_id');
		$kode_jurusan = $this->input->post('kode_jurusan');
		if (!empty($id)) {
			# code...
			$query = $this->tb_jurusan_m->get_by(array('jurusan_id' => $id, 'is_delete' => '0'));
		} else if (!empty($kode_jurusan)) {
			$query = $this->tb_jurusan_m->get_by(array('kode_jurusan' => $kode_jurusan, 'is_delete' => '0'));
		} else {
			$query = $this->tb_jurusan_m->get_by(array('is_delete' => '0'));
		}
			
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

	function save() {
		$success 		= false;
		if ($this->input->post('jurusan_id')) {
			# code...
			$id = $this->input->post('jurusan_id');
		} else {
			$id = null;
		}

		$data = array(
			'kode_jurusan' 	=> $this->input->post('kode_jurusan'),
			'nama_jurusan'	=> $this->input->post('nama_jurusan'),
			'is_publish'	=> '1',
			'is_delete'		=> '0' 
		);

		$save = $this->tb_jurusan_m->save($data, $id);
		if ($save > 0) {
			# code...
			$success = true;
			$message = 'Data berhasil disimpan';
		} else {
			$success = false;
			$message = 'Data gagal disimpan';
		}

		echo json_encode(array('success' => $success, 'base_url' => base_url('cms-admin/alumni/tool')), 200);
	}

	function publish() {
		$success 		= false;
		$id 			= $this->input->post('jurusan_id');
		$_ispublish 	= $this->input->post('is_publish');

		$data = array(
			'is_publish'	=> $_ispublish
		);

		$save = $this->tb_jurusan_m->save($data, $id);
		if ($save > 0) {
			# code...
			$success = true;
			$message = 'Data berhasil diubah';
		} else {
			$success = false;
			$message = 'Data gagal diubah';
		}

		echo json_encode(array('success' => $success, 'message' => $message), 200);
	}

	function delete() {
		$success = false;
		$id = $this->input->post('jurusan_id');
		$data = array(
			'is_publish'	=> '0',
			'is_delete' 	=> '1'
		);

		$save = $this->tb_jurusan_m->save($data, $id);
		if ($save >= 0) {
			# code...
			$success = true;
			$message = 'Data berhasil dihapus';
		} else {
			$success = false;
			$message = 'Data gagal dihapus!';
		}

		echo json_encode(array('success' => $success, 'message' => $message), 200);
	}

	function batch_publish() {
		$success = false;
		$id = $this->input->post('jurusan_id');

		for ($i=0; $i < count($id); $i++) { 
			# code...
			$jurusan_id = $id[$i];

			$data = array(
				'is_publish'	=> '0'
			);

			$save = $this->tb_jurusan_m->save($data, $jurusan_id);
			if ($save > 0) {
				# code...
				$success = true;
				$message = 'Data berhasil diubah';
			} else {
				$success = false;
				$message = 'Data gagal diubah';
			}
		}

		echo json_encode(array('success' => $success, 'message' => $message), 200);
	}

	function batch_delete() {
		$success = false;
		$id = $this->input->post('jurusan_id');

		for ($i=0; $i < count($id); $i++) { 
			# code...
			$jurusan_id = $id[$i];

			$data = array(
				'is_publish'	=> '0',
				'is_delete' 	=> '1'
			);

			$save = $this->tb_jurusan_m->save($data, $jurusan_id);
			if ($save > 0) {
				# code...
				$success = true;
				$message = 'Data berhasil dihapus';
			} else {
				$success = false;
				$message = 'Data gagal dihapus!';
			}
		}

		echo json_encode(array('success' => $success, 'message' => $message), 200);
	}

}

/* End of file rest_jurusan.php */
/* Location: ./application/modules/api/controllers/rest_jurusan.php */