<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-toggle/bootstrap-toggle.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/multi-select/css/multi-select.css">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card Sales_Overview">
                        <div class="header">
                            <ul class="header-dropdown">
                                <li> 
                                    <a href="javascript:void(0);" id="refresh" data-toggle="cardloading" data-loading-effect="pulse">
                                        <i class="icon-refresh"></i>
                                    </a>
                                </li>   
                            </ul>
                        </div>

                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 text-left">       
                                 <div class="body">
                                    <div class="clearfix">
                                        <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter"><i class="fa fa-filter"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-7 col-sm-7 text-right">
                                 <div class="body pb-0">
                                    <div class="clearfix">
                                        <div class="search-form">
                                            <input value="" class="form-control col-md-12" name="search" placeholder="Search here..." type="search">
                                            <button id="buttonSearch" type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="collapse" id="collapseFilter">    
                            <div class="body pt-0">
                                <hr>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <div class="multiselect_div">
                                            <input type="text" class="form-control date-range-filter" placeholder="Tahun Masuk" data-date-format="mm-dd-yyyy" id="th_masuk" />
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <div class="multiselect_div">
                                            <div class="multiselect_div">
                                            <input type="text" class="form-control date-range-filter" placeholder="Tahun Keluar" data-date-format="mm-dd-yyyy" id="th_keluar" />
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="multiselect_div">
                                            <select id="name_category" name="id_category" class="required form-control multiselect multiselect-custom" multiple="multiple" readonly>
                                                <?php
                                                    $query = $this->tb_jurusan_m->get_by(array('is_publish' => '1'));
                                                    foreach ($query as $data) {
                                                        # code...
                                                ?>
                                                <option value="<?php echo $data->jurusan_id ?>"><?php echo $data->nama_jurusan ?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4" style="margin: auto">
                                        <a class="text-primary m-r-20" data-toggle="collapse" href="#collapseFilter" data-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter"><i class="icon-refresh m-r-10"></i> Apply Filter</a>
                                        <a class="text-danger" id="clear-filter" href="#collapseFilter" data-toggle="collapse" data-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter"><i class="icon-close m-r-10"></i> Clear Filter</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <table class="table table-hover table-bordered dataTable table-custom c_list" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="1%"></th>
                                                <th class="text-left" colspan="3" width="30%">Alumni</th>
                                                <th class="text-center" width="25%">Jurusan</th>
                                                <th class="text-center" width="15%">Tahun Masuk</th>
                                                <th class="text-center" width="15%">Tahun Keluar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center" width="1%"></th>
                                                <th class="text-left" colspan="3" width="25%">Alumni</th>
                                                <th class="text-center" width="20%">Jurusan</th>
                                                <th class="text-center" width="20%">Tahun Masuk</th>
                                                <th class="text-center" width="20%">Tahun Keluar</th>
                                            </tr>
                                        </tfoot>
                                    </table>
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
<script src="<?php echo $base_assets_url?>bundles/datatablescripts.bundle.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<!-- Bootstrap Toggle -->
<script src="<?php echo $base_assets_url?>vendor/bootstrap-toggle/bootstrap-toggle.js"></script>
<!-- date range -->
<script src="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/moment.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js --> 
<!-- Multiselect -->
<script src="<?php echo $base_assets_url?>vendor/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js -->
<script src="<?php echo $base_assets_url?>vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="<?php echo $base_assets_url?>bundles/mainscripts.bundle.js"></script>
<script src="<?php echo $base_assets_url?>bundles/morrisscripts.bundle.js"></script>
<script type="text/javascript">
    var category_value = '';
    var count = 0;

    $('#name_category').multiselect({
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        maxHeight: 200,
        filterPlaceholder: 'Search for something...',
        buttonText: function(options, select) {
            if (options.length === 0) {
                return 'Jurusan';
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
                category_value = option.val();
                table.column(8).search(option.val()).draw();
                $('.multiselect_div .multiselect-container').removeClass('show');
            }else{
                category_value = '';
                table.column(8).search(category_value).draw();
                $('.multiselect_div .multiselect-container').removeClass('show');
            }

            $('#name_category option').each(function() {
                if ($(this).val() !== option.val()) {
                    values.push($(this).val());
                }
            });
                                
            $('#name_category').multiselect('deselect', values);
        }
    });

    var table = $('.dataTable').DataTable({
        "ajax": {
            "url": "<?php echo base_url("api/rest_alumni") ?>",
            "type": "GET"
        },
        searching: true,
        paging: true,
        bInfo: true,
        autoWidth: false,
        order: [[9, 'desc']],
        columns: [
            {
                class       :"text-center no",
                width       : '1%',
                data        : "user_id",
                searchable  : false,
                orderable   : false,
                targets     : 0
            },
            {
                className   :'details-control',
                width       : '1%',
                orderable   : false,
                data        : null,
                defaultContent: ''
            },
            {
                class   :"text-left avatarImg",
                width   : '5%',
                data    : { "data": "img_url" },
                render  : function (data, type, full, meta){
                    return '<img src="<?php echo base_url() ?>/'+data.img_url+'?width=40" class="rounded-circle avatar">';
                }
            },
            {
                class   :"text-left",
                width   : '30%',
                data    : {"data": "nis", "data": "realname"},
                render  : function(data, type, full, meta){
                    var nis = (data.nis != null) ? data.nis : '-';
                    return '<b>'+data.realname+'</b></br><span class="badge badge-info ml-0">'+nis+'</span>'
                }
            },
            {
                class   :"text-left",
                width   : '25%',
                data    : { "data": "nama_jurusan", "data": "kode_jurusan" },
                orderable   : true,
                render  : function (data, type, full, meta){
                    var jurusan = (data.nama_jurusan != null) ? '<b>'+data.nama_jurusan+'</b> ('+data.kode_jurusan+')' : '-';

                    return jurusan;
                }
            },
            {
                class   :"text-center",
                width   : '15%',
                data    : { "data": "th_masuk" },
                orderable   : true,
                render  : function (data, type, full, meta){
                    var th_masuk = (data.th_masuk != null)? data.th_masuk : '-';
                    return '<span class="badge badge-primary">'+th_masuk+'</span>';
                }
            },
            {
                class   :"text-center",
                width   : '15%',
                data    : { "data": "th_keluar" },
                orderable   : true,
                render  : function (data, type, full, meta){
                    var th_keluar = (data.th_keluar)? data.th_keluar : '-';
                    return '<span class="badge badge-primary">'+th_keluar+'</span>';
                }
            },
            {
                data        : "realname",
                searchable  : true,
                orderable   : true,
                targets     : 7,
                visible     : false
            },
            {
                data        : "jurusan_id",
                searchable  : true,
                orderable   : true,
                targets     : 8,
                visible     : false
            },
            {
                data        : "create_onnya",
                searchable  : false,
                orderable   : true,
                targets     : 9,
                visible     : false
            },
        ],
        drawCallback: function(settings){
            var api = new $.fn.dataTable.Api( settings );

            // Initialize switch
            $('.switch', api.table().body()).bootstrapToggle(); 
        }
    });
    
    table.on( 'order.dt search.dt', function () {
        table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();

    $('input[name="search"]').on( 'keyup', function () {
        table.search($('input[name="search"]').val()).draw();
    });

    // Add event listener for opening and closing details
    $('.dataTable tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            if ( table.row( '.shown' ).length ) {
                $('.details-control', table.row( '.shown' ).node()).click();
            }
            row.child( format( row.data() ) ).show();
            tr.addClass('shown');
        }
    });

    /* Formatting function for row details - modify as you need */
    function format ( d ) {
        // `d` is the original data object for the row
        var html,
            jk              = (d.jk != null)? d.jk : '-',
            ttlnya          = (d.ttlnya != null)? d.ttlnya : '-',
            agama           = (d.agama != null)? d.agama : '-',
            alamat          = (d.alamat != null)? d.alamat : '-',
            no_telp         = (d.jk != null)? d.no_telp : '-'
            nama_jurusan    = (d.nama_jurusan != null)? d.nama_jurusan+' ('+d.kode_jurusan+')' :'-',
            th_masuk        = (d.th_masuk != null)? d.th_masuk : '-',
            ta_masuk        = (d.ta_masuk != null)? d.ta_masuk : '-',
            th_keluar       = (d.th_keluar != null)? d.th_keluar : '-',
            ta_keluar       = (d.ta_keluar != null)? d.ta_keluar : '-';

        html = '<table id="detail" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;" width="100%">'
                    +'<tr>'
                        +'<td class="header text-left" colspan="6" width="50%">Biodata</td>'
                    +'</tr>'
                    +'<tr>'
                        +'<td class="content text-left" width="10%"><b>Nama Lengkap</b></td>'
                        +'<td class="content text-center" width="1%"><b>:</b></td>'
                        +'<td class="content text-left" width="20%">'+d.realname+'</td>'
                        +'<td class="content text-left" width="10%"><b>Jenis Kelamin</b></td>'
                        +'<td class="content text-center" width="1%"><b>:</b></td>'
                        +'<td class="content text-left" width="20%">'+jk+'</td>'
                    +'</tr>'
                    +'<tr>'
                        +'<td class="content text-left" width="10%"><b>Tempat Tanggal Lahir</b></td>'
                        +'<td class="content text-center" width="1%"><b>:</b></td>'
                        +'<td class="content text-left" width="20%">'+ttlnya+'</td>'
                        +'<td class="content text-left" width="10%"><b>Agama</b></td>'
                        +'<td class="content text-center" width="1%"><b>:</b></td>'
                        +'<td class="content text-left" width="20%" colspan="4">'+agama+'</td>'
                    +'</tr>'
                    +'<tr>'
                        +'<td class="content text-left" width="10%"><b>Alamat</b></td>'
                        +'<td class="content text-center" width="1%"><b>:</b></td>'
                        +'<td class="content text-left" width="20%">'+alamat+'</td>'
                    +'</tr>'
                    +'<tr>'
                        +'<td class="header text-left" colspan="6" width="100%">Contact</td>'
                    +'</tr>'
                    +'<tr>'
                        +'<td class="content text-left" width="10%"><b>E-mail</b></td>'
                        +'<td class="content text-center" width="1%"><b>:</b></td>'
                        +'<td class="content text-left" width="20%" colspan="4">'+d.email+'</td>'
                    +'</tr>'
                    +'<tr>'
                        +'<td class="content text-left" width="10%"><b>No. Telpon</b></td>'
                        +'<td class="content text-center" width="1%"><b>:</b></td>'
                        +'<td class="content text-left" width="20%" colspan="4">'+no_telp+'</td>'
                    +'</tr>'
              +'</table>';

        return html;
    }

    $('#th_masuk').datepicker({ format: 'yyyy', startView: "year", minView: "year", minViewMode: 2, autoclose: true, changeYear: true });
    $('#th_keluar').datepicker({ format: 'yyyy', startView: "year", minView: "year", minViewMode: 2, autoclose: true, changeYear: true });

    $('#th_masuk').change(function () {
        table.column(5).search($('#th_masuk').val()).draw();
    });

    $('#th_keluar').change(function () {
        table.column(6).search($('#th_keluar').val()).draw();
    });

    $('a#clear-filter').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        clearFilter();
    });

    function clearFilter() {
        var body = $("html, body");
                            
        if (category_value) { $('#name_category').multiselect('deselect', category_value, true); }
        $('#th_masuk, #th_keluar, input[name="search"]').val('');
        $('input[name="search"]').keyup();
        // Remove all filtering
        setTimeout(function () {
            table
            .search( '' )
            .columns().search( '' )
            .draw();
            body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
        }, 1000);
    }

    $('button[data-toggle="collapseFilter"]').on('click', function(event) {
        event.preventDefault();
        var body = $("html, body");
        /* Act on the event */

        setTimeout(function () {
            table.ajax.reload();
            body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
        }, 1000);
    });

    $('#refresh').on('click', function(event) {
        event.preventDefault();
        var body = $("html, body");
        var showCollapse = $('.Sales_Overview').find('.collapse.show');
        /* Act on the event */
        clearFilter();
        if (showCollapse) { $('#collapseFilter').slideUp(); }
    });
</script>