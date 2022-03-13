<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/multi-select/css/multi-select.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/morrisjs/morris.css" />

<?php
    $_query = $this->vw_alumni_m->get_by(array('user_id' => $this->session->userdata('user_id')));
    foreach ($_query as $key => $value);
?>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card contact-card">
                        <div class="header p-0">
                            <a href="#"><img src="<?php echo base_url($value->img_url) ?>" class="img-fluid" alt="" width="100%"></a>
                        </div>
                        <div class="body text-center">
                            <h6><?php echo $this->session->userdata('realname'); ?> <small><?php echo $this->session->userdata('email'); ?></small></h6>
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
                                Anda telah berhasil mengisi data kuesioner untuk melengkapi biodata anda. Untuk melakukan prubahan data kuesioner, anda dapat mengakses link berikut</p>
                                <a href="<?php echo base_url('kuesioner') ?>" class="btn btn-sm btn-info">kuesioner</a>
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
                                Anda telah berhasil melakukan registrasi untuk melengkapi data anda, anda dapat mengisi data kuesioner yang telah di sediakan. Data kuesioner dapat diakses pada link berikut</p>
                                <a href="<?php echo base_url('kuesioner') ?>" class="btn btn-sm btn-info">kuesioner</a>
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
                                                    <th>Nis</th>
                                                    <th>Alamat</th>
                                                    <th>Jurusan</th>
                                                    <th class="text-center">Tanggal Registrasi</th>
                                                    <th class="text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $retVal = (!empty($value->nis)) ? $value->nis : '-' ; ?></td>
                                                    <td><span class="text-info"><?php echo $retVal = (!empty($value->alamat)) ? $value->alamat : '-' ; ?></span></td>
                                                    <td><?php echo $jurusan = (!empty($value->jurusan)) ? $value->jurusan.' ('.$value->kode_jurusan.')' : '-'?></td>
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