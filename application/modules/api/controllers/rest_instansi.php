<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_instansi extends MY_Controller {

	function index() {
		$id = $this->input->post('user_id');
		$email = $this->input->post('email');
		if (!empty($id)) {
			# code...
			$query = $this->vw_instansi_m->get_by(array('user_id' => $id));
		} else if (!empty($email)) {
			$query = $this->vw_instansi_m->get_by(array('email' => $email));
		} else {
			$query = $this->vw_instansi_m->get();
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

	function export_xls() {
    	$excel = new PHPExcel();
    	// setup file
	    $excel->getProperties()->setCreator('SMK N 1 TALANG PADANG')
	                 ->setLastModifiedBy('SMK N 1 TALANG PADANG')
	                 ->setTitle("Data Alumni")
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

	    $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA SISWA");
	    $excel->getActiveSheet()->mergeCells('A1:E1');
	    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE);
	    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
	    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

	    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
	    $excel->setActiveSheetIndex(0)->setCellValue('B3', "NIS");
	    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA");
	    $excel->setActiveSheetIndex(0)->setCellValue('D3', "JENIS KELAMIN");
	    $excel->setActiveSheetIndex(0)->setCellValue('E3', "ALAMAT");

	    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
	    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
	    
	    $_alumni = $this->vw_alumni_m->get();

	    $_no 		= 1;
	    $_numrow 	= 4;
	    foreach ($_alumni as $data) {
	    	# code...
	    	$excel->setActiveSheetIndex(0)->setCellValue('A'.$_numrow, $_no);
			$excel->setActiveSheetIndex(0)->setCellValue('B'.$_numrow, $data->nis);
			$excel->setActiveSheetIndex(0)->setCellValue('C'.$_numrow, $data->realname);
			$excel->setActiveSheetIndex(0)->setCellValue('D'.$_numrow, $data->jk);
			$excel->setActiveSheetIndex(0)->setCellValue('E'.$_numrow, $data->alamat);

			// Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
			$excel->getActiveSheet()->getStyle('A'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('A'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('B'.$_numrow)->applyFromArray($style_row);
	    	$excel->getActiveSheet()->getStyle('B'.$_numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
			$excel->getActiveSheet()->getStyle('C'.$_numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('D'.$_numrow)->applyFromArray($style_row);
			$excel->getActiveSheet()->getStyle('E'.$_numrow)->applyFromArray($style_row);

			$_no++; // Tambah 1 setiap kali looping
			$_numrow++; // Tambah 1 setiap kali looping

	    }
		
	    // Set width kolom
	    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
	    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
	    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
	    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
	    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E

	    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
	    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
	    // Set orientasi kertas jadi LANDSCAPE
	    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
	    // Set judul file excel nya
	    $excel->getActiveSheet(0)->setTitle("Laporan Data Siswa");
	    $excel->setActiveSheetIndex(0);
	    // Proses file excel
	    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	    header('Content-Disposition: attachment; filename="Data Siswa.xlsx"'); // Set nama file excel nya
	    header('Cache-Control: max-age=0');
	    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
	    $write->save('php://output');
	}

}

/* End of file rest_instansi.php */
/* Location: ./application/modules/api/controllers/rest_instansi.php */