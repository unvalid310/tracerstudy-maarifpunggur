<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_kuesioner {

	function field($kode, $pertanyaan, $type, $atribut = array(), $value = array(), $form_group = null, $display = 'block') {
        if($atribut['required']) {
            $required = '<span class="text-danger">*</span></label> ';
        } else {
            $required = '';
        }
        
	    $html = '<div id="'.$form_group.'" style="display:'.$display.'">
                <div class="form-group row clearfix">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <label>'.$pertanyaan.' '.$required.'   
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">';
        if($type == 'input') {
            $html .= $this->input($kode, $atribut);
        }
        if($type == 'radio') {
            $html .= $this->radio($kode, $atribut, $value);
        }
        if($type == 'select') {
            $html .= $this->select($kode, $atribut, $value);
        }
        
        $html .= '</div>
                </div>
	        </div>';
	    
	    echo $html;
	}
    
    function input($kode, $atribut) {
        if($atribut['required']) {
            $required = 'required';
        } else {
            $required = '';
        }
        
        $html = '<input type="'.$atribut['type'].'" name="'.$kode.'" class="form-control" '.$required.'>';
        return $html;
    }
    
    function radio($kode, $atribut, $value) {
        $html = '';
        
        for($i=0; $i < count($value); $i++) {
            $html .= '<label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                        <input type="radio" name="'.$kode.'" class="require-one" value="'.$value[$i].'">
                        <span><i></i>'.$value[$i].'</span>
                    </label>';
        }
        
        return $html;
    }
    
    function select($kode, $atribut, $value) {
        if($atribut['required']) {
            $required = 'required';
        } else {
            $required = '';
        }
        
        $html = '<select name="'.$kode.'" class="form-control" '.$required.'>
                <option value="" hidden selected>Pilih Jawaban</option>';
    
        for($i=0; $i < count($value); $i++) {
            $html .= '<option value="'.$value[$i].'">'.$value[$i].'</option>';
        }
        
        $html .= '</select>';
        
        return $html;
    }
}
