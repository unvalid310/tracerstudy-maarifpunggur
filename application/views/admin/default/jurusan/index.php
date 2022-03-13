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
                                        <button type="button" id="create" class="btn btn-outline-primary"><i class="icon-plus m-r-10"></i> <span>Tambah jurusan</span></button>
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

                        <div class="body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 text-left">
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
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <table class="table table-hover table-bordered dataTable table-custom c_list" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="1%"><label class="fancy-checkbox"><input class="select-all" type="checkbox" name="checkbox"><span></span></label>
                                                </th>
                                                <th class="text-center" width="15%">Kode</th>
                                                <th class="text-left" width="64%">Jurusan</th>
                                                <th class="text-center" width="10%">Publish</th>
                                                <th class="text-center" width="10%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center" width="1%"></th>
                                                <th class="text-center" width="15%">Kode</th>
                                                <th class="text-left" width="30%">Jurusan</th>
                                                <th class="text-center" width="10%">Publish</th>
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

<script src="<?php echo $base_assets_url?>vendor/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?php echo $base_assets_url?>vendor/jquery-validation/additional-methods.js"></script> <!-- Jquery Validation Plugin Css -->

<!-- Action Modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Modal title</h4>
            </div>
            <form id="addjurusan" class="p-4" action="<?php echo base_url('api/rest_jurusan/save') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body"> 
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Kode Jurusan</label>
                                <input type="tel" name="kode_jurusan" value="" placeholder="Kode" class="form-control col-lg-3 col-md-3 col-sm-12" autocomplete="off" required>
                                <input type="hidden" name="jurusan_id" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control col-lg-12 col-md-12 col-sm-12" name="nama_jurusan" autocomplete="off" value="" placeholder="jurusan" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    var count = 0;

    var table = $('.dataTable').DataTable({
        "ajax": {
            "url": "<?php echo base_url("api/rest_jurusan") ?>",
            "type": "GET"
        },
        searching: true,
        paging: true,
        bInfo: true,
        autoWidth: false,
        order: [[1, 'asc']],
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
                class   :"text-center",
                width   : '15%',
                data    : {"data": "kode_jurusan"},
                render  : function(data, type, full, meta){
                    return '<b>'+data.kode_jurusan+'</b>';
                }
            },
            {
                class   :"text-left",
                width   : '64%',
                data    : { "data": "nama_jurusan" },
                orderable   : true,
                render  : function (data, type, full, meta){
                    return data.nama_jurusan;
                }
            },
            {
                class       :"text-center action",
                width       : '10%',
                data        : { "data": "is_publish" },
                searchable  : false,
                orderable   : false,
                targets     : 3,
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
                targets     : 4,
                render  : function (data, type, full, meta){
                    return '<button type="button" id="delete" title="Delete" class="btn btn-danger btn-xs" style="margin-right: 5px !important;"><i class="icon-trash"></i></button><button type="button" id="update" class="btn btn-primary btn-xs"><i class="icon-note"></i></button>';
                }
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
            //cell.innerHTML = i+1;
            cell.innerHTML = '<label class="fancy-checkbox"><input class="checkbox-tick" type="checkbox" name="checkbox"><span></span></label>'
        } );
    } ).draw();

    $('input[name="search"]').on( 'keyup', function () {
        table.search($('input[name="search"]').val()).draw();
    });

    $('.dataTable tbody').on('change', 'tr[role="row"] td #publish', function (event, state) {
        var is_publish, 
            jurusan_id,
            data = table.row( $(this).parents('tr') ).data();

        jurusan_id = data.jurusan_id;

        if (event.target.checked) {
            is_publish = '1';
        } else {
            is_publish = '0';
        }

        $.ajax({
            url        : '<?php echo base_url('api/rest_jurusan/publish') ?>',
            type       :'POST',
            data        : {'jurusan_id': jurusan_id, 'is_publish': is_publish},
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
                        url        : '<?php echo base_url("api/rest_jurusan/delete") ?>',
                        type       : 'POST',
                        data       : { 'jurusan_id': data.jurusan_id}, 
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

    $('.dataTable tbody').on("click", "tr[role='row'] td #update", function (event) {
        event.preventDefault();
        var data = table.row( $(this).parents('tr') ).data();

        $('input[name="jurusan_id"]').val(data.jurusan_id);
        $('input[name="kode_jurusan"]').val(data.kode_jurusan);
        $('input[name="nama_jurusan"]').val(data.nama_jurusan);
        $('input[name="kode_jurusan"]').attr('readonly', true);

        $('.modal .title').text('Update Jurusan');
        $('button[type="submit"]').text('SAVE CHANGES');

        $('#largeModal').modal('toggle');

    });

    $('#refresh').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */

        table.ajax.reload();
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
            jurusan_id     = [];

        checked.each(function(index, el) {
            data = table.row( $(this).parents('tr') ).data();
            
            jurusan_id[index] = data.jurusan_id;
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
                        url        : '<?php echo base_url("api/rest_jurusan/batch_delete") ?>',
                        type       : 'POST',
                        data       : { 'jurusan_id': jurusan_id}, 
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
            jurusan_id     = [];

        checked.each(function(index, el) {
            data = table.row( $(this).parents('tr') ).data();
            
            jurusan_id[index] = data.jurusan_id;
        });

        $.ajax({
            url        : '<?php echo base_url('api/rest_jurusan/batch_publish') ?>',
            type       :'POST',
            data        : {'jurusan_id': jurusan_id},
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

    $('button#create').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        $('.modal .title').text('Tambah Jurusan');
        $('button[type="submit"]').text('SAVE');

        $('#largeModal').modal('toggle');
    });

    var addjurusan = $("#addjurusan").validate({
        ignore: ':hidden:not(".multiselect"), :hidden:not("#name_category")',
        rules: {
            ignore: "",
        },
        messages: {
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
        },
        submitHandler: function(form, e) {
            e.preventDefault();
            var URL = $("#addjurusan").attr("action");

            $.ajax({
                url        :URL,
                type       :'POST',
                data       :new FormData(form), //this is formData
                processData:false,
                contentType:false,
                cache      :false,
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
                            body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
                            $('#largeModal').modal('toggle');
                        }, 1000);
                    }
                }
            });
        }
    });

    $('#largeModal').on('hidden.bs.modal', function () {
        $('input[name="kode_jurusan"]').attr('readonly', false);
        $('input[name="jurusan_id"]').val('');
        $("#addjurusan")[0].reset();
        addjurusan.resetForm();
    })
</script>