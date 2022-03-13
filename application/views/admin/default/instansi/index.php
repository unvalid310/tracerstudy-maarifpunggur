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
                                 <div class="body pb-0">
                                    <div class="clearfix">
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>
                                            Action
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <div class="dropdown-divider"></div>
                                                <li class="dropdown-item">
                                                    <a id="batch_delete" href="javascript:void(0);">
                                                        <i class="icon-trash m-r-10"></i>Hapus Data
                                                    </a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a id="batch_unpublish" href="javascript:void(0);">
                                                        <i class="fa fa-eye-slash m-r-10"></i>Unpublish Data
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop2" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-file-excel-o m-r-10"></i>Export
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                                                <div class="dropdown-divider"></div>
                                                <li class="dropdown-item">
                                                    <a id="export_item_all" href="javascript:void(0);">
                                                        <i class="fa fa-square-o m-r-10"></i>Export Semua Item
                                                    </a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a id="export_item" href="javascript:void(0);">
                                                        <i class="fa fa-check-square-o m-r-10"></i>Export Item Terpilih
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        -->
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
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="multiselect_div">
                                            <select id="name_category" name="id_category" class="required form-control multiselect multiselect-custom" multiple="multiple" readonly>
                                                <option value="1">Perguruan Tinggi</option>
                                                <option value="2">Perusahaan / Instansi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="input-daterange input-group" data-provide="datepicker">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="icon-calendar"></i></span></div>
                                            <input type="text" class="form-control date-range-filter" placeholder="Create Date" data-date-format="mm-dd-yyyy" id="min" style="border-right: none" />
                                            <input type="text" class="form-control date-range-filter" data-date-format="mm-dd-yyyy" id="max" style="border-left: none"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 text-right" style="margin: auto !important; font-size: small;">
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
                                                <th class="text-center" width="1%"><label class="fancy-checkbox"><input class="select-all" type="checkbox" name="checkbox"><span></span></label>
                                                </th>
                                                <th class="text-left" colspan="3" width="25%">Instansi</th>
                                                <th class="text-center" width="20%">Status</th>
                                                <th class="text-center" width="20%">Create On</th>
                                                <th class="text-center" width="20%">Last update</th>
                                                <th class="text-center" width="1%">Publish</th>
                                                <th class="text-center" width="10%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center" width="1%"></th>
                                                <th class="text-left" colspan="3" width="25%">Instansi</th>
                                                <th class="text-center" width="20%">Status</th>
                                                <th class="text-center" width="20%">Create On</th>
                                                <th class="text-center" width="20%">Last update</th>
                                                <th class="text-center" width="1%">Publish</th>
                                                <th class="text-center" width="10%"></th>
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
                return 'Bidang Instansi';
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
                table.column(10).search(option.val()).draw();
                $('.multiselect_div .multiselect-container').removeClass('show');
            }else{
                category_value = '';
                table.column(10).search(category_value).draw();
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

    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            var min = $('#min').datepicker('getDate');
            var max = $('#max').datepicker('getDate');

            var startDate = new Date(data[9]);
            
            if (min == null && max == null) return true;
            if (min == null && startDate <= max) return true;
            if (max == null && startDate >= min) return true;
            if (startDate <= max && startDate >= min) return true;

            return false;
        }
    );

    var table = $('.dataTable').DataTable({
        "ajax": {
            "url": "<?php echo base_url("api/rest_instansi") ?>",
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
                width   : '25%',
                data    : {"data": "nis", "data": "realname"},
                render  : function(data, type, full, meta){
                    return '<b>'+data.instansi+'</b>';
                }
            },
            {
                class   :"text-center",
                width   : '20%',
                data    : { "data": "is_complete" },
                orderable   : true,
                render  : function (data, type, full, meta){
                    var status;
                    if (data.is_complete == '1') {
                        status = '<span class="badge badge-success">Complete</span>';    
                    } else {
                        status = '<span class="badge badge-danger">Unomplete</span>';
                    }
                    

                    return '<b class=" text-primary">'+status+'</b>';
                }
            },
            {
                class   :"text-center",
                width   : '20%',
                data    : { "data": "create_onnya" },
                orderable   : true,
                render  : function (data, type, full, meta){

                    return '<span class="badge badge-primary">'+data.create_onnya+'</span>';
                }
            },
            {
                class   :"text-center",
                width   : '20%',
                data    : { "data": "last_updatenya" },
                orderable   : true,
                render  : function (data, type, full, meta){

                    return '<span class="badge badge-primary">'+data.last_updatenya+'</span>';
                }
            },
            {
                class       :"text-center action",
                width       : '1%',
                data        : { "data": "is_publish" },
                searchable  : false,
                orderable   : false,
                targets     : 7,
                render  : function (data, type, full, meta){
                    var toggle;

                    if (data.is_publish == 0) {
                        toggle = '<input id="publish" class="switch" type="checkbox" data-toggle="toggle" data-style="ios" data-size="mini">';
                    } else {
                        toggle = '<input id="publish" class="switch" type="checkbox" checked data-toggle="toggle" data-style="ios" data-size="mini">';
                    }

                    return toggle;
                }
            },
            {
                class       :"text-center action",
                width       : '10%',
                data        : { "data": "is_delete" },
                searchable  : false,
                orderable   : false,
                targets     : 8,
                render  : function (data, type, full, meta){
                    return '<button type="button" id="delete" title="Delete" class="btn btn-danger btn-xs" style="margin-right: 5px !important;"><i class="icon-trash"></i></button>';
                }
            },
            {
                data        : "create_on",
                searchable  : true,
                orderable   : true,
                targets     : 9,
                visible     : false
            },
            {
                data        : "id_bidang",
                searchable  : true,
                orderable   : true,
                targets     : 10,
                visible     : false
            }
        ],
        drawCallback: function(settings){
            var api = new $.fn.dataTable.Api( settings );

            // Initialize switch
            $('.switch', api.table().body()).bootstrapToggle(); 
        }
    });
    
    table.on( 'order.dt search.dt', function () {
        table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            //cell.innerHTML = i+1;
            cell.innerHTML = '<label class="fancy-checkbox"><input class="checkbox-tick" type="checkbox" name="checkbox"><span></span></label>'
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
            responden   = (d.responden) ? d.responden : '-',
            jabatan     = (d.jabatan) ? d.jabatan : '-',
            no_telp     = (d.no_telp) ? d.no_telp : '-',
            email       = '<?php echo $this->session->userdata('email'); ?>',
            alamat      = (d.alamat) ? d.alamat : '-',
            jumlah      = (d.jumlh_alumni) ? d.jumlh_alumni : '-';

        html = '<table id="detail" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;" width="100%">'
                    +'<tr>'
                        +'<td class="header text-left" colspan="6" width="50%">Instansi</td>'
                    +'</tr>'
                    +'<tr>'
                        +'<td class="content text-left" width="10%"><b>Pengisi Survey</b></td>'
                        +'<td class="content text-center" width="1%"><b>:</b></td>'
                        +'<td class="content text-left" width="20%">'+responden+'</td>'
                        +'<td class="content text-left" width="10%"><b>Jabatan</b></td>'
                        +'<td class="content text-center" width="1%"><b>:</b></td>'
                        +'<td class="content text-left" width="20%">'+jabatan+'</td>'
                    +'</tr>'
                    +'<tr>'
                        +'<td class="content text-left" width="10%"><b>No. Telpon</b></td>'
                        +'<td class="content text-center" width="1%"><b>:</b></td>'
                        +'<td class="content text-left" width="20%">'+no_telp+'</td>'
                        +'<td class="content text-left" width="10%"><b>Email</b></td>'
                        +'<td class="content text-center" width="1%"><b>:</b></td>'
                        +'<td class="content text-left" width="20%" colspan="4">'+email+'</td>'
                    +'</tr>'
                    +'<tr>'
                        +'<td class="content text-left" width="10%"><b>Alamat</b></td>'
                        +'<td class="content text-center" width="1%"><b>:</b></td>'
                        +'<td class="content text-left" width="20%">'+alamat+'</td>'
                        +'<td class="content text-left" width="10%"><b>Jumlah Alumni</b></td>'
                        +'<td class="content text-center" width="1%"><b>:</b></td>'
                        +'<td class="content text-left" width="20%" colspan="4"><b class="text-primary">'+jumlah+'</b></td>'
                    +'</tr>'
              +'</table>';

        return html;
    }

    $('.dataTable tbody').on('change', 'tr[role="row"] td #publish', function (event, state) {
        var is_publish, 
            user_id,
            data = table.row( $(this).parents('tr') ).data();

        user_id = data.user_id;

        if (event.target.checked) {
            is_publish = '1';
        } else {
            is_publish = '0';
        }

        $.ajax({
            url        : '<?php echo base_url('api/rest_instansi/publish') ?>',
            type       :'POST',
            data        : {'user_id': user_id, 'is_publish': is_publish},
            success: function(data) {
                // body...
                var row = JSON.parse(data);                
                var body = $("html, body");

                if ( row.success ) {
                    swal({
                            title: "Selamat!", 
                            text: row.message, 
                            type: "success",
                            timer: 800,
                            showConfirmButton: false
                    });
                    setTimeout(function () {
                        //table.ajax.reload();
                        body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
                    }, 1000);
                } else {
                    swal({
                            title: "Gagal!",  
                            text: row.message,  
                            type: "error",
                            timer: 800,
                            showConfirmButton: false
                    });
                    setTimeout(function () {
                        //table.ajax.reload();
                        body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
                    }, 1000);
                }

            }
        });
    });

    $('.dataTable tbody').on("click", "tr[role='row'] td #delete", function (event) {
        event.preventDefault();
        var data = table.row( $(this).parents('tr') ).data();

        swal({
            title: "Anda yakin ingin menghapus?",
            text: "Data yang berkaitan akan ikut terhapus!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#dc3545",
            confirmButtonText: "Yes, Hapus data!",
            cancelButtonText: "No, Batal!",
            closeOnConfirm: false,
            closeOnCancel: false,
            showLoaderOnConfirm: true,
        }, function (isConfirm) {
            if (isConfirm) {
                setTimeout(function () {
                    $.ajax({
                        url        : '<?php echo base_url("api/rest_instansi/delete") ?>',
                        type       : 'POST',
                        data       : { 'user_id': data.user_id}, 
                        success: function(data) {
                            // body..
                            var row = JSON.parse(data);                
                            var body = $("html, body");
                            
                            if ( row.success ) {
                                swal({
                                    title: "Selamat!",
                                    text: row.message,
                                    type: "success",
                                    timer: 800,
                                    showConfirmButton: false
                                });
                                setTimeout(function () {
                                    if ($(".select-all:checked").length) {
                                        $(".select-all:checked").click();
                                    }
                                    table.ajax.reload();
                                    body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
                                }, 1000);
                            } else {
                                swal({
                                        title: "Gagal!", 
                                        text: row.message, 
                                        type: "error",
                                        timer: 800,
                                        showConfirmButton: false
                                });
                                setTimeout(function () {
                                    if ($(".select-all:checked").length) {
                                        $(".select-all:checked").click();
                                    }
                                    table.ajax.reload();
                                    body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
                                }, 1000);
                            }
                        }
                    })        
                }, 2000);
            } else {
                swal({
                    title: "Batal", 
                    text: "Penghapusan data dibatalkan.", 
                    type: "error",
                    timer: 800,
                    showConfirmButton: false
                });
            }
        });
    });

    $('#min').datepicker({ format: 'yyyy-mm-dd', autoclose: true, onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
    $('#max').datepicker({ format: 'yyyy-mm-dd', autoclose: true, onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });

    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').change(function () {
        table.draw();
    });

    $('a#clear-filter').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */

        clearFilter();
    });

    function clearFilter() {
        var body = $("html, body");
                            
        if (category_value) { $('#name_category').multiselect('deselect', category_value, true); }
        $('input[name="search"]').val('');
        $('#min, #max').val('').datepicker('update');

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
    
    /* -- action filter -- */ 
    $('.dataTable thead').on('click', '.select-all', function() { 
        this.checked ? $(this).parents("table").find(".checkbox-tick").each(function() { 
            this.checked = !0 
        }) : $(this).parents("table").find(".checkbox-tick").each(function() { 
            this.checked = !1 
        }) 

        if ($(this).parents("table").find(".checkbox-tick:checked").length > 0) { 
            count = $(this).parents("table").find(".checkbox-tick:checked").length; 
            $('button#btnGroupDrop1').attr('disabled', false);
        } else {
            $('button#btnGroupDrop1').attr('disabled', true);
        } 
    }); 

    $('.dataTable tbody').on('change click', '.checkbox-tick', function() { 
        $(this).parents("table").find(".checkbox-tick:checked").length == $(this).parents("table").find(".checkbox-tick").length ? $(this).parents("table").find(".select-all").prop("checked", !0) : $(this).parents("table").find(".select-all").prop("checked", !1) 

        if ($(this).parents("table").find(".checkbox-tick:checked").length > 0) { 
            count = $(this).parents("table").find(".checkbox-tick:checked").length; 
            $('button#btnGroupDrop1').attr('disabled', false);
        } else {
            $('button#btnGroupDrop1').attr('disabled', true);
        } 
    });

    $('a#batch_delete').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        var checked     = $('.dataTable tbody tr[role="row"] td .checkbox-tick:checked'),
            data        = '',
            user_id     = [];

        checked.each(function(index, el) {
            data = table.row( $(this).parents('tr') ).data();
            
            user_id[index] = data.user_id;
        });


        swal({
            title: "Anda yakin ingin menghapus?",
            text: "Data yang berkaitan akan ikut terhapus!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#dc3545",
            confirmButtonText: "Yes, Hapus data!",
            cancelButtonText: "No, Batal!",
            closeOnConfirm: false,
            closeOnCancel: false,
            showLoaderOnConfirm: true,
        }, function (isConfirm) {
            if (isConfirm) {
                setTimeout(function () {
                    $.ajax({
                        url        : '<?php echo base_url("api/rest_instansi/batch_delete") ?>',
                        type       : 'POST',
                        data       : { 'user_id': user_id}, 
                        success: function(data) {
                            // body..
                            var row = JSON.parse(data);                
                            var body = $("html, body");

                            if ( row.success ) {
                                swal({
                                    title: "Selamat!",
                                    text: row.message,
                                    type: "success",
                                    timer: 800,
                                    showConfirmButton: false
                                });
                                setTimeout(function () {
                                    if ($(".select-all:checked").length) {
                                        $(".select-all:checked").click();
                                    }
                                    table.ajax.reload();
                                    body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
                                }, 1000);
                            } else {
                                swal({
                                        title: "Gagal!", 
                                        text: row.message, 
                                        type: "error",
                                        timer: 800,
                                        showConfirmButton: false
                                });
                                setTimeout(function () {
                                    body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
                                }, 1000);
                            }
                        }
                    })        
                }, 2000);
            } else {
                swal({
                    title: "Batal", 
                    text: "Penghapusan data dibatalkan.", 
                    type: "error",
                    timer: 800,
                    showConfirmButton: false
                });
            }
        });
    });

    $('a#batch_unpublish').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        var checked     = $('.dataTable tbody tr[role="row"] td .checkbox-tick:checked'),
            data        = '',
            user_id     = [];

        checked.each(function(index, el) {
            data = table.row( $(this).parents('tr') ).data();
            
            user_id[index] = data.user_id;
        });

        $.ajax({
            url        : '<?php echo base_url('api/rest_instansi/batch_publish') ?>',
            type       :'POST',
            data        : {'user_id': user_id},
            success: function(data) {
                // body...
                var row = JSON.parse(data);                
                var body = $("html, body");

                if ( row.success ) {
                    swal({
                            title: "Selamat!", 
                            text: row.message, 
                            type: "success",
                            timer: 800,
                            showConfirmButton: false
                    });
                    setTimeout(function () {
                        table.ajax.reload();
                        if ($(".select-all:checked").length) {
                            $(".select-all:checked").click();
                        }
                        body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
                    }, 1000);
                } else {
                    swal({
                            title: "Gagal!",  
                            text: row.message,  
                            type: "error",
                            timer: 800,
                            showConfirmButton: false
                    });
                    setTimeout(function () {
                        body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
                    }, 1000);
                }
            }
        });
    });

    $('a#export_item_all').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        location.href = '<?php echo base_url('api/rest_instansi/export_xls') ?>';
    });
</script>