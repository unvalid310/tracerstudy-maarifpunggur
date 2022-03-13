<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/multi-select/css/multi-select.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/nouislider/nouislider.min.css" />

<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="<?php echo $base_assets_url;?>vendor/dropify/css/dropify.min.css">
<?php
    $user_id = $this->session->userdata('user_id');
    $query = $this->tb_quest_instansi_m->get_by(array('user_id' => $user_id));
    if (count($query) > 0) {
        # code...
        foreach ($query as $questData);   
    }
?>
            <form id="addpenilaian" action="<?php echo base_url('api/rest_kuesioner_alumni/penilaian') ?>" method="post" enctype="multipart/form-data">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body" style="padding: 40px">
                                <!-- general -->
                                <div id="general">
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Nama perusahaan/instansi <span class="text-danger">*</span></label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <input type="text" name="P01" class="form-control col-lg-12" value="<?php echo $this->session->userdata('realname'); ?>" readonly>
                                            <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>">
                                            <input type="hidden" name="quest_id" value="<?php echo $retVal = (!empty($questData->quest_id)) ? $questData->quest_id : '' ; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Alamat perusahaan/Instansi <span class="text-danger">*</span></label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <textarea name="P02" class="form-control" rows="3" required><?php echo $retVal = (!empty($questData->P02)) ? $questData->P02 : '' ; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Telp. Instansi <span class="text-danger">*</span></label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <input type="number" name="P03" class="form-control col-lg-8" required value="<?php echo $retVal = (!empty($questData->P03)) ? $questData->P03 : '' ; ?>">    
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Jabatan <span class="text-danger">*</span></label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <input type="text" name="P04" class="form-control col-lg-12" required value="<?php echo $retVal = (!empty($questData->P04)) ? $questData->P04 : '' ; ?>">    
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Pengisi survey <span class="text-danger">*</span></label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <input type="text" name="P05" class="form-control col-lg-12" required value="<?php echo $retVal = (!empty($questData->P05)) ? $questData->P05 : '' ; ?>">    
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Jumlah alumni SMK pada perusahaan/instansi <span class="text-danger">*</span></label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <input type="number" name="P06" class="form-control col-lg-2" required value="<?php echo $retVal = (!empty($questData->P06)) ? $questData->P06 : '' ; ?>">    
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    if ($this->session->userdata('id_bidang') == '1') {
                                        # code...
                                ?>
                                <!-- universitas -->
                                <div id="universitas">
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-12">
                                            <hr>
                                            <h5><b>Ulasan Universitas</b></h5>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Etika </label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_001" value="4" <?php echo $retVal = (!empty($questData->P2_001) && $questData->P2_001 == '4') ? 'checked' : '' ; ?>>
                                                <span><i></i>Sangat Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_001" value="3" <?php echo $retVal = (!empty($questData->P2_001) && $questData->P2_001 == '3') ? 'checked' : '' ; ?>>
                                                <span><i></i>Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_001" value="2" <?php echo $retVal = (!empty($questData->P2_001) && $questData->P2_001 == '2') ? 'checked' : '' ; ?>>
                                                <span><i></i>Cukup Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_001" value="1" <?php echo $retVal = (!empty($questData->P2_001) && $questData->P2_001 == '1') ? 'checked' : '' ; ?>>
                                                <span><i></i>Kurang Baik</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Kemampuan Berkomunikasi </label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_002" value="4" <?php echo $retVal = (!empty($questData->P2_002) && $questData->P2_002 == '4') ? 'checked' : '' ; ?>>
                                                <span><i></i>Sangat Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_002" value="3" <?php echo $retVal = (!empty($questData->P2_002) && $questData->P2_002 == '3') ? 'checked' : '' ; ?>>
                                                <span><i></i>Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_002" value="2" <?php echo $retVal = (!empty($questData->P2_002) && $questData->P2_002 == '1') ? 'checked' : '' ; ?>>
                                                <span><i></i>Cukup Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_002" value="1" <?php echo $retVal = (!empty($questData->P2_002) && $questData->P2_002 == '1') ? 'checked' : '' ; ?>>
                                                <span><i></i>Kurang Baik</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Kemampuan Berkomunikasi </label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_003" value="4" <?php echo $retVal = (!empty($questData->P2_003) && $questData->P2_002 == '4') ? 'checked' : '' ; ?>>
                                                <span><i></i>Sangat Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_003" value="3" <?php echo $retVal = (!empty($questData->P2_003) && $questData->P2_002 == '3') ? 'checked' : '' ; ?>>
                                                <span><i></i>Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_003" value="2" <?php echo $retVal = (!empty($questData->P2_003) && $questData->P2_002 == '2') ? 'checked' : '' ; ?>>
                                                <span><i></i>Cukup Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_003" value="1" <?php echo $retVal = (!empty($questData->P2_003) && $questData->P2_002 == '1') ? 'checked' : '' ; ?>>
                                                <span><i></i>Kurang Baik</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Kemampuan Belajar </label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_004" value="4" <?php echo $retVal = (!empty($questData->P2_004) && $questData->P2_004 == '4') ? 'checked' : '' ; ?>>
                                                <span><i></i>Sangat Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_004" value="3" <?php echo $retVal = (!empty($questData->P2_004) && $questData->P2_004 == '3') ? 'checked' : '' ; ?>>
                                                <span><i></i>Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_004" value="2" <?php echo $retVal = (!empty($questData->P2_004) && $questData->P2_004 == '2') ? 'checked' : '' ; ?>>
                                                <span><i></i>Cukup Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_004" value="1" <?php echo $retVal = (!empty($questData->P2_004) && $questData->P2_004 == '1') ? 'checked' : '' ; ?>>
                                                <span><i></i>Kurang Baik</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Manajemen Waktu </label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_005" value="4" <?php echo $retVal = (!empty($questData->P2_005) && $questData->P2_005 == '4') ? 'checked' : '' ; ?>>
                                                <span><i></i>Sangat Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_005" value="3" <?php echo $retVal = (!empty($questData->P2_005) && $questData->P2_005 == '3') ? 'checked' : '' ; ?>>
                                                <span><i></i>Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_005" value="2" <?php echo $retVal = (!empty($questData->P2_005) && $questData->P2_005 == '2') ? 'checked' : '' ; ?>>
                                                <span><i></i>Cukup Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_005" value="1" <?php echo $retVal = (!empty($questData->P2_005) && $questData->P2_005 == '1') ? 'checked' : '' ; ?>>
                                                <span><i></i>Kurang Baik</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Manajemen Waktu </label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_006" value="4" <?php echo $retVal = (!empty($questData->P2_006) && $questData->P2_006 == '4') ? 'checked' : '' ; ?>>
                                                <span><i></i>Sangat Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_006" value="3" <?php echo $retVal = (!empty($questData->P2_006) && $questData->P2_006 == '3') ? 'checked' : '' ; ?>>
                                                <span><i></i>Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_006" value="2" <?php echo $retVal = (!empty($questData->P2_006) && $questData->P2_006 == '2') ? 'checked' : '' ; ?>>
                                                <span><i></i>Cukup Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_006" value="1" <?php echo $retVal = (!empty($questData->P2_006) && $questData->P2_006 == '1') ? 'checked' : '' ; ?>>
                                                <span><i></i>Kurang Baik</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Bersosialisasi dengan orang yang berbeda budaya maupun latar belakang </label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_007" value="4" <?php echo $retVal = (!empty($questData->P2_007) && $questData->P2_007 == '4') ? 'checked' : '' ; ?>>
                                                <span><i></i>Sangat Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_007" value="3" <?php echo $retVal = (!empty($questData->P2_007) && $questData->P2_007 == '3') ? 'checked' : '' ; ?>>
                                                <span><i></i>Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_007" value="2" <?php echo $retVal = (!empty($questData->P2_007) && $questData->P2_007 == '2') ? 'checked' : '' ; ?>>
                                                <span><i></i>Cukup Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P2_007" value="1" <?php echo $retVal = (!empty($questData->P2_007) && $questData->P2_007 == '1') ? 'checked' : '' ; ?>>
                                                <span><i></i>Kurang Baik</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    } 
                                    if ($this->session->userdata('id_bidang') == '2') {
                                ?>
                                <!-- perusahaan -->
                                <div id="perusahaan">
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-12">
                                            <hr>
                                            <h5><b>Ulasan Perusahaan</b></h5>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Etika </label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_001" value="4" <?php echo $retVal = (!empty($questData->P3_001) && $questData->P3_001 == '4') ? 'checked' : '' ; ?>>
                                                <span><i></i>Sangat Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_001" value="3" <?php echo $retVal = (!empty($questData->P3_001) && $questData->P3_001 == '3') ? 'checked' : '' ; ?>>
                                                <span><i></i>Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_001" value="2" <?php echo $retVal = (!empty($questData->P3_001) && $questData->P3_001 == '2') ? 'checked' : '' ; ?>>
                                                <span><i></i>Cukup Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_001" value="1" <?php echo $retVal = (!empty($questData->P3_001) && $questData->P3_001 == '1') ? 'checked' : '' ; ?>>
                                                <span><i></i>Kurang Baik</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Keahlian Bidang Ilmu </label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_002" value="4" <?php echo $retVal = (!empty($questData->P3_002) && $questData->P3_002 == '4') ? 'checked' : '' ; ?>>
                                                <span><i></i>Sangat Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_002" value="3" <?php echo $retVal = (!empty($questData->P3_002) && $questData->P3_002 == '3') ? 'checked' : '' ; ?>>
                                                <span><i></i>Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_002" value="2" <?php echo $retVal = (!empty($questData->P3_002) && $questData->P3_002 == '2') ? 'checked' : '' ; ?>>
                                                <span><i></i>Cukup Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_002" value="1" <?php echo $retVal = (!empty($questData->P3_002) && $questData->P3_002 == '1') ? 'checked' : '' ; ?>>
                                                <span><i></i>Kurang Baik</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Penggunaan teknologi informasi </label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_003" value="4" <?php echo $retVal = (!empty($questData->P3_003) && $questData->P3_003 == '4') ? 'checked' : '' ; ?>>
                                                <span><i></i>Sangat Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_003" value="3" <?php echo $retVal = (!empty($questData->P3_003) && $questData->P3_003 == '3') ? 'checked' : '' ; ?>>
                                                <span><i></i>Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_003" value="2" <?php echo $retVal = (!empty($questData->P3_003) && $questData->P3_003 == '2') ? 'checked' : '' ; ?>>
                                                <span><i></i>Cukup Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_003" value="1" <?php echo $retVal = (!empty($questData->P3_003) && $questData->P3_003 == '1') ? 'checked' : '' ; ?>>
                                                <span><i></i>Kurang Baik</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Kemampuan Berkomunikasi </label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_004" value="4" <?php echo $retVal = (!empty($questData->P3_004) && $questData->P3_004 == '4') ? 'checked' : '' ; ?>>
                                                <span><i></i>Sangat Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_004" value="3" <?php echo $retVal = (!empty($questData->P3_004) && $questData->P3_004 == '3') ? 'checked' : '' ; ?>>
                                                <span><i></i>Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_004" value="2" <?php echo $retVal = (!empty($questData->P3_004) && $questData->P3_004 == '2') ? 'checked' : '' ; ?>>
                                                <span><i></i>Cukup Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_004" value="1" <?php echo $retVal = (!empty($questData->P3_004) && $questData->P3_004 == '1') ? 'checked' : '' ; ?>>
                                                <span><i></i>Kurang Baik</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Kerjasama Tim </label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_005" value="4" <?php echo $retVal = (!empty($questData->P3_005) && $questData->P3_005 == '4') ? 'checked' : '' ; ?>>
                                                <span><i></i>Sangat Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_005" value="3" <?php echo $retVal = (!empty($questData->P3_005) && $questData->P3_005 == '3') ? 'checked' : '' ; ?>>
                                                <span><i></i>Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_005" value="2" <?php echo $retVal = (!empty($questData->P3_005) && $questData->P3_005 == '2') ? 'checked' : '' ; ?>>
                                                <span><i></i>Cukup Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_005" value="1" <?php echo $retVal = (!empty($questData->P3_005) && $questData->P3_005 == '1') ? 'checked' : '' ; ?>>
                                                <span><i></i>Kurang Baik</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Pengembangan Diri </label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_006" value="4" <?php echo $retVal = (!empty($questData->P3_006) && $questData->P3_006 == '4') ? 'checked' : '' ; ?>>
                                                <span><i></i>Sangat Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_006" value="3" <?php echo $retVal = (!empty($questData->P3_006) && $questData->P3_006 == '3') ? 'checked' : '' ; ?>>
                                                <span><i></i>Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_006" value="2" <?php echo $retVal = (!empty($questData->P3_006) && $questData->P3_006 == '2') ? 'checked' : '' ; ?>>
                                                <span><i></i>Cukup Baik</span>
                                            </label>
                                            <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                <input type="radio" name="P3_006" value="1" <?php echo $retVal = (!empty($questData->P3_006) && $questData->P3_006 == '1') ? 'checked' : '' ; ?>>
                                                <span><i></i>Kurang Baik</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <label>Saran untuk SMK </label>    
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 inputGroup">
                                            <textarea name="P3_007" class="form-control" rows="3"> <?php echo $retVal = !empty($questData->P3_007) ? $questData->P3_007 : '' ; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                                <div id="btn-submit" class="text-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>


<!-- Javascript -->
<script src="<?php echo $base_assets_url?>bundles/libscripts.bundle.js"></script>    
<script src="<?php echo $base_assets_url?>bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo $base_assets_url?>vendor/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?php echo $base_assets_url?>vendor/jquery-validation/additional-methods.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?php echo $base_assets_url?>vendor/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->

<script src="<?php echo $base_assets_url?>vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js --> 
<script src="<?php echo $base_assets_url?>vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js -->
<script src="<?php echo $base_assets_url?>vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<!-- date range -->
<script src="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/moment.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js --> 
<script src="<?php echo $base_assets_url?>vendor/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js --> 

<script src="<?php echo $base_assets_url?>bundles/datatablescripts.bundle.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="<?php echo $base_assets_url;?>vendor/dropify/js/dropify.min.js"></script>
<script src="<?php echo $base_assets_url;?>vendor/ckeditor/ckeditor.js"></script> <!-- Ckeditor --> 

<script src="<?php echo $base_assets_url?>vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->
<script src="<?php echo $base_assets_url?>bundles/mainscripts.bundle.js"></script>

<script type="text/javascript">
    $("#addpenilaian").validate({
        ignore: [],
        debug: false,
        rules: {
            P06 : {
                number: true
            }, 
            P03 : {
                number: true 
            }
        },
        highlight: function (input) {
            $(input).addClass('parsley-error');
            $(input).parents('.multiselect_div').find('.btn-group button').addClass('parsley-error');
        },
        unhighlight: function (input) {
            $(input).removeClass('parsley-error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
            $(element).parents('.inputGroup').append(error);
        },
        submitHandler: function(form, e) {
            e.preventDefault();
            
            var URL = $("#addpenilaian").attr("action");
            
            $.ajax({
                url         : URL,
                type        :'POST',
                data        : new FormData(form), //this is formData
                processData : false,
                contentType : false,
                cache       : false,
                success: function(data) {
                    // body...
                    var row = JSON.parse(data);
                    
                    var body = $("html, body");
                    if ( row.success ) {
                        swal({
                                title: "Selamat!", 
                                text: "Data berhasil disimpan!", 
                                type: "success",
                                timer: 800,
                                showConfirmButton: false
                        });
                        setTimeout(function () {
                            body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
                            location.href = '<?php echo base_url('instansi').'/'.$this->router->fetch_class() ?>';
                        }, 800);
                    }
                }
            });
        }
    });

    $('#cancel').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        location.href = '<?php echo base_url('instansi/penilaian') ?>';
    });
</script>