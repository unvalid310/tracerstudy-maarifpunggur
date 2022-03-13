<!doctype html>
<html lang="en">

<head>
<?php  
    //$setting = $this->tb_setting_m->get();
    //foreach ($setting as $value);
?>
<title>:: Tracer Study Ma'arif Punggur :: <?php echo $retVal = (isset($page_title)) ? $page_title : '' ; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Mplify Bootstrap 4.1.1 Admin Template">
<meta name="author" content="ThemeMakker, design by: ThemeMakker.com">

<link rel="icon" href="<?php echo $retVal = (!empty($value->favicon)) ? base_url('assets/attachment/images/logo/'.$value->favicon) : 'favicon.ico' ; ?>" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/animate-css/animate.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-steps/jquery.steps.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="<?php echo $base_assets_url;?>vendor/dropify/css/dropify.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo $base_assets_url?>css/main.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>css/color_skins.css">
<style type="text/css" media="screen">
    .img-fluid {
        max-width: 100%;
        height: auto;
    }
    .alert-img {
        position: absolute;
        top: -1.25rem;
        right: 2.5rem;
        max-width: var(--max-width);
        width: 100%;
        height: auto;
    }
    /* Firefox */
    input[type=number] {
      -moz-appearance:textfield;
    }
    .sweet-alert fieldset {
        border: none !important;
        position: relative;
    }
    .wizard .steps .number {
        font-size: 15px;
        display: none;
    }
    #icon h3 {
        font-size: 2.8rem;
    }
    #caption h6 {
        font-size: 0.8rem;
    }
    .wizard .content {
        min-height: 100px;
    }
    .wizard .content > .body {
        width: 100%;
        min-height: 860px;
        max-height: 2000px;
        padding: 15px;
        position: absolute;
    }
    .wizard .content .body.current {
        position: relative;
    }
    .wizard .content .body label.error {
        font-size: 11px;
        color: #de4848;
    }
    .pagination {
        display: flex;
        padding-left: 0;
        list-style: none !important;
        border-radius: .25rem;
    }
    .wizard td.actions {
        position: relative;
        width: auto;
        margin-top: 0 !important;
    }
    label.error {
        font-size: 11px;
        color: #de4848;
    }
    legend {
        display: block;
        width: auto !important; 
        max-width: none !important; 
        padding: 0 10px 0 10px !important;
        margin-bottom: .5rem;
        font-size: 1.2rem;
        line-height: inherit;
        color: inherit;
        white-space: normal;
    }
    fieldset {
        min-width: 0;
        padding: 10px !important;;
        margin: 0 0 20px 0 !important;;
        border: 1px solid #babdbf !important;;
    }
    ul.multiselect-container li, ul.multiselect-container li a, ul.multiselect-container li a label {
        cursor: pointer;
    }
    .bd-t {
        border-top: 1px solid #dee2e6;
    }
    .bd-b {
        border-top: 1px solid #dee2e6;
    }
    .multiselect_div>.btn-group .parsley-error {
        background-color: #fbf5f5;
        border-color: #efd8d8;
    }
    .dataTables_filter, .dataTables_info { display: none; }
    .dataTables_length { display: none; }
    .action .header {
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #444;
        padding: 0px !important;
        position: relative;
    }
    .action .header .header-dropdown {
        position: relative;
        top: 0px !important;
        right: 0 !important;
        list-style: none;
    }
    .action .header .header-dropdown li a.dropdown-toggle::after {
        border: none;
        content: '' !important;
        font-family: 'FontAwesome';
        vertical-align: text-top;
        width: 11px;
    }
    .action .header .header-dropdown li a {
        padding: 5px 20px;
        outline: none;
        color: #ffffff;
    }
    .action .header .dropdown a span {
        margin-left: 5px;
    }
    .action .header .header-dropdown li .btn {
        padding: 5px 10px;
        outline: none;
        color: #417bff;
    }
    .action .header .header-dropdown li .btn:hover {
        padding: 5px 10px;
        outline: none;
        color: #ffffff;
    }
    .action .header .header-dropdown li a.dropdown-toggle::after {
        border: none;
        content: none !important;
        font-family: 'FontAwesome';
        vertical-align: text-top;
        width: 11px;
    }
    a.btn-outline-primary {
        color: #417bff !important;        
    }
    a.btn-outline-primary:hover {
        color: #fff !important;        
    }
    .valign-top {
        vertical-align: top !important;
    }
    .valign-middle {
        vertical-align: middle !important;
    }
    b, strong {
        font-weight: 610 !important;
    }
    table th {
        font-size: 12px !important;
        text-transform: uppercase;
    }
    table tbody td {
        font-size: 12px !important;
    }
    table#DataTables_Table_0 {
        border-right: 0 !important;
        border-left: 0 !important;
    }
    table#DataTables_Table_0 thead tr th {
        border: 0 !important;
    }
    table#DataTables_Table_0 tfoot tr th {
        border-right: 0 !important;
    }
    table#DataTables_Table_0 tr td {
        border-right: 0 !important;
    }
    table .fancy-checkbox input[type="checkbox"]+span:before {
        width: 15px !important;
        height: 15px !important;
        margin: auto !important;
    }
    table .fancy-checkbox input[type="checkbox"]:checked+span:before {
        line-height: 12px !important;
        font-size: 8px !important;
    }
    td.avatarImg {
        width: 1% !important;
    }
    td.profile {
        width: 1%;
    }.dataTable tr th {
        vertical-align: middle;
    }
    .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
    .toggle.ios .toggle-handle { border-radius: 20px; }
    .toggle {
        width: 50px !important;
        height: 25px!important;
    }
    .toggle-on.btn-xs {
        font-size: 12px !important;
        padding-left: 10px !important;
        padding-right: 30px !important;
        padding-top: 3px !important;
    }
    .toggle-off.btn-xs {
        font-size: 12px !important;
        padding-left: 22px !important;
        padding-right: 10px !important;
        padding-top: 3px !important;
    }
    table.dataTable thead .sorting:before, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_desc:before, table.dataTable thead .sorting_asc_disabled:before, table.dataTable thead .sorting_desc_disabled:before {
        top: 1.7em !important;
        right: 1em;
        content: "\2191";
    }
    table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_desc_disabled:after {
        top: 1.7em !important;
        right: 0.5em;
        content: "\2193";
    }
    td.no {
        width: 1% !important;
        text-align: center;
    }
    td.order_id {
        width: 10% !important;
    }
    td.details-control {
        width: 1% !important;
        text-align: center;
    }
    td.details-control::before {
        color: #22af46;
        font-family: 'simple-Line-Icons';
        cursor: pointer;
        content: "\e095";
        font-size: 15px;
    }
    tr.shown td.details-control {
        width: 1% !important;
        text-align: center;
    }
    tr.shown td.details-control::before {
        color: #de4208;
        font-family: 'simple-Line-Icons';
        cursor: pointer;
        content: "\e082";
        font-size: 15px;
    }
    table#detail tbody tr td {
        font-size: 12px !important;
        border-bottom: 1px solid #dee2e6;
    }
    table#detail tbody tr td.header {
        padding: .75rem;
        background-color: #a2a2a2;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
    }
    table#detail tbody tr td.header {
        padding: .75rem;
        color: #fff;
        text-transform: uppercase;
    }
    table#detail thead tr th {
        font-size: 12px !important;
        border-top: 1px solid #dee2e6 !important;
    }
    .btn-xs {
        font-size: 10px;
        padding: 5px 10px;                                  
    }
</style>
</head>
<body class="theme-blue">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="<?php echo $base_assets_url?>images/logo-smkn1.png" width="48" height="48" alt="Mplify"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay" style="display: none;"></div>

<div id="wrapper">   
    <?php echo $sidebar ?>

    <div id="main-content" class="profilepage_2 blog-page">
    	<div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2 style="text-transform: capitalize;"><?php echo $breadcrumb; ?></h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('instansi') ?>"><i class="icon-home"></i></a></li>
                            <?php
                                echo $retVal = ($page_title == $breadcrumb) ? '<li class="breadcrumb-item active">'.$breadcrumb.'</li>' : '<li class="breadcrumb-item">'.$this->router->fetch_class().'</li><li class="breadcrumb-item active">'.$breadcrumb.'</li>' ;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        	
        	<?php echo $content ?>
    </div>
    
</div>

<!-- Modal Dialogs ========= --> 
<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Modal title</h4>
            </div>
            <form id="addAlumni" action="<?php echo base_url('api/rest_user/change_password') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                   <div class="row clearfix">
                        <?php
                            $id = $this->session->userdata('user_id');
                            $_query = $this->tb_user_m->get_by(array('user_id' => $id));
                            foreach ($_query as $jsonData);
                        ?>
                        <div class="col-5 col-md-5 col-sm-12">
                            <input type="file" id="display" name="foto" data-default-file="<?php echo $retVal = (!empty($id)) ? base_url($jsonData->path_img.$jsonData->img) : '' ; ?>" data-show-remove="false">
                            <input type="hidden" name="current_path" value="<?php echo $retVal = (!empty($id)) ? $jsonData->path_img : '' ; ?>">
                            <input type="hidden" name="current_img" value="<?php echo $retVal = (!empty($id)) ? $jsonData->img : '' ; ?>">
                        </div>
                        <div class="col-7 col-md-7 col-sm-12">
                            <div class="form-group">
                                <label>Password Baru</label>
                                <input type="password" id="password" class="form-control" name="password" autocomplete="off" value="" placeholder="Password"></input>
                                <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="password" id="confirm_password" class="form-control" name="confirm_password" autocomplete="off" value="" placeholder="Konfirmasi Password"></input>
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


<script src="<?php echo $base_assets_url?>vendor/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?php echo $base_assets_url?>vendor/jquery-validation/additional-methods.js"></script>
<script src="<?php echo $base_assets_url?>vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->
<script src="<?php echo $base_assets_url;?>vendor/dropify/js/dropify.min.js"></script>
<script type="text/javascript">
    var drDisplay = $('#display').dropify();

    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'File size must be less than {0}');

    $("#addAlumni").validate({
        ignore: [],
        debug: false,
        rules: {
            //ignore: "",
            foto: {
                extension: "png|jpg|jpeg",
                filesize: 500000 
            },
            password: {
                minlength: 6,
                maxlength: 20
            },
            confirm_password: {
                equalTo: "#password"
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
            $(element).parents('.inputGroup').append(error);
        },
        submitHandler: function(form, e) {
            e.preventDefault();
            
            var URL = $("#addAlumni").attr("action");
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
                                text: "Data berhasil diubah!", 
                                type: "success",
                                timer: 800,
                                showConfirmButton: false
                        });
                        setTimeout(function () {
                            body.stop().animate({scrollTop: 0}, 800, 'swing');
                            location.href = '<?php echo base_url('alumni').'/'.$this->router->fetch_class() ?>';
                        }, 800);
                        $('#defaultModal').modal('toggle');
                    }
                }
            });
        }
    });
</script>
</body>
</html>