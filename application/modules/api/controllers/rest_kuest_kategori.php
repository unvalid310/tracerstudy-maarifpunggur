<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_kuest_kategori extends MY_Controller {

	function geKategoriAlumni() {
		$query = $this->tb_kues_kategori_m->get_by(array('is_delete' => '1', 'type' => '1'));
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
		if ($this->input->post('id')) {
			# code...
			$id = $this->input->post('id');
		} else {
			$id = null;
		}

		$data = array(
			'kategori' 	=> $this->input->post('kategori'),
			'type'	=> $this->input->post('type'),
			'deskripsi' => $this->input->post('deskripsi'),
			'posisi' => $this->input->post('posisi'),
			'is_tap'	=> '1',
			'is_publish'	=> '1',
			'is_delete'		=> '1' 
		);

		$save = $this->tb_kues_kategori_m->save($data, $id);
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
		$id 			= $this->input->post('id');
		$_ispublish 	= $this->input->post('is_publish');

		$data = array(
			'is_publish'	=> $_ispublish
		);

		$save = $this->tb_kues_kategori_m->save($data, $id);
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
		$id = $this->input->post('id');
		$data = array(
			'is_publish'	=> '0',
			'is_delete' 	=> '0'
		);

		$save = $this->tb_kues_kategori_m->save($data, $id);
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
		$id = $this->input->post('id');

		for ($i=0; $i < count($id); $i++) { 
			# code...
			$id = $id[$i];

			$data = array(
				'is_publish'	=> '0'
			);

			$save = $this->tb_kues_kategori_m->save($data, $id);
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
		$id = $this->input->post('id');

		for ($i=0; $i < count($id); $i++) { 
			# code...
			$id = $id[$i];

			$data = array(
				'is_publish'	=> '0',
				'is_delete' 	=> '1'
			);

			$save = $this->tb_kues_kategori_m->save($data, $id);
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

/* End of file rest_kuest_kategori.php */
/* Location: ./application/modules/api/controllers/rest_kuest_kategori.php */