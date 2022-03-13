<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_alumni extends MY_Controller {

	function index() {
		$id = $this->input->post('user_id');
		$email = $this->input->post('email');
		if (!empty($id)) {
			# code...
			$query = $this->vw_alumni_m->get_by(array('user_id' => $id));
		} else if (!empty($email)) {
			$query = $this->vw_alumni_m->get_by(array('email' => $email));
		} else {
			$query = $this->vw_alumni_m->get();
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
		
		if ($this->input->post('user_id')) {
			# code...
			$id = $this->input->post('user_id');
			if (!empty($this->input->post('password'))) {
			    $password = md5(sha1($this->input->post('password')));
			} else {
			    $query = $this->vw_user_m->get_by(array('user_id' => $id));
			    foreach ($query as $key => $value);
			    $password = $value->password;
			} 
		} else {
			$id = null;
			$password = md5(sha1($this->input->post('password')));
		}

		$img 			= $this->input->post('img');
		$_pathImg 		= '';
		$current_img 	= $this->input->post('current_img');
		$current_path 	= $this->input->post('current_path');

		$config['upload_path'] 		="./assets/attachment/images/person";
        $config['allowed_types']	='jpeg|jpg|png';
        $config['encrypt_name'] 	= TRUE;
        
        $this->load->library('upload',$config);
	    if( ! $this->upload->do_upload('foto')){
	        $img = '';
        }else{
        	$data = $this->upload->data();

	        //Resize and Compress Image
            $config['image_library']	='gd2';
            $config['source_image']		= './assets/attachment/images/person'.$data['file_name'];
            $config['create_thumb'] 	= FALSE;
            $config['maintain_ratio']	= FALSE;
            $config['quality']			= '80%';
            $config['new_image']		= './assets/attachment/images/person'.$data['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

	        $img = $data['file_name']; 
        }
       	
       	if (empty($img)) {
       		# code...
        	if (!empty($current_path) && !empty($current_img)) {
        		# code...
        		$_pathImg 	= $current_path;
        		$img 		= $current_img;
        	} else {
	       		$_pathImg 	= 'assets/admin/default/images/';
	        	$img 		= 'avatar.jpg';
        	}
       	} else if (!empty($img)) {
       		if ($img !== 'avatar.jpg' && !empty($current_path) && !empty($current_img)) {
        		# code...
        		$path = FCPATH .'assets/attachment/images/person/'.$current_img;
	    		if (file_exists($path)){
	    			chmod($path, 0777);
				    unlink($path);
				}
        		$_pathImg = 'assets/attachment/images/person/';
        	} else {
        		$_pathImg = 'assets/attachment/images/person/';
        	}
       	}

		$data = array(
			'realname' 		=> $this->input->post('realname'),
			'nis' 			=> $this->input->post('nis'),
			'tempat_lahir' 	=> $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' 		=> $this->input->post('alamat'),
			'jk' 			=> $this->input->post('jk'),
			'agama' 		=> $this->input->post('agama'),
			'no_telp' 		=> $this->input->post('no_telp'),
			'email' 		=> $this->input->post('email'),
			'jurusan_id' 	=> $this->input->post('jurusan_id'),
			'th_masuk' 		=> $this->input->post('th_masuk'),
			'th_keluar' 	=> $this->input->post('th_keluar'),
			'password' 		=> $password,
			'img' 			=> $img,
			'path_img' 		=> $_pathImg,
			'is_role' 		=> '2',
			'is_complete' 	=> '0',
			'is_publish'	=> '1',
			'is_delete' 	=> '0'
		);

		$save = $this->tb_user_m->save($data, $id);
		if ($save > 0) {
			# code...
			$success = true;
			$message = 'Data berhasil disimpan';
		} else {
			$success = false;
			$message = 'Data gagal disimpan';
		}

		echo json_encode(array('success' => $success, 'base_url' => base_url('cms-admin/alumni')), 200);
	}

	function publish() {
		$success 		= false;
		$id 			= $this->input->post('user_id');
		$_ispublish 	= $this->input->post('is_publish');

		$data = array(
			'is_publish'	=> $_ispublish
		);

		$save = $this->tb_user_m->save($data, $id);
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
		$id = $this->input->post('user_id');
		$data = array(
			'is_publish'	=> '0',
			'is_delete' 	=> '1'
		);

		$save = $this->tb_user_m->save($data, $id);
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
		$id = $this->input->post('user_id');

		for ($i=0; $i < count($id); $i++) { 
			# code...
			$user_id = $id[$i];

			$data = array(
				'is_publish'	=> '0'
			);

			$save = $this->tb_user_m->save($data, $user_id);
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
		$id = $this->input->post('user_id');

		for ($i=0; $i < count($id); $i++) { 
			# code...
			$user_id = $id[$i];

			$data = array(
				'is_publish'	=> '0',
				'is_delete' 	=> '1'
			);

			$save = $this->tb_user_m->save($data, $user_id);
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

	function export_xls() {
    	$excel = new PHPExcel();
    	// setup file
	    $excel->getProperties()->setCreator('SMK N 1 TALANG PADANG')
	                 ->setLastModifiedBy('SMK N 1 TALANG PADANG')
	                 ->setTitle("TRACER STUDY SMK N 1 TALANG PADANG")
	                 ->setSubject("Alumni")
	                 ->setDescription("Laporan Data Alumni")
	                 ->setKeywords("Data Alumni");

	    //header style
	    $style_col = array(
	      'font' => array('bold' => true), // Set font nya jadi bold
	      'alignment' => array(
	        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
	      ),
	      'borders' => array(
	        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
	        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
	        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
	        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)
	      )
	    );

	    // table style
	    $style_row = array(
	      'alignment' => array(
	        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
	      ),
	      'borders' => array(
	        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
	        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
	        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
	        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
	      )
	    );

	    $excel->setActiveSheetIndex(0)->setCellValue('A1', "REPORT STUDY TRACER SMK NEGERI 1 TALANG PADANG");
	    $excel->getActiveSheet()->mergeCells('A1:E1');
	    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
	    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
	    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

	    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
	    $excel->getActiveSheet()->mergeCells('A3:A4');
	    $excel->setActiveSheetIndex(0)->setCellValue('B3', "NIS");
	    $excel->getActiveSheet()->mergeCells('B3:B4');
	    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA");
	    $excel->getActiveSheet()->mergeCells('C3:C4');
	    $excel->setActiveSheetIndex(0)->setCellValue('D3', "JENIS KELAMIN");
	    $excel->getActiveSheet()->mergeCells('D3:D4');
	    $excel->setActiveSheetIndex(0)->setCellValue('E3', "ALAMAT");
	    $excel->getActiveSheet()->mergeCells('E3:E4');
	    $excel->setActiveSheetIndex(0)->setCellValue('F3', "TAHUN LULUS");
	    $excel->getActiveSheet()->mergeCells('F3:F4');
	    $excel->setActiveSheetIndex(0)->setCellValue('G3', "TAHUN AJAR");
	    $excel->getActiveSheet()->mergeCells('G3:G4');
	    $excel->setActiveSheetIndex(0)->setCellValue('H3', "BEKERJA");
	    $excel->getActiveSheet()->mergeCells('H3:K3');
	    $excel->setActiveSheetIndex(0)->setCellValue('H4', "INSTANSI");
	    $excel->setActiveSheetIndex(0)->setCellValue('I4', "TAHUN MASUK");
	    $excel->setActiveSheetIndex(0)->setCellValue('J4', "JABATAN");
	    $excel->setActiveSheetIndex(0)->setCellValue('K4', "WAKTU TUNGGU");
	    $excel->setActiveSheetIndex(0)->setCellValue('L3', "KULIAH");
	    $excel->getActiveSheet()->mergeCells('L3:N3');
	    $excel->setActiveSheetIndex(0)->setCellValue('L4', "UNIVERSITAS");
	    $excel->setActiveSheetIndex(0)->setCellValue('M4', "JURUSAN");
	    $excel->setActiveSheetIndex(0)->setCellValue('N4', "TAHUN MASUK");
	    $excel->setActiveSheetIndex(0)->setCellValue('O3', "WIRAUSAHA");
	    $excel->getActiveSheet()->mergeCells('O3:R3');
	    $excel->setActiveSheetIndex(0)->setCellValue('O4', "USAHA");
	    $excel->setActiveSheetIndex(0)->setCellValue('P4', "BIDANG");
	    $excel->setActiveSheetIndex(0)->setCellValue('Q4', "KARYAWAN");
	    $excel->setActiveSheetIndex(0)->setCellValue('R4', "TAHUN BERDIRI");

	    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('B3:B4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('C3:C4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('D3:D4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('E3:E4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('F3:G4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('G3:G4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('H3:K3')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('H4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('I4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('J4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('K4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('L3:N3')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('L4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('M4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('N4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('O3:R3')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('O4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('P4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('Q4')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('R4')->applyFromArray($style_col);
	    
	    $_alumni = $this->vw_alumni_m->get();

	    $_no 		= 1;
	    $_numrow 	= 5;
	    foreach ($_alumni as $data) {
	    	# code...
	    	$excel->setActiveSheetIndex(0)->setCellValue('A'.$_numrow, $_no);
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$_numrow, $data->nis);
			$excel->setActiveSheetIndex(0)->setCellValue('C'.$_numrow, $data->realname);
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$_numrow, $data->jk);
			$excel->setActiveSheetIndex(0)->setCellValue('E'.$_numrow, $data->alamat);
			$excel->setActiveSheetIndex(0)->setCellValue('F'.$_numrow, $data->th_keluar);
			$excel->setActiveSheetIndex(0)->setCellValue('G'.$_numrow, $data->ta_keluar);
			$excel->setActiveSheetIndex(0)->setCellValue('H'.$_numrow, $data->instansi);
			$excel->setActiveSheetIndex(0)->setCellValue('I'.$_numrow, $data->th_masuk_kerja);
			$excel->setActiveSheetIndex(0)->setCellValue('J'.$_numrow, $data->jabatan);
			$excel->setActiveSheetIndex(0)->setCellValue('K'.$_numrow, $data->lama_mencari_kerja);
			$excel->setActiveSheetIndex(0)->setCellValue('L'.$_numrow, $data->universitas);
			$excel->setActiveSheetIndex(0)->setCellValue('M'.$_numrow, $data->jurusan);
			$excel->setActiveSheetIndex(0)->setCellValue('N'.$_numrow, $data->th_masuk_kuliah);
			$excel->setActiveSheetIndex(0)->setCellValue('O'.$_numrow, $data->usaha);
			$excel->setActiveSheetIndex(0)->setCellValue('P'.$_numrow, $data->bidang_usaha);
			$excel->setActiveSheetIndex(0)->setCellValue('Q'.$_numrow, $data->jumlah_karyawan);
			$excel->setActiveSheetIndex(0)->setCellValue('R'.$_numrow, $data->th_usaha);

			// Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
			$excel->getActiveSheet()->getStyle('A'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('A'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('B'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('B'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('C'.$_numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('D'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('E'.$_numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('F'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('F'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('G'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('G'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('H'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('H'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('I'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('I'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('J'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('J'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('K'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('K'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('L'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('L'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('M'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('M'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('N'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('N'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('O'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('O'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('P'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('P'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('Q'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('Q'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('R'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('R'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

			$_no++; // Tambah 1 setiap kali looping
			$_numrow++; // Tambah 1 setiap kali looping

	    }
		
	    // Set width kolom
	    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(6); // Set width kolom A
	    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(18); // Set width kolom B
	    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(50); // Set width kolom C
	    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(18); // Set width kolom D
	    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(50); // Set width kolom E
	    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(18); // Set width kolom A
	    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(18); // Set width kolom B
	    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(18); // Set width kolom A
	    $excel->getActiveSheet()->getColumnDimension('I')->setWidth(18); // Set width kolom B
	    $excel->getActiveSheet()->getColumnDimension('J')->setWidth(18); // Set width kolom A
	    $excel->getActiveSheet()->getColumnDimension('K')->setWidth(18); // Set width kolom B
	    $excel->getActiveSheet()->getColumnDimension('L')->setWidth(18); // Set width kolom A
	    $excel->getActiveSheet()->getColumnDimension('M')->setWidth(18); // Set width kolom B
	    $excel->getActiveSheet()->getColumnDimension('N')->setWidth(18); // Set width kolom A
	    $excel->getActiveSheet()->getColumnDimension('O')->setWidth(18); // Set width kolom B
	    $excel->getActiveSheet()->getColumnDimension('P')->setWidth(18); // Set width kolom A
	    $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(18); // Set width kolom B
	    $excel->getActiveSheet()->getColumnDimension('R')->setWidth(18); // Set width kolom B

	    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
	    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
	    // Set orientasi kertas jadi LANDSCAPE
	    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
	    // Set judul file excel nya
	    $excel->getActiveSheet(0)->setTitle("Laporan Data Siswa");
	    $excel->setActiveSheetIndex(0);
	    // Proses file excel
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    header('Content-Disposition: attachment; filename="Report-Tracer Study_ '.date('d-m-Y H:i:s', time()).'.xlsx"'); // Set nama file excel nya
	    header('Cache-Control: max-age=0');
	    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
	    $write->save('php://output');
	}

	function import_xls() {
		$success 		= false;
    	$excel = new PHPExcel();

		$config['upload_path'] 		="./assets/attachment/excel/";
        $config['allowed_types']	='xlsx';
        $config['encrypt_name'] 	= TRUE;
        
        $this->load->library('upload',$config);
	    if( ! $this->upload->do_upload('foto')){
	        $file = '';
        }else{
        	$data = $this->upload->data();
	        $file = $data['file_name']; 
        }

		$excelreader = new PHPExcel_Reader_Excel2007();
		$loadexcel = $excelreader->load('assets/attachment/excel/'.$file); // Load file yang telah diupload ke folder excel
		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

		// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
		$data = array();

		$numrow = 1;
		foreach($sheet as $row){
			if($numrow > 1 && ($row['C'] != '' || $row['C'] != null)){
				// Kita push (add) array data ke variabel data
				$data = $this->tb_jurusan_m->get_by(array('kode_jurusan' => $row['J']), true);
				if(!empty($data)) {
				    $id_jurusan = $data->jurusan_id;    
				} else {
				    $id_jurusan = '';
				}
				
				$data = array(
					'nis'			=> $row['B'], 
					'realname'		=> $row['C'], 
					'tanggal_lahir'	=> $row['D'], 
					'tempat_lahir'	=> $row['E'], 
					'alamat'		=> $row['F'], 
					'jk'			=> $row['G'], 
					'th_masuk'		=> $row['H'], 
					'th_keluar'		=> $row['I'],
					'jurusan_id'	=> $id_jurusan,
					'email'			=> $row['L'], 
					'no_telp'		=> $row['K'],
					'password'		=> md5(sha1($row['M'])),
					'agama'         => 'ISLAM',
					'path_img'		=> 'assets/admin/default/images/',
					'img'			=> 'avatar.jpg',
					'is_complete'	=> '0',
					'is_role'		=> '2',
					'is_publish' 	=> '1',
					'is_delete'		=> '0'
				);

				$save = $this->tb_user_m->save($data, null);
				if ($save > 0) {
					# code...
					$success = true;
				} else {
					$success = false;
				}
			}
			
			$numrow++; // Tambah 1 setiap kali looping
		}

		$path = FCPATH .'assets/attachment/excel/'.$file;
		if (file_exists($path)){
			chmod($path, 0777);
		    unlink($path);
		}

		echo json_encode(array('success' => $success, 'base_url' => base_url('cms-admin/alumni')), 200);
	}
}

/* End of file rest_alumni.php */
/* Location: ./application/modules/api/controllers/rest_alumni.php */