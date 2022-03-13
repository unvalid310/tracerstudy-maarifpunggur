<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_kuesioner_alumni extends MY_Controller {

	function index() {
		
	}

	function save() {
		$success 		= true;
        $query = $this->vw_kues_m->get_by(array('tipe' => '1'));
        if(count($query) > 0) {
            foreach($query as $value) {
                $data = array(
                        'user_id' => $this->session->userdata('user_id'),
                        'kode' => $value->kode,
                        'jawaban' => $this->input->post($value->kode)
                    );
                
                
        		$save = $this->tb_survey_m->save($data, null);
        		if ($save > 0) {
        			# code...
        			$_kuesioner_status = true;
        		} else {
        			$_kuesioner_status = false;
        		}
            }
            
            $this->session->set_userdata(array('is_complete' => '1'));
		    echo json_encode(array('success' => $success, 'base_url' => base_url('alumni')), 200);
        }
	}

	function penilaian() {
		$_user_status 		= false;
		$_kuesioner_status 	= false;
		$success 			= false;

		if (!empty($this->input->post('quest_id')) ) {
			# code...
			$_quest_id = $this->input->post('quest_id');	
		} else {
			$_quest_id = null; 
		}

		$_user_id = $this->input->post('user_id');

		$_user_data = array(
			'is_complete' 	=> '1'
		);

		$save = $this->tb_user_m->save($_user_data, $_user_id);
		if ($save > 0) {
			# code...
			$_user_status = true;			
			$this->session->set_userdata($_user_data);
		} else {
			$_user_status = false;
		}

		$_data = array(
			'user_id' 	=> $_user_id,
			'P01' 		=> $this->input->post('P01'),
			'P02'		=> $this->input->post('P02'),
			'P03'		=> $this->input->post('P03'),
			'P04'		=> $this->input->post('P04'),
			'P05'		=> $this->input->post('P05'),
			'P06'		=> $this->input->post('P06'),
			'P2_001'	=> $this->input->post('P2_001'),
			'P2_002'	=> $this->input->post('P2_002'),
			'P2_003'	=> $this->input->post('P2_003'),
			'P2_004'	=> $this->input->post('P2_004'),
			'P2_005'	=> $this->input->post('P2_005'),
			'P2_006'	=> $this->input->post('P2_006'),
			'P2_007'	=> $this->input->post('P2_007'),
			'P3_001'	=> $this->input->post('P3_001'),
			'P3_002'	=> $this->input->post('P3_002'),
			'P3_003'	=> $this->input->post('P3_003'),
			'P3_004'	=> $this->input->post('P3_004'),
			'P3_005'	=> $this->input->post('P3_005'),
			'P3_006'	=> $this->input->post('P3_006'),
			'P3_007'	=> $this->input->post('P3_007'),
		);

		$save = $this->tb_quest_instansi_m->save($_data, $_quest_id);
		if ($save > 0) {
			# code...
			$_kuesioner_status = true;
		} else {
			$_kuesioner_status = false;
		}

		if ($_user_status == true && $_kuesioner_status == true) {
			# code...
			$success = true;
		} else {
			$success = false;
		}

		echo json_encode(array('success' => $success), 200);
	}
}

/* End of file rest_kuesioner_alumni.php */
/* Location: ./application/modules/api/controllers/rest_kuesioner_alumni.php */