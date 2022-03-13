<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/multi-select/css/multi-select.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/morrisjs/morris.css" />
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css" />

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Penilaian Universitas</h2>
                            <ul class="header-dropdown">
                                <li> 
                                    <a id="refresh1" href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse">
                                        <i class="icon-refresh"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="universitas-chart"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card m-b-5">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <i class="icon-graduation text-success font-30"></i>
                                </div>
                                <div class="col-9">
                                    <h6 class="mb-0"><b>Complete</b></h6>
                                    <p class="mb-0 text-success"><?php echo '<b>'.count($this->vw_instansi_m->get_by(array('id_bidang' => '1', 'is_complete' => '1'))).'</b>' ?> Perguruan Tinggi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <i class="icon-graduation text-danger font-30"></i>
                                </div>
                                <div class="col-9">
                                    <h6 class="mb-0"><b>Uncompelete</b></h6>
                                    <p class="mb-0 text-danger"><?php echo '<b>'.count($this->vw_instansi_m->get_by(array('id_bidang' => '1', 'is_complete' => '0'))).'</b>' ?> Perguruan Tinggi</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2 class="text-left">Penilaian</h2>
                            <ul class="header-dropdown">
                                <li> 
                                    <a id="refresh2" href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse">
                                        <i class="icon-refresh"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body pt-0">
                            <ul class="list-group list-widget" style="font-size: 13px">
                                <li class="list-group-item pl-0 pb-1 pr-0">
                                    <span class="badge badge-success">P1</span> Etika
                                </li>
                                <li class="list-group-item pl-0 pb-1 pr-0">
                                    <span class="badge badge-success">P2</span> KEmampuan Berkomunikasi
                                </li>
                                <li class="list-group-item pl-0 pb-1 pr-0">
                                    <span class="badge badge-success">P3</span> Kemampuan Belajar
                                </li>
                                <li class="list-group-item pl-0 pb-1 pr-0">
                                    <span class="badge badge-success">P4</span> Manajemen Waktu
                                </li>
                                <li class="list-group-item pl-0 pb-1 pr-0">
                                    <span class="badge badge-success">P5</span> Kemampuang Menyelesaikan Tugas Kelompok/Mandiri
                                </li>
                                <li class="list-group-item pl-0 pb-1 pr-0">
                                    <span class="badge badge-success">P6</span> Kemampuan Berfikir Secara Kritis
                                </li>
                                <li class="list-group-item pl-0 pb-1 pr-0">
                                    <span class="badge badge-success">P7</span> Sosialisasi
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Penilaian Perusahaan / Instanis</h2>
                            <ul class="header-dropdown">
                                <li> 
                                    <a id="refresh1" href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse">
                                        <i class="icon-refresh"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="perusahaan-chart"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card m-b-5">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-bank text-success font-30"></i>
                                </div>
                                <div class="col-9">
                                    <h6 class="mb-0"><b>Complete</b></h6>
                                    <p class="mb-0 text-success"><?php echo '<b>'.count($this->vw_instansi_m->get_by(array('id_bidang' => '2', 'is_complete' => '1'))).'</b>' ?> Perusahaan/Instansi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-bank text-danger font-30"></i>
                                </div>
                                <div class="col-9">
                                    <h6 class="mb-0"><b>Uncompelete</b></h6>
                                    <p class="mb-0 text-danger"><?php echo '<b>'.count($this->vw_instansi_m->get_by(array('id_bidang' => '2', 'is_complete' => '0'))).'</b>' ?> Perusahaan/Instansi</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2 class="text-left">Penilaian</h2>
                            <ul class="header-dropdown">
                                <li> 
                                    <a id="refresh2" href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse">
                                        <i class="icon-refresh"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body pt-0">
                            <ul class="list-group list-widget" style="font-size: 13px">
                                <li class="list-group-item pl-0 pb-1 pr-0">
                                    <span class="badge badge-success">P1</span> Etika
                                </li>
                                <li class="list-group-item pl-0 pb-1 pr-0">
                                    <span class="badge badge-success">P2</span> Keahlian bidang ilmu
                                </li>
                                <li class="list-group-item pl-0 pb-1 pr-0">
                                    <span class="badge badge-success">P3</span> Penggunaan Teknologi Informasi
                                </li>
                                <li class="list-group-item pl-0 pb-1 pr-0">
                                    <span class="badge badge-success">P4</span> Kemampuan Berkomunikasi
                                </li>
                                <li class="list-group-item pl-0 pb-1 pr-0">
                                    <span class="badge badge-success">P5</span> Kerjasama Tim
                                </li>
                                <li class="list-group-item pl-0 pb-1 pr-0">
                                    <span class="badge badge-success">P6</span> Pengembagan Diri
                                </li>
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

<script src="<?php echo $base_assets_url?>bundles/mainscripts.bundle.js"></script>
<script src="<?php echo $base_assets_url?>bundles/morrisscripts.bundle.js"></script> <!-- Morris Plugin Js --> 
<script src="<?php echo $base_assets_url?>vendor/chartist/Chart.bundle.js"></script>
<script src="<?php echo $base_assets_url?>vendor/chartist-js-master/auto-scale-axis.js"></script>
<script src="<?php echo $base_assets_url?>vendor/chartist-js-master/fixed-scale-axis.js"></script>
<script src="<?php echo $base_assets_url?>vendor/chartist-js-master/step-axis.js"></script>
<script src="<?php echo $base_assets_url?>vendor/chartist-plugin-axistitle/chartist-plugin-axistitle.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/chartist-plugin-legend-latest/chartist-plugin-legend.js"></script>
<script src="<?php echo $base_assets_url?>vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo $base_assets_url?>js/index.js"></script>
<script type="text/javascript">
    var perusahaanData, 
        universitasData, 
        myArray,
        maxValueInArray;

    /* Perusahaan/instansi Chart */
    <?php
        $_value = array();
        $_query_perusahaan = $this->vw_quest_perusahaan_m->get();
        foreach ($_query_perusahaan as $key => $value) {
            # code...
            $_SB[$key] = $value->SB;
            $_B[$key] = $value->B;
            $_CB[$key] = $value->CB;
            $_KB[$key] = $value->KB;

            array_push($_value, $value->SB,$value->B,$value->CB,$value->KB);
            $_dataPerusahaan['labels'][$key] = 'P'.($key+1);
            $_dataPerusahaan['series'] = array(
                $_SB,
                $_B,
                $_CB,
                $_KB,
            );
        }
    ?>

    myArray = <?php echo json_encode($_value, 200) ?>;
    maxValueInArray = Math.max.apply(Math, myArray);

    perusahaanData = <?php echo json_encode($_dataPerusahaan, 200) ?>;

    new Chartist.Bar(
        '#perusahaan-chart', 
        perusahaanData, 
        {
            seriesBarDistance: 10,
            reverseData: true,
            height: "400px",
            horizontalBars: true,
            axisY: {
                offset: 20
            },
            axisX: {
                type: Chartist.AutoScaleAxis,
                onlyInteger: true,
                high: maxValueInArray+1,
                labelInterpolationFnc: function(value) {
                  return value;
                }
            },
            plugins: [
                Chartist.plugins.legend({
                    legendNames: ['Sangay Baik', 'Baik', 'Cukup Baik', 'Kurang baik']
                })
            ]
        }
    );

    /* Universitas Chart */
    <?php
        $_value = array();
        $_query_universitas = $this->vw_quest_universitas_m->get();
        foreach ($_query_universitas as $key => $value) {
            # code...
            $_SB[$key] = $value->SB;
            $_B[$key] = $value->B;
            $_CB[$key] = $value->CB;
            $_KB[$key] = $value->KB;

            array_push($_value, $value->SB,$value->B,$value->CB,$value->KB);
            $_data_universitas['labels'][$key] = 'P'.($key+1);
            $_data_universitas['series'] = array(
                $_SB,
                $_B,
                $_CB,
                $_KB,
            );
        }
    ?>

    myArray = <?php echo json_encode($_value, 200) ?>;
    maxValueInArray = Math.max.apply(Math, myArray);

    universitasData = <?php echo json_encode($_data_universitas, 200) ?>;

    new Chartist.Bar(
        '#universitas-chart',
        universitasData, 
        {
            seriesBarDistance: 10,
            reverseData: true,
            height: "460px",
            horizontalBars: true,
            onlyInteger: true,
            axisY: {
                offset: 20
            },
            axisX: {
                type: Chartist.AutoScaleAxis,
                onlyInteger: true,
                high: maxValueInArray+1,
                labelInterpolationFnc: function(value) {
                  return value;
                }
            },
            plugins: [
                Chartist.plugins.legend({
                    legendNames: ['Sangay Baik', 'Baik', 'Cukup Baik', 'Kurang baik']
                })
            ]
        }
    );
</script>