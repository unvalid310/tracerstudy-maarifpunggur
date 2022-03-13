<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-toggle/bootstrap-toggle.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/multi-select/css/multi-select.css">
<link rel="stylesheet" href="<?php echo $base_assets_url;?>vendor/dropify/css/dropify.min.css">

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
                                        <button type="button" id="create" class="btn btn-md btn-outline-primary">
                                            <i class="fa fa-plus m-r-10"></i>Tambah Admin
                                        </button>
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
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <table class="table table-hover table-bordered dataTable table-custom c_list" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="1%"><label class="fancy-checkbox"><input class="select-all" type="checkbox" name="checkbox"><span></span></label>
                                                </th>
                                                <th class="text-left" colspan="2" width="25%">User</th>
                                                <th class="text-center" width="40%">Password</th>
                                                <th class="text-center" width="1%">Publish</th>
                                                <th class="text-center" width="1%"></th>
                                                <th class="text-center" width="1%"></th>
                                                <th class="text-center" width="1%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center" width="1%"></th>
                                                <th class="text-left" colspan="2" width="25%">User</th>
                                                <th class="text-center" width="40%">Password</th>
                                                <th class="text-center" width="1%">Publish</th>
                                                <th class="text-center" width="1%"></th>
                                                <th class="text-center" width="1%"></th>
                                                <th class="text-center" width="1%"></th>
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

<!-- Action Modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Account Settings</h4>
            </div>
            <form id="create_admin" action="<?php echo base_url('api/rest_admin/save') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                   <div class="row clearfix">
                        <div class="col-5 col-md-5 col-sm-12">
                            <input type="file" id="foto" name="foto" data-default-file="<?php echo base_url('assets/admin/default/images/avatar.jpg') ?>" data-show-remove="false">
                            <input type="hidden" name="current_path" value="">
                            <input type="hidden" name="current_img" value="">
                            <input type="hidden" name="user_id" value="">
                        </div>
                        <div class="col-7 col-md-7 col-sm-12">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" id="nama" class="form-control" name="realname" autocomplete="off" placeholder="Username" required></input>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" id="email" class="form-control" name="email" autocomplete="off" placeholder="Email" required></input>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password" class="form-control" name="password" autocomplete="off" placeholder="Password" required></input>
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
<script src="<?php echo $base_assets_url?>vendor/jquery-validation/additional-methods.js"></script>
<script src="<?php echo $base_assets_url;?>vendor/dropify/js/dropify.min.js"></script>
<script type="text/javascript">
    var table = $('.dataTable').DataTable({
        "ajax": {
            "url": "<?php echo base_url("api/rest_admin") ?>",
            "type": "GET"
        },
        searching: true,
        paging: true,
        bInfo: true,
        autoWidth: false,
        order: [[8, 'desc']],
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
                data    : {"data": "email", "data": "realname"},
                render  : function(data, type, full, meta){
                    return '<b>'+data.realname+'</b></br><small>'+data.email+'</small>';
                }
            },
            {
                class   :"text-center",
                width   : '30%',
                data    : { "data": "password" },
                orderable   : true,
                render  : function (data, type, full, meta){
                    return data.password;
                }
            },
            {
                class       :"text-center action",
                width       : '1%',
                data        : { "data": "is_publish" },
                searchable  : false,
                orderable   : false,
                targets     : 4,
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
                width       : '1%',
                data        : { "data": "is_delete" },
                searchable  : false,
                orderable   : false,
                targets     : 5,
                render  : function (data, type, full, meta){
                    return '<button type="button" id="delete" title="Delete" class="btn btn-danger btn-xs" style="margin-right: 5px !important;"><i class="icon-trash"></i></button>';
                }
            },
            {
                class       :"text-center action",
                width       : '1%',
                data        : { "data": "is_delete" },
                searchable  : false,
                orderable   : false,
                targets     : 5,
                render  : function (data, type, full, meta){
                    return '<button type="button" id="update" title="Update Password" class="btn btn-primary btn-xs" style="margin-right: 5px !important;"><i class="icon-note"></i></button>';
                }
            },
            {
                class       :"text-center action",
                width       : '1%',
                data        : { "data": "is_delete" },
                searchable  : false,
                orderable   : false,
                targets     : 7,
                render  : function (data, type, full, meta){
                    return '<button type="button" id="reset" title="Reset Password" class="btn btn-info btn-xs" style="margin-right: 5px !important;"><i class="icon-lock-open"></i></button>';
                }
            },
            {
                data        : "create_on",
                searchable  : true,
                orderable   : true,
                targets     : 8,
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
            url        : '<?php echo base_url('api/rest_admin/publish') ?>',
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
                        url        : '<?php echo base_url("api/rest_admin/delete") ?>',
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

    $('.dataTable tbody').on("click", "tr[role='row'] td #reset", function (event) {
        event.preventDefault();
        var data = table.row( $(this).parents('tr') ).data();
        var password = makeid();

        swal({
            title: "Anda ingin reset password?",
            text: "simpan code berikut <b>'"+password+"'</b> untuk dijadikan sebagai password anda!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#dc3545",
            confirmButtonText: "Yes, Reset password!",
            cancelButtonText: "No, Batal!",
            closeOnConfirm: false,
            closeOnCancel: false,
            showLoaderOnConfirm: true,
        }, function (isConfirm) {
            if (isConfirm) {
                setTimeout(function () {
                    $.ajax({
                        url        : '<?php echo base_url("api/rest_admin/reset_password") ?>',
                        type       : 'POST',
                        data       : { 'user_id': data.user_id, 'password': password}, 
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
                    text: "Password batal diubah.", 
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
        $('.modal .title').text('Update admin');
        $('button[type="submit"]').text('SAVE CHANGES');

        $('input[name="realname"]').attr('readonly', true);
        $('input[name="realname"]').val(data.realname);
        $('input[name="email"]').val(data.email);
        $('input[name="password"]').removeAttr('required');
        $('input[name="user_id"]').val(data.user_id);
        $('input[name="foto"]').attr('data-default-file', '<?php echo base_url()?>'+data.img_url);
        $('.dropify-preview .dropify-render img').attr('src', '<?php echo base_url()?>'+data.img_url);
        $('input[name="current_path"]').val(data.path_img);
        $('input[name="current_img"]').val(data.img);

        $('#largeModal').modal('toggle');
    });

    function clearFilter() {
        setTimeout(function () {
            table
            .search( '' )
            .columns().search( '' )
            .draw();
            body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
        }, 1000);
    }

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
                        url        : '<?php echo base_url("api/rest_admin/batch_delete") ?>',
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
            url        : '<?php echo base_url('api/rest_admin/batch_publish') ?>',
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
        location.href = '<?php echo base_url('api/rest_admin/export_xls') ?>';
    });

    function makeid() {
        var result           = '';
        var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for ( var i = 0; i < 6; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }

    var create_admin = $("#create_admin").validate({
        rules: {
            ignore: "",
            password: {
                minlength: 6,
                maxlength : 20
            }
        },
        messages: {
            realname: {
                remote: 'Username already exists'
            },
            email: {
                remote: 'Email already exists'
            }
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
            var URL = $("#create_admin").attr("action");
            
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
                                text: "Data berhasil disimpan!", 
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

    $('button#create').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        $('.modal .title').text('Tambah admin');
        $('button[type="submit"]').text('SAVE');
        $('[name="realname"]').rules('add',{
            required: true, 
            maxlength: 20,
            remote: {
                url: "<?php echo base_url('api/rest_admin/cek_realname') ?>",
                type: "post",
                data: {
                    realname: function() {
                        return $( "input[name='realname']" ).val();
                    }
                },
                dataFilter: function(data) {
                    if (data.length > 0) {
                        return false;
                    } else {
                        return true;
                    }
                }
            }
        });
        $('[name="email"]').rules('add',{
            required: true, 
            remote: {
                url: "<?php echo base_url('api/rest_admin/cek_email') ?>",
                type: "post",
                data: {
                    email: function() {
                        return $( "input[name='email']" ).val();
                    }
                },
                dataFilter: function(data) {
                    if (data.length > 0) {
                        return false;
                    } else {
                        return true;
                    }
                }
            }
        });

        $('#largeModal').modal('toggle');
    });

    $('#largeModal').on('hidden.bs.modal', function () {
        $("#create_admin")[0].reset();
        create_admin.resetForm();
        $('#create_admin input').each(function () { $(this).removeClass('parsley-error'); });
        $('input[name="realname"]').attr('readonly', false);
        $('[name="realname"]').rules('remove', 'required maxlength remote');
        $('[name="email"]').rules('remove', 'required remote');
        $('input[name="email"]').val('');
        $('input[name="password"]').val('');
        $('input[name="user_id"]').val('');
        $('input[name="foto"]').attr('data-default-file', '<?php echo base_url()?>assets/admin/default/images/avatar.jpg');
        $('.dropify-preview .dropify-render img').attr('src', '<?php echo base_url()?>assets/admin/default/images/avatar.jpg');
        $('input[name="current_path"]').val('');
        $('input[name="current_img"]').val('');
    })

    var drDisplay = $('#foto').dropify();
</script>