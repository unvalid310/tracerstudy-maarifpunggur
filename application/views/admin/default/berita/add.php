<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/multi-select/css/multi-select.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/nouislider/nouislider.min.css" />
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/dropify/css/dropify.min.css">

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

            <form id="addBerita" action="<?php echo base_url('api/rest_berita/save') ?>" method="post" enctype="multipart/form-data">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control col-lg-12 col-md-12 col-sm-12" name="judul" autocomplete="off" value="<?php echo $retVal = (!empty($jsonData->judul)) ? $jsonData->judul : null ; ?>" placeholder="Judul" required>
                                    <input type="hidden" name="page_id" value="<?php echo $retVal = (!empty($id)) ? $id : null ; ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>">
                                    <input type="hidden" name="is_type" value="1">
                                </div>
                                <div class="form-group">
                                    <textarea id="content" name="content"><?php echo $retVal = (!empty($jsonData->content)) ? $jsonData->content : null ; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" id="foto" name="foto" data-default-file="<?php echo $img = (!empty($jsonData->img_url)) ? base_url($jsonData->img_url) : null ?>" data-show-remove="false">
                                    <input type="hidden" name="current_path" value="<?php echo $path = (!empty($jsonData->path_img)) ? $jsonData->path_img : null ?>">
                                    <input type="hidden" name="current_img" value="<?php echo $img = (!empty($jsonData->img)) ? $jsonData->img : null ?>">
                                </div>
                                <div class="text-right">
                                    <p class="demo-button text-right">
                                        <button type="submit" class="btn btn-outline-primary"><i class="fa fa-save"></i> <span>Save</span></button>
                                        <button type="button" class="cancel btn btn-outline-danger"><i class="fa fa-close"></i> <span>Cancel</span></button>
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
<script src="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
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
    CKEDITOR.replace('content');
    CKEDITOR.config.height = 300;

    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].on('change', function ()
        {
            var editorName = $(this)[0].name;
            CKEDITOR.instances[editorName].updateElement();
        });
    }

    var drDisplay = $('#foto').dropify();

    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'File size must be less than {0}');

    $("#addBerita").validate({
        ignore: [],
        debug: false,
        rules: {
            //ignore: "",
            foto: {
                extension: "png|jpg|jpeg",
                filesize: 500000 
            },
            content: {
                required: true
            },
            judul: {
                required: true
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
            
            var URL = $("#addBerita").attr("action");
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
                            body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
                            location.href = row.base_url;
                        }, 800);
                    }
                }
            });
        }
    });
</script>