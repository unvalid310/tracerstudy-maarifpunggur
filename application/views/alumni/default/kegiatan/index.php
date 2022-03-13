<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/multi-select/css/multi-select.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/morrisjs/morris.css" />

            <div class="row clearfix">
                <div class="col-12">
                    <div class="card top_report">
                        <div class="header">
                            <ul class="header-dropdown">
                                <li> 
                                    <div class="multiselect_div" style="width: 200px">
                                        <select id="static" name="static" class="form-control multiselect multiselect-custom" multiple="multiple">
                                        <?php
                                            $_query = $this->vw_alumni_m->get_by('th_masuk <> " " GROUP BY th_keluar');
                                            foreach ($_query as $data) {
                                                # code...
                                        ?>
                                            <option value="<?php echo $data->th_keluar ?>"><?php echo $data->th_keluar ?></option>
                                        <?php
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </li>
                                <li> 
                                    <a id="refresh" href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse">
                                        <i class="icon-refresh"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                                    <div class="header">
                                        <h2>Alumni</h2>
                                    </div>
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
                                <div class="col-lg-9 col-md-6 col-sm-6 border-left">
                                    <div class="body">
                                        <div class="row text-center">
                                            <div class="col-3">
                                                <h4><font id="bekerja"></font> <span class="font-13 d-block mt-2">Bekerja</span></h4>
                                            </div>
                                            <div class="col-3 border-left border-right">
                                                <h4><font id="kuliah"></font> <span class="font-13 d-block mt-2">Kuliah</span></h4>
                                            </div>
                                            <div class="col-3 border-right">
                                                <h4><font id="wirausaha"></font> <span class="font-13 d-block mt-2">Wirausaha</span></h4>
                                            </div>
                                            <div class="col-3">
                                                <h4><font id="belum"></font> <span class="font-13 d-block mt-2">Lainnya</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sparkline" data-type="bar" data-offset="90" data-width="100%" data-height="60px" data-bar-Width="10" data-bar-Spacing="10" data-bar-Color="#7cb5ec">4,8,0,3,1,8,5,4,0,5,4,3,2,1,5,6,7,8,4,5,8,0,3</div>
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
                                    <a id="refresh1" href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse">
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
                            <h2 class="text-left">Jurusan</h2>
                            <ul class="header-dropdown">
                                <li> 
                                    <a id="refresh2" href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse">
                                        <i class="icon-refresh"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body" id="listJurusan"></div>
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

<script src="<?php echo $base_assets_url?>bundles/morrisscripts.bundle.js"></script> <!-- Morris Plugin Js --> 
<script src="<?php echo $base_assets_url?>js/index.js"></script>
<script type="text/javascript">
    var static,
        morrisLine;

    kegiatan();
    MorrisBarChart();

    $('#static').multiselect({
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        maxHeight: 200,
        filterPlaceholder: 'Search for something...',
        buttonText: function(options, select) {
            if (options.length === 0) {
                return 'Pilih Tahun';
            }
            else {
                 var labels = ''
                 options.each(function() {
                     if ($(this).attr('label') !== undefined) {
                         labels = $(this).attr('label');
                     }
                     else {
                         labels = $(this).html();
                     }
                 });
                 return labels;
            }
        },
        onChange: function(option, checked, select){
            var values = [];
            
            if (checked) {
                static = option.val();
                kegiatan(static);
                $('.multiselect_div .multiselect-container').removeClass('show');
            }else{
                static = '';
                kegiatan(static);
                $('.multiselect_div .multiselect-container').removeClass('show');
            }

            $('#static option').each(function() {
                if ($(this).val() !== option.val()) {
                    values.push($(this).val());
                }
            });
                                
            $('#static').multiselect('deselect', values);
        }
    });

    function kegiatan(tahun = null) {
        // body...
        $.ajax({
            type: "POST",
            url: '<?php echo base_url('api/rest_kegiatan') ?>',
            data: { 'tahun' : tahun },
            dataType: "JSON",
            success: function(data) { 
                var jurusan = data.jurusan,
                    html = '';

                $('#bekerja').html(data.kerja);
                $('#kuliah').html(data.kuliah);
                $('#wirausaha').html(data.wirausaha);
                $('#belum').html(data.belum);
                $('#complete').html(data.complete);
                $('#ucomplete').html(data.uncomplete);

                var myArray = data._maxchart;
                var maxValueInArray = Math.max.apply(Math, myArray);
                setMorris(data.chart, (maxValueInArray+1));

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
                }
            }
        });
    }
    
    // Morris bar chart
    function MorrisBarChart() {
        morrisLine = Morris.Bar({
            element: 'chart-kegiatan',
            xkey: 'y',
            ykeys: ['kerja', 'kuliah', 'wirausaha', 'lainnya'],
            labels: ['Bekerja ', 'Kuliah ', 'Wirausaha ', 'Lainnya '],
            barColors: ['#0E9BE2', '#86c541', '#f3ad06', '#FF4402'],
            hideHover: 'auto',
            gridLineColor: '#313942',
            resize: true,
            parseTime: false,
            yLabelFormat: function(y){return y != Math.round(y)?'':y;},
        });
    }

    function setMorris(data, max) {
        morrisLine.options["ymax"] = max;
        morrisLine.setData(data);
    }

    $('#refresh,#refresh1,#refresh2').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        $('#static').multiselect('deselect', static);
        kegiatan();
    });
</script>