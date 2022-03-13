<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/fixedeader/
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
                                    <div class="header pb-2">
                                        <h4>Informasi yang dibutuhkan</h4>
                                    </div>
                                    <div class="body pt-0">
                                        <div class="form-group">
                                            <label class="d-block">Mencari informasi pekerjaan <span class="float-right" id="info_kerja"></span></label>
                                            <div class="progress progress-transparent custom-color-blue m-b-5">
                                                <div id="p_kerja" class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 67%;"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="d-block">Mencari informasi Perguruan Tinggi / Universitas <span class="float-right" id="info_kuliah"></span></label>
                                            <div class="progress progress-transparent custom-color-green m-b-5">
                                                <div id="p_kuliah" class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="d-block">Lainnya <span class="float-right" id="info_lainnya"></span></label>
                                            <div class="progress progress-transparent custom-color-yellow m-b-5">
                                                <div id="p_lainnya" class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 67%;"></div>
                                            </div>
                                        </div>
                                    </div>
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
                            <h2>Informasi Lainnya</h2>
                            <ul class="header-dropdown">
                                <li> 
                                    <a id="refresh1" href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse">
                                        <i class="icon-refresh"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-hover table-bordered dataTable table-custom c_list" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="1%">#</th>
                                        <th class="text-left" width="15%">Informasi Lainnya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
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
                kebutuhan(static);
                table.column(2).search(static).draw();
                $('.multiselect_div .multiselect-container').removeClass('show');
            }else{
                static = '';
                kebutuhan(static);
                table.column(2).search(static).draw();
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



    var table = $('.dataTable').DataTable({
        "ajax": {
            "url": "<?php echo base_url("api/rest_kebutuhan/geTable") ?>",
            "type": "GET"
        },
        searching: true,
        paging: true,
        bInfo: true,
        autoWidth: false,
        order: [[2, 'asc']],
        columns: [
            {
                class       :"text-center no",
                width       : '1%',
                data        : "jurusan_id",
                searchable  : false,
                orderable   : false,
                targets     : 0
            },
            {
                class       :"text-left",
                width       : '15%',
                orderable   : false,
                data        : {"data": "kode_jurusan"},
                render      : function(data, type, full, meta){
                    return '<b>'+data.P18_002+'</b>';
                }
            },
            {
                class       :"text-center no",
                width       : '1%',
                data        : "th_keluar",
                searchable  : true,
                orderable   : false,
                visible     : false,
                targets     : 2
            },
        ]
    });
    
    table.on( 'order.dt search.dt', function () {
        table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();

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

                $('#info_kerja').html(data.info_kerja);
                $('#info_kuliah').html(data.info_kuliah);
                $('#info_lainnya').html(data.info_lainnya);
                $('#p_kerja').css('width', data.p_kerja+'%');
                $('#p_kuliah').css('width', data.p_kuliah+'%');
                $('#p_lainnya').css('width', data.p_lainnya+'%');
                $('#complete').html(data.complete);
                $('#ucomplete').html(data.uncomplete);

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