<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/multi-select/css/multi-select.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/nouislider/nouislider.min.css" />

<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="<?php echo $base_assets_url;?>vendor/dropify/css/dropify.min.css">
<?php
if (!empty($id)) {
    # code...
    foreach ($json as $jsonData);
}
?>
            <form id="addAlumni" action="<?php echo base_url('api/rest_alumni/import_xls') ?>" method="post" enctype="multipart/form-data">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="form-group">
                                    <label>File</label>
                                    <input type="file" id="display" name="foto" data-default-file="" data-show-remove="true">
                                </div>
                                <div class="text-left">
                                    <p>Template import data alumni dapat di unduh <a href="<?php echo base_url('assets/import data alumni.xlsx')?>">disini</a></p>
                                </div>
                                <div class="text-right">
                                    <p class="demo-button text-right">
                                        <button type="submit" class="btn btn-outline-primary"><i class="fa fa-save"></i> <span>Upload</span></button>
                                        <button id="cancel" type="button" class="cancel btn btn-outline-danger"><i class="fa fa-close"></i> <span>Cancel</span></button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>


<!-- Javascript -->
<script src="<?php echo $base_assets_url?>bundles/libscripts.bundle.js"></script>    
<script src="<?php echo $base_assets_url?>bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo $base_assets_url?>vendor/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?php echo $base_assets_url?>vendor/jquery-validation/additional-methods.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?php echo $base_assets_url?>vendor/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->

<script src="<?php echo $base_assets_url?>vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js --> 
<script src="<?php echo $base_assets_url?>vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js -->
<script src="<?php echo $base_assets_url?>vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<!-- date range -->
<script src="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/moment.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js --> 
<script src="<?php echo $base_assets_url?>vendor/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js --> 

<script src="<?php echo $base_assets_url?>bundles/datatablescripts.bundle.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="<?php echo $base_assets_url;?>vendor/dropify/js/dropify.min.js"></script>
<script src="<?php echo $base_assets_url;?>vendor/ckeditor/ckeditor.js"></script> <!-- Ckeditor --> 

<script src="<?php echo $base_assets_url?>vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->
<script src="<?php echo $base_assets_url?>bundles/mainscripts.bundle.js"></script>

<script type="text/javascript">
    var drDisplay = $('#display').dropify();

    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'File size must be less than {0} Byte');

    $("#addAlumni").validate({
        ignore: [],
        debug: false,
        rules: {
            //ignore: "",
            foto: {
                extension: "xlsx",
                filesize: 200000 
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
                                text: "Data berhasil import!", 
                                type: "success",
                                timer: 800,
                                showConfirmButton: false
                        });
                        setTimeout(function () {
                            body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
                            location.href = row.base_url;
                        }, 800);
                    }
                }
            });
        }
    });

    $('#cancel').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        location.href = '<?php echo base_url('cms-admin/alumni') ?>';
    });
</script>