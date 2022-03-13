            <div class="row clearfix">
                <div class="col-12">
                    <div class="alert alert-warning alert-dismissible p-t-15" role="alert">
                        <h4><strong>Selamat datang, <?php echo $this->session->userdata('realname'); ?></strong></h3>
                        <p class="p-t-5">
                            Anda masuk sebagai <b><i>"Superadmin"</i></b>. Sebagai <b><i>"Superadmin"</i></b> anda memiliki tanggung jawab yang besar dalam mengelola sistem ini.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-12">
                    <div class="card top_report">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x icon-users text-col-blue"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>TOTAL ALUMNI</h6>
                                            <span class="font700">
                                                <?php echo count($this->vw_alumni_m->get()) ?>
                                            </span>
                                        </div>
                                    </div>
                                    <?php  
                                        if (count($this->vw_alumni_m->get()) > 0) {
                                            $_user_percent = round((count($this->vw_alumni_m->get_by(array('is_complete' => '1')))/count($this->vw_alumni_m->get()))*100, 2);
                                        } else {
                                            $_user_percent = 0;
                                        }
                                    ?>
                                    <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="<?php echo $_user_percent ?>"></div>
                                    </div>
                                    <small class="text-muted">
                                        <strong><?php echo round($_user_percent).'%' ?></strong> sudah mengisi survey
                                    </small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-bar-chart-o text-col-green"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>COMPLETE</h6>
                                            <span class="font700"><?php echo count($this->vw_alumni_m->get_by(array('is_complete' => '1'))) ?></span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs progress-transparent custom-color-green mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="<?php echo $_user_percent ?>"></div>
                                    </div>
                                    <small class="text-muted">sudah mengisi survey</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-shopping-cart text-col-red"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>RESPONDEN</h6>
                                            <span class="font700"><?php echo count($this->vw_alumni_m->get_by(array('is_complete' => '1'))) ?></span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs progress-transparent custom-color-red mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="<?php echo $_user_percent ?>"></div>
                                    </div>
                                    <small class="text-muted">responden berdasarkan alumni</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="fa fa-2x fa-thumbs-up text-col-yellow"></i>
                                        </div>
                                        <div class="number float-right text-right">
                                            <h6>INSTANSI</h6>
                                            <span class="font700"><?php echo count($this->vw_instansi_m->get()) ?></span>
                                        </div>
                                    </div>
                                    <?php  
                                        if(count($this->vw_instansi_m->get()) > 0) {
                                            $_instansi_percent = round((count($this->vw_instansi_m->get_by(array('is_complete' => '1')))/count($this->vw_instansi_m->get()))*100, 2);    
                                        } else {
                                            $_instansi_percent = 0;
                                        }
                                        
                                    ?>
                                    <div class="progress progress-xs progress-transparent custom-color-yellow mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="<?php echo $_instansi_percent ?>"></div>
                                    </div>
                                    <small class="text-muted"><strong><?php echo $_instansi_percent.'%' ?></strong> memberi penilaian</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12">
                    <div class="card Sales_Overview">
                        <div class="header">
                            <h2>Grafik Lulusan</h2>
                            <ul class="header-dropdown">
                                <li> 
                                    <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse">
                                        <i class="icon-refresh"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="chart-kegiatan" class="ct-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="text-center">Kegiatan Setelah Lulus</h2>
                        </div>
                        <div class="body">
                            <div class="row text-center">
                                <div class="col-6 border-right border-bottom pb-4 pt-4">
                                    <div id="Traffic1" class="carousel vert slide" data-ride="carousel" data-interval="3000">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <label class="mb-0">Bekerja</label>
                                                <h4 class="font-30 font-weight-bold text-primary">
                                                    <?php
                                                        $_query = $this->vw_sum_kegiatan_m->get();
                                                        foreach ($_query as $key => $value);
                                                        echo $value->kerja;
                                                    ?>
                                                </h4>      
                                            </div>
                                            <div class="carousel-item">
                                                <label class="mb-0">Kuliah</label>
                                                <h4 class="font-30 font-weight-bold text-success"><?php echo $value->kuliah ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 border-bottom pb-4 pt-4">
                                    <div id="Traffic1" class="carousel vert slide" data-ride="carousel" data-interval="3000">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <label class="mb-0">Wirausaha</label>
                                                <h4 class="font-30 font-weight-bold text-warning"><?php echo $value->wirausaha ?></h4>
                                            </div>
                                            <div class="carousel-item">
                                                <label class="mb-0">Lainnya</label>
                                                <h4 class="font-30 font-weight-bold text-danger"><?php echo $value->belum ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="form-group">
                                <label class="d-block">Bekerja <span class="float-right"><?php echo $value->persentase_kerja ?>%</span></label>
                                <div class="progress progress-transparent custom-color-blue">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $value->persentase_kerja ?>%;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Kuliah <span class="float-right"><?php echo $value->persentase_kuliah ?>%</span></label>
                                <div class="progress progress-transparent custom-color-green">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $value->persentase_kuliah ?>%;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Wirausaha <span class="float-right"><?php echo $value->persentase_wirausaha ?>%</span></label>
                                <div class="progress progress-transparent custom-color-yellow">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $value->persentase_wirausaha ?>%;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Lainnya <span class="float-right"><?php echo $value->persentase_belum ?>%</span></label>
                                <div class="progress progress-transparent custom-color-red">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $value->persentase_belum ?>%;"></div>
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
<script src="<?php echo $base_assets_url?>js/index.js"></script>
<script type="text/javascript">
    var options;

    $.ajax({
        type: "POST",
        url: '<?php echo base_url('api/rest_chart/chart_kegiatan') ?>',
        dataType: "JSON",
        success: function(data) { 
            var myArray = data.value;
            var maxValueInArray = Math.max.apply(Math, myArray);

            new Chartist.Line(
                '#chart-kegiatan', 
                data, 
                {
                    height: "310px",
                    low: 0,
                    high: 'auto',
                    series: {
                        'series-projection': {
                            showPoint: true,                
                        },
                    },
                    axisY: {
                        type: Chartist.AutoScaleAxis,
                        onlyInteger: true,
                        high: maxValueInArray+1,
                        labelInterpolationFnc: function(value) {
                            return value;
                        }
                    },
                    options: {
                        responsive: true,
                        legend: false
                    },
                    plugins: [
                        Chartist.plugins.legend({
                            legendNames: ['Bekerja', 'Kuliah', 'Wirausaha', 'Lainnya']
                        })
                    ]
                }
            );
        }
    });
</script>