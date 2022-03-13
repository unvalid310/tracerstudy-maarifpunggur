<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/fixedeader/
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/multi-select/css/multi-select.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/morrisjs/morris.css" />

<?php
    $category = $this->vw_soal_m->getCategory();
    $soal = $this->vw_soal_m->getSoal();
    $_query = $this->vw_kesesuaian_m->get();
    foreach ($_query as $data);
    $SE = array(
        $data->P1_SE,
        $data->P2_SE,
        $data->P3_SE,
        $data->P4_SE,
        $data->P5_SE,
        $data->P6_SE,
        $data->P7_SE,
        $data->P8_SE,
        $data->P9_SE,
    );
    $E = array(
        $data->P1_E,
        $data->P2_E,
        $data->P3_E,
        $data->P4_E,
        $data->P5_E,
        $data->P6_E,
        $data->P7_E,
        $data->P8_E,
        $data->P9_E,
    );
    $CE = array(
        $data->P1_CE,
        $data->P2_CE,
        $data->P3_CE,
        $data->P4_CE,
        $data->P5_CE,
        $data->P6_CE,
        $data->P7_CE,
        $data->P8_CE,
        $data->P9_CE,
    );
    $TE = array(
        $data->P1_TE,
        $data->P2_TE,
        $data->P3_TE,
        $data->P4_TE,
        $data->P5_TE,
        $data->P6_TE,
        $data->P7_TE,
        $data->P8_TE,
        $data->P9_TE,
    );

    $P_SE = array(
        $data->P_P1_SE,
        $data->P_P2_SE,
        $data->P_P3_SE,
        $data->P_P4_SE,
        $data->P_P5_SE,
        $data->P_P6_SE,
        $data->P_P7_SE,
        $data->P_P8_SE,
        $data->P_P9_SE,
    );
    $P_E = array(
        $data->P_P1_E,
        $data->P_P2_E,
        $data->P_P3_E,
        $data->P_P4_E,
        $data->P_P5_E,
        $data->P_P6_E,
        $data->P_P7_E,
        $data->P_P8_E,
        $data->P_P9_E,
    );
    $P_CE = array(
        $data->P_P1_CE,
        $data->P_P2_CE,
        $data->P_P3_CE,
        $data->P_P4_CE,
        $data->P_P5_CE,
        $data->P_P6_CE,
        $data->P_P7_CE,
        $data->P_P8_CE,
        $data->P_P9_CE,
    );
    $P_TE = array(
        $data->P_P1_TE,
        $data->P_P2_TE,
        $data->P_P3_TE,
        $data->P_P4_TE,
        $data->P_P5_TE,
        $data->P_P6_TE,
        $data->P_P7_TE,
        $data->P_P8_TE,
        $data->P_P9_TE,
    );
?>

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12">
                    <div class="card Sales_Overview">
                        <div class="header">
                            <h2>Kesesuaian</h2>
                            <ul class="header-dropdown">
                                <li> 
                                    <a id="refresh" href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse">
                                        <i class="icon-refresh"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive social_media_table">

                            <table class="table m-b-0" width="100%">
                                <tbody>
                                <?php  
                                    foreach ($soal as $key => $value) {
                                        # code...
                                        if ($key == 0) {
                                            # code...
                                ?>
                                    <tr>
                                        <td width="100%" colspan="2"><strong><?php echo $category[0] ?></strong></td>
                                    </tr>
                                <?php
                                        } elseif ($key == 3) {
                                            # code...
                                ?>
                                    <tr>
                                        <td width="100%" colspan="2"><strong><?php echo $category[1] ?></strong></td>
                                    </tr>
                                <?php
                                        } elseif ($key == 6) {
                                            # code...
                                ?>
                                    <tr>
                                        <td width="100%" colspan="2"><strong><?php echo $category[2] ?></strong></td>
                                    </tr>
                                <?php
                                        }
                                ?>
                                    <tr>
                                        <td width="5%"><strong><?php echo 'P'.($key+1) ?></strong></td>
                                        <td width="95%"><span><?php echo $soal[$key] ?></span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" width="100%" style="border-top: none; border-bottom: 1px solid #dee2e6; padding-top: 0;">
                                            <table class="table m-b-0" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td width="5%" style="border: none; padding-top: 0; padding-bottom: 0;"></td>
                                                        <td width="25%" style="border: none; padding-top: 0; padding-bottom: 0;">
                                                            <small>
                                                                <label class="d-block"><strong>Sangat Erat</strong> 
                                                                    <span class="float-right"><?php echo $SE[$key] ?></span>
                                                                </label>
                                                            </small>
                                                            <div class="progress progress-xs m-b-5">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $P_SE[$key] ?>%;">
                                                            </div>
                                                        </td>
                                                        <td width="25%" style="border: none; padding-top: 0; padding-bottom: 0;">
                                                            <small>
                                                                <label class="d-block"><strong>Erat</strong> 
                                                                    <span class="float-right"><?php echo $E[$key] ?></span>
                                                                </label>
                                                            </small>
                                                            <div class="progress progress-xs m-b-5">
                                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $P_E[$key] ?>%;">
                                                            </div>
                                                        </td>
                                                        <td width="25%" style="border: none; padding-top: 0; padding-bottom: 0;">
                                                            <small>
                                                                <label class="d-block"><strong>Cukup Erat</strong> 
                                                                    <span class="float-right"><?php echo $CE[$key] ?></span>
                                                                </label>
                                                            </small>
                                                            <div class="progress progress-xs m-b-5">
                                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $P_CE[$key] ?>%;">
                                                            </div>
                                                        </td>
                                                        <td width="25%" style="border: none; padding-top: 0; padding-bottom: 0;">
                                                            <small>
                                                                <label class="d-block"><strong>Tidak Erat</strong> 
                                                                    <span class="float-right"><?php echo $TE[$key] ?></span>
                                                                </label>
                                                            </small>
                                                            <div class="progress progress-xs m-b-0">
                                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $P_TE[$key] ?>%;">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                <?php  
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Alumni</h2>
                            <ul class="header-dropdown">
                                <li> 
                                    <a id="refresh" href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse">
                                        <i class="icon-refresh"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-12 col-md-12 col-sm-12 text-center">
                                    <div class="body pt-0">
                                        <div class="row">
                                            <div class="col-12 m-b-15">
                                                <h1><i class="icon-user"></i></h1>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <h4 class="font-22 text-col-green font-weight-bold">
                                                    <small class="font-12 text-col-dark d-block m-b-10">Complete</small>
                                                    <font id="complete"></font>
                                                </h4>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <h4 class="font-22 text-col-blue font-weight-bold">
                                                    <small class="font-12 text-col-dark d-block m-b-10">Uncomplete</small>
                                                    <font id="ucomplete"></font>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2 class="text-left">Jurusan</h2>
                            <ul class="header-dropdown">
                                <li> 
                                    <a id="refresh2" href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse">
                                        <i class="icon-refresh"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <ul class="list-group list-widget" style="font-size: 13px">
                                <?php
                                    $_query = $this->vw_kesesuaian_jurusan_m->get();
                                    foreach ($_query as $value) {
                                        # code...
                                ?>
                                <li class="list-group-item pl-0 pr-0">
                                    <span class="badge badge-success"><?php echo $value->responden ?></span> 
                                    <?php echo $value->jurusan ?> <strong>(<?php echo $value->kode_jurusan ?>)</strong>'
                                </li>
                                <?php } ?>
                            </ul>
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
<script src="<?php echo $base_assets_url?>bundles/datatablescripts.bundle.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="<?php echo $base_assets_url?>bundles/mainscripts.bundle.js"></script>
<script src="<?php echo $base_assets_url?>vendor/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js -->
<script src="<?php echo $base_assets_url?>vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>

<script src="<?php echo $base_assets_url?>bundles/morrisscripts.bundle.js"></script> <!-- Morris Plugin Js --> 
<script src="<?php echo $base_assets_url?>js/index.js"></script>
<script type="text/javascript">
    var static,
        morrisLine;

    kebutuhan();

    function kebutuhan(tahun = null) {
        // body...
        $.ajax({
            type: "POST",
            url: '<?php echo base_url('api/rest_kebutuhan') ?>',
            data: { 'tahun' : tahun },
            dataType: "JSON",
            success: function(data) { 
                var jurusan = data.jurusan,
                    html = '';
                $('#complete').html(data.complete);
                $('#ucomplete').html(data.uncomplete);
                /*
                if (jurusan.length > 0) {
                    html = '<ul class="list-group list-widget" style="font-size: 13px">';
                    for (var i = 0; i < jurusan.length; i++) {
                        html += '<li class="list-group-item pl-0 pr-0">'
                                +'<span class="badge badge-success">'+jurusan[i]['jumlah']+'</span> '
                                +jurusan[i]['jurusan']+' <strong>('+jurusan[i]['kode']+')</strong>'
                            +'</li>';
                    }
                    html +='</ul>'
                    
                    $('#listJurusan').html(html);
                } else {
                    $('#listJurusan').html(null);
                }
                */
            }
        });
    }

    $('#refresh,#refresh1,#refresh2').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        $('#static').multiselect('deselect', static, true);
        kebutuhan();
    });
</script>