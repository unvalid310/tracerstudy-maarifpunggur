<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/multi-select/css/multi-select.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/sweetalert/sweetalert.css"/>

<div class="mobile-logo">
    <a href="<?php echo base_url()?>">img src="<?php echo $base_assets_url?>images/logo tracer .png"></a>
</div>
<div class="auth-right">
    <div class="right-top text-center">
        <a href="<?php echo base_url()?>">
            <img src="<?php echo $base_assets_url?>images/logo-tracer-maarif.png">
        </a>
    </div>
    <div class="card">
        <div class="header">
            <p class="lead">Registrasi Instansi</p>
        </div>
        <div class="body">
            <form id="form-regsitrasi" class="form-auth-small" action="<?php echo base_url('api/rest_auth/signup_instansi')?>" method="post" enctype="multipart/form-data">
                <div class="form-group text-left">
                    <label for="signin-email" class="control-label sr-only">Nama Instansi</label>
                    <input type="text" class="form-control input-stripborder" id="realname" name="realname" value="" placeholder="Nama instansi" required>
                </div>
                <div class="form-group text-left">
                    <label for="signin-email" class="control-label sr-only">Email</label>
                    <input type="email" class="form-control input-stripborder" id="email" name="email" value="" placeholder="Email" required>
                </div>
                <div class="form-group text-left">
                    <label for="signin-password" class="control-label sr-only">Password</label>
                    <input type="password" class="form-control input-stripborder" id="password" name="password" value="" placeholder="Password" required>
                </div>
                <div class="form-group clearfix m-b-40 text-left">
                    <div class="multiselect_div">
                        <select id="id_bidang" name="id_bidang" class="required form-control multiselect multiselect-custom" multiple="multiple" readonly>
                            <option value="1">Perguruan Tinggi</option>
                            <option value="2">Perusahaan / Instansi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group clearfix text-left">
                    <label class="fancy-checkbox element-left">
                        <input type="checkbox" name="policy" class="policy">
                        <span>Saya telah menerima kebijakan privasi</span>
                    </label>                                
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
                <div class="bottom">
                    <span>Anda sudah memiliki akun? <a href="<?php echo base_url('auth') ?>">Login</a></span>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?php echo $base_assets_url?>bundles/libscripts.bundle.js"></script>    
<script src="<?php echo $base_assets_url?>bundles/vendorscripts.bundle.js"></script>
<!-- Multiselect -->
<script src="<?php echo $base_assets_url?>vendor/multi-select/js/jquery.multi-select.js"></script>
<script src="<?php echo $base_assets_url?>vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>

<script src="<?php echo $base_assets_url?>vendor/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?php echo $base_assets_url?>vendor/jquery-validation/additional-methods.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?php echo $base_assets_url?>vendor/sweetalert/sweetalert.min.js"></script> 
<script type="text/javascript">
    $("#form-regsitrasi").validate({
        ignore: ':hidden:not(".multiselect, .policy")',
        rules: {
            id_bidang: {
                required: true
            },
            policy: {
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
            $(element).parents('.inputGroup').append(error);
        },
        submitHandler: function(form, e) {
            e.preventDefault();
            var URL = $("#form-regsitrasi").attr("action");
            
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
                            body.stop().animate({scrollTop:jQuery(window).height()}, 800, 'swing');
                            location.href = row.base_url;
                        }, 800);
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
                        }, 800);
                    }
                }
            });
        }
    });
    $('#id_bidang').multiselect({
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        maxHeight: 200,
        filterPlaceholder: 'Search for something...',
        buttonText: function(options, select) {
            if (options.length === 0) {
                return 'Instansi';
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
                $('#id_bidang').valid();
                $('.multiselect_div .multiselect-container').removeClass('show');
            }else{
                $('.multiselect_div .multiselect-container').removeClass('show');
            }

            $('#id_bidang option').each(function() {
                if ($(this).val() !== option.val()) {
                    values.push($(this).val());
                }
            });
                                
            $('#id_bidang').multiselect('deselect', values);
        }
    });

</script>