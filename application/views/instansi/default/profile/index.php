<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/multi-select/css/multi-select.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/morrisjs/morris.css" />

<?php
    $_query = $this->vw_instansi_m->get_by(array('user_id' => $this->session->userdata('user_id')));
    foreach ($_query as $key => $value);
?>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card contact-card">
                        <div class="header p-0">
                            <a href="#"><img src="<?php echo base_url($value->img_url) ?>" class="img-fluid" alt="" width="100%"></a>
                        </div>
                        <div class="body text-center">
                            <h6><?php echo $this->session->userdata('realname'); ?> 
                                <small class="m-b-10"><?php echo $this->session->userdata('email'); ?></small>
                                <small><?php echo $retVal = (!empty($value->alamat)) ? $value->alamat : '-' ; ?></small>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 col-sm-12" style="margin: auto">
                    <div class="row clearfix">
                        <?php
                            if ($value->is_complete == '1') {
                                # code...
                        ?>
                        <div class="col-12 col-md-12 col-sm-12">
                            <div class="alert alert-primary" role="alert">
                                <h4>Selamat!</h4>
                                <br>
                                <p>
                                Anda telah berhasil mengisi data kuesioner untuk melengkapi data instansi anda. Untuk melakukan prubahan data penilaian, anda dapat mengakses link berikut</p>
                                <a href="<?php echo base_url('instansi/penilaian') ?>" class="btn btn-sm btn-info">kuesioner</a>
                            </div>
                        </div>
                        <?php 
                            } else {
                        ?>
                        <div class="col-12 col-md-12 col-sm-12">
                            <div class="alert alert-danger" role="alert">
                                <h4>Perhatian!</h4>
                                <br>
                                <p>
                                Anda telah berhasil melakukan registrasi untuk melengkapi data instansi anda, anda dapat mengisi data penilaian yang telah di sediakan. Data penilaian dapat diakses pada link berikut</p>
                                <a href="<?php echo base_url('instansi/penilaian') ?>" class="btn btn-sm btn-info">penilaian</a>
                            </div>
                        </div>
                        <?php        
                            }
                        ?>
                        <div class="col-12 col-md-12 col-sm-12 p-t-20">
                            <div class="card">
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table m-b-0">
                                            <thead>
                                                <tr>
                                                    <th width="20%">Pengisi Survey</th>
                                                    <th width="20%">Jabatan</th>
                                                    <th width="15%" class="text-center">Alumni</th>
                                                    <th class="text-center">Tanggal Registrasi</th>
                                                    <th class="text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <b>
                                                            <?php echo $retVal = (!empty($value->responden)) ? $value->responden : '-' ; ?>
                                                        </b>
                                                    </td>
                                                    <td>
                                                        <b>
                                                            <?php echo $jurusan = (!empty($value->jabatan)) ? $value->jabatan : '-'?>
                                                        </b>
                                                    </td>
                                                    <td class="text-center text-primary">
                                                            <?php echo $jurusan = (!empty($value->jumlh_alumni)) ? '<b><span class="badge badge-primary">'.$value->jumlh_alumni.' Siswa'.'</span></b>' : '-'?>
                                                    </td>
                                                    <td class="text-center"><?php echo $jurusan = (!empty($value->create_onnya)) ? $value->create_onnya : '-'?></td>
                                                    <td class="text-center">
                                                        <?php echo $retVal = ($value->is_complete == '1') ? '<span class="badge badge-success">Complete</span>' : '<span class="badge badge-danger  ">Uncomplete</span>' ; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Javascript -->
<script src="<?php echo $base_assets_url?>bundles/libscripts.bundle.js"></script>    
<script src="<?php echo $base_assets_url?>bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo $base_assets_url?>bundles/chartist.bundle.js"></script>
<script src="<?php echo $base_assets_url?>bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
<script src="<?php echo $base_assets_url?>bundles/flotscripts.bundle.js"></script> <!-- flot charts Plugin Js --> 
<script src="<?php echo $base_assets_url?>vendor/flot-charts/jquery.flot.selection.js"></script>

<script src="<?php echo $base_assets_url?>bundles/mainscripts.bundle.js"></script>
<script src="<?php echo $base_assets_url?>vendor/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js -->
<script src="<?php echo $base_assets_url?>vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="<?php echo $base_assets_url?>js/widgets/infobox/infobox-1.js"></script>

<script src="<?php echo $base_assets_url?>bundles/morrisscripts.bundle.js"></script> <!-- Morris Plugin Js --> 
<script src="<?php echo $base_assets_url?>js/index.js"></script>