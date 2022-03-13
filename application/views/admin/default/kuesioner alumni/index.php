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
                                        <button type="button" id="create" class="btn btn-outline-primary"><i class="icon-plus m-r-10"></i> <span>Tambah pertanyaan</span></button>
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
                                                <th class="text-center" width="10%">Kode</th>
                                                <th class="text-left" width="15%">Kategori</th>
                                                <th class="text-left" width="30%">Pertanyaan</th>
                                                <th class="text-left" width="15%">Tipe</th>
                                                <th class="text-center" width="10%">Publish</th>
                                                <th class="text-center" width="10%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center" width="1%"></th>
                                                <th class="text-center" width="10%">Kode</th>
                                                <th class="text-left" width="15%">Kategori</th>
                                                <th class="text-left" width="30%">Pertanyaan</th>
                                                <th class="text-left" width="15%">Tipe</th>
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
            <form id="addjurusan" class="p-4" action="<?php echo base_url('api/rest_kuesioner/save') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body"> 
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Kode</label>
                                <input type="text" name="kode" value="" placeholder="Kode" class="form-control col-lg-3 col-md-13 col-sm-12" autocomplete="off" required>
                                <input type="hidden" name="id">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Pertanyaan</label>
                                <input type="text" name="pertanyaan" value="" placeholder="Pertanyaan" class="form-control col-lg-12 col-md-12 col-sm-12" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" name="deskripsi" value="" placeholder="Deskripsi" class="form-control col-lg-6 col-md-6 col-sm-12" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control col-lg-6 col-md-6 col-sm-12" name="id_kategori" required>
                                    <option value='' hidden selected>Pilih Kategori</option>
                                    <?php
                                        $query = $this->tb_kues_kategori_m->get_by(array('is_publish' => '1', 'type' => '1'));
                                		if (count($query) > 1) {
                                			foreach ($query as $key => $value) {
                                				# code...
                                	?>
                                	<option value='<?php echo $value->id?>'><?php echo $value->kategori?></option>
                                	<?php
                                			}
                                		}
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control" name="type" required>
                                    <option value='' hidden selected>Pilih Type</option>
                                    <option value='input'>Text field</option>
                                    <option value='select'>Select Box</option>
                                    <option value='radio'>Radio Button</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Form group</label>
                                <input type="text" name="form_group" value="" placeholder="Form group" class="form-control col-lg-6 col-md-6 col-sm-12" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    
                    <div id="select_input" style="display: none">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control" name="attr_type" required>
                                        <option value='' hidden selected>Pilih Type</option>
                                        <option value='text'>Text</option>
                                        <option value='number'>Number</option>
                                        <option value='email'>Email</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12" style="margin: auto">
                                <div class="form-group">
                                    <label class="fancy-checkbox col-lg-12 p-l-0 p-r-0" style="margin: auto">
                                        <input type="checkbox" name="attr_required" value="true"><span>Set required</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12" style="margin: auto">
                                <div class="form-group">
                                    <label class="fancy-checkbox col-lg-12 p-l-0 p-r-0" style="margin: auto">
                                        <input type="checkbox" name="set_main" value="true"><span>Set main</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12" style="margin: auto">
                                <div class="form-group">
                                    <label class="fancy-checkbox col-lg-12 p-l-0 p-r-0" style="margin: auto">
                                        <input type="checkbox" name="display" value="block" checked><span>Set visible</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="select_select" style="display: none">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label class="fancy-checkbox col-lg-12 p-l-0 p-r-0" style="margin: auto">
                                        <input type="checkbox" name="attr_required" value="true"><span>Set required</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12" style="margin: auto">
                                <div class="form-group">
                                    <label class="fancy-checkbox col-lg-12 p-l-0 p-r-0" style="margin: auto">
                                        <input type="checkbox" name="set_main" value="true"><span>Set main</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12" style="margin: auto">
                                <div class="form-group">
                                    <label class="fancy-checkbox col-lg-12 p-l-0 p-r-0" style="margin: auto">
                                        <input type="checkbox" name="display" value="block" checked><span>Set visible</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12" id="add_value">
                                <div class="form-group" style="display: flex">
                                    <input type="text" class="form-control col-lg-8 col-md-8 col-sm-12" name="value[]" placeholder="Value" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <button type="button" id="btn-add-value" class="btn btn-primary"><i class="fa fa-plus"></i> Add value</button>
                                </div>
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
            "url": "<?php echo base_url("api/rest_kuesioner/getKuesAlumni") ?>",
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
                data        : "id",
                searchable  : false,
                orderable   : false,
                targets     : 0
            },
            {
                class   :"text-left",
                width   : '10%',
                data    : {"data": "kode"},
                render  : function(data, type, full, meta){
                    return data.kode;
                }
            },
            {
                class   :"text-left",
                width   : '15%',
                data    : { "data": "kategori" },
                orderable   : true,
                render  : function (data, type, full, meta){
                    return data.kategori;
                }
            },
            {
                class   :"text-left",
                width   : '30%',
                data    : { "data": "pertanyaan" },
                orderable   : true,
                render  : function (data, type, full, meta){
                    return data.pertanyaan;
                }
            },
            {
                class   :"text-center",
                width   : '10%',
                data    : { "data": "type" },
                orderable   : true,
                render  : function (data, type, full, meta){
                    var type;
                    if (data.type == 'input') {
                        type = 'Input Box';
                    } 
                    else if (data.type == 'select') {
                        type = 'Select Box';
                    } else {
                        type = 'Radio Button';
                    }
                    
                    return type;
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
            id,
            data = table.row( $(this).parents('tr') ).data();

        id = data.id;

        if (event.target.checked) {
            is_publish = '1';
        } else {
            is_publish = '0';
        }

        $.ajax({
            url        : '<?php echo base_url('api/rest_kuesioner/publish') ?>',
            type       :'POST',
            data        : {'id': id, 'is_publish': is_publish},
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
                        url        : '<?php echo base_url("api/rest_kuesioner/delete") ?>',
                        type       : 'POST',
                        data       : { 'id': data.id}, 
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

        $('input[name="id"]').val(data.id);
        $('input[name="pertanyaan"]').val(data.pertanyaan);
        $('input[name="deskripsi"]').val(data.deskripsi);
        $('input[name="kode"]').val(data.kode);
        $('select[name="id_kategori"]').val(data.id_kategori);
        $('select[name="type"]').val(data.type);
        var value = data.value,
            attribut = data.atribut,
            html = '';
        
        if(data.type == 'select' || data.type == 'radio') {
            $('#select_select').css('display', 'block');
            if (attribut['required']) {
                $('input[name="attr_required"]').prop('checked', true);
            } else {
                $('input[name="attr_required"]').prop('checked', false);
            }
            
            if (data.set_main) {
                $('input[name="set_main"]').prop('checked', true);
            } else {
                $('input[name="set_main"]').prop('checked', false);
            }
            
            if (data.display == "block") {
                $('input[name="display"]').prop('checked', true);
            } else {
                $('input[name="display"]').prop('checked', false);
            }
            
            $.each(data.value, function(key, val){
                html += '<div class="form-group" style="display: flex">'
                    +'<input type="text" class="form-control col-lg-8 col-md-8 col-sm-12" name="value[]" placeholder="Value" value="'+value[key]+'">'
                    +'<button type="button" id="btn-remove-value" class="btn btn-danger" style="margin-left: 10px"><i class="fa fa-close"></i></button>'
                    +'</div>';
            })
            $('#add_value').html(html);
        } else {
            $('#select_select').css('display', 'none');
        }
        
        if(data.type == 'input') {
            $('#select_input').css('display', 'block');
            if (attribut['required']) {
                $('input[name="attr_required"]').prop('checked', true);
            } else {
                $('input[name="attr_required"]').prop('checked', false);
            }
            
            if (data.set_main) {
                $('input[name="set_main"]').prop('checked', true);
            } else {
                $('input[name="set_main"]').prop('checked', false);
            }
            
            if (data.display == "block") {
                $('input[name="display"]').prop('checked', true);
            } else {
                $('input[name="display"]').prop('checked', false);
            }
            
            $('select[name="attr_type"]').val(attribut.type);
            $.each(data.value, function(key, val){
                html += '<div class="form-group" style="display: flex">'
                    +'<input type="text" class="form-control col-lg-8 col-md-8 col-sm-12" name="value[]" placeholder="Value" value="'+value[key]+'">'
                    +'<button type="button" id="btn-remove-value" class="btn btn-danger" style="margin-left: 10px"><i class="fa fa-close"></i></button>'
                    +'</div>';
            })
            $('#add_value').html(html);
        } else {
            $('#select_input').css('display', 'none');
        }
          
        $('input[name="form_group"]').val(data.form_group);

        $('.modal .title').text('Update Pertanyaan');
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
            id     = [];

        checked.each(function(index, el) {
            data = table.row( $(this).parents('tr') ).data();
            
            id[index] = data.id;
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
                        url        : '<?php echo base_url("api/rest_kuest_kategori/batch_delete") ?>',
                        type       : 'POST',
                        data       : { 'id': id}, 
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
            id     = [];

        checked.each(function(index, el) {
            data = table.row( $(this).parents('tr') ).data();
            
            id[index] = data.id;
        });

        $.ajax({
            url        : '<?php echo base_url('api/rest_kuest_kategori/batch_publish') ?>',
            type       :'POST',
            data        : {'id': id},
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
        $('.modal .title').text('Tambah Pertanyaan');
        $('button[type="submit"]').text('SAVE');

        $('#largeModal').modal('toggle');
    });
    
    $('select[name="type"]').on('change', function(event) {
        event.preventDefault();
        /* Act on the event */
        var selected = $(this).val();
        
        if (selected == 'input') {
            $('#select_input').css('display', 'block');
            $('#select_select').css('display', 'none');
        }
        else if (selected == 'select' || selected == 'radio') {
            $('#select_input').css('display', 'none');
            $('#select_select').css('display', 'block');
        }
        else {
            $('#select_input').css('display', 'none');
        }
    })
    
    $('#btn-add-value').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        var html;
        
        html ='<div class="form-group" style="display: flex" id="group_append">'
                +'<input type="text" class="form-control col-lg-8 col-md-8 col-sm-12" name="value[]" placeholder="Value" required>'
                +'<button type="button" id="btn-remove-value" class="btn btn-danger" style="margin-left: 10px"><i class="fa fa-close"></i></button>'
            +'</div>';
        
        $("#add_value").append(html);
    })
    
    $('body').on('click', '#btn-remove-value', function(event) {
        event.preventDefault();
        /* Act on the event */
        $(this).parent('.form-group').remove();
    })

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
                    console.log(data);
                    
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
        $('input[name="id"]').val('');
        $('#select_select').css('display', 'none');
        $("#addjurusan")[0].reset();
        addjurusan.resetForm();
    })
</script>