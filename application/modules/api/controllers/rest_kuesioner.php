<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_kuesioner extends MY_Controller {

	function index() {
		
	}
	
	function getKuesAlumni() {
	    $query = $this->vw_kues_m->get_by(array('is_delete' => '1', 'tipe' => '1'));
	    if (count($query) < 1) {
			# code...
			$data['data'] = array();
		} else {
			foreach ($query as $key => $value) {
				# code...
				$data[$key] = $value;
				$data[$key]->value = unserialize($value->value);
				$data[$key]->atribut = unserialize($value->atribut);
			}
		}

		echo json_encode(array('data'=>$data), 200);
	}
	
	function save() {
		$success 		= false;
		if ($this->input->post('id')) {
			# code...
			$id = $this->input->post('id');
		} else {
			$id = null;
		}
		
		$atribut = serialize( array (
		        'required' => $this->input->post('attr_required'),
		        'type' => $this->input->post('attr_type')
		    ));
		$value = $this->input->post('value');

		$data = array(
            'kode' => $this->input->post('kode'),
            'pertanyaan' => $this->input->post('pertanyaan'),
            'deskripsi' => $this->input->post('deskripsi'),
            'form_group' => $this->input->post('form_group'),
			'id_kategori' 	=> $this->input->post('id_kategori'),
			'type'	=> $this->input->post('type'),
			'atribut' => $atribut,
			'value' => serialize($value),
			'display' => $this->input->post('display'),
			'set_main' => $this->input->post('set_main'),
			'is_publish'	=> '1',
			'is_delete'		=> '1' 
		);

		$save = $this->tb_kues_m->save($data, $id);
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

		$save = $this->tb_kues_m->save($data, $id);
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

		$save = $this->tb_kues_m->save($data, $id);
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
}

/* End of file kues_alumni.php */
/* Location: ./application/modules/administrator/controllers/kues_alumni.php */