<!doctype html>
<html lang="en">

<head>
<?php  
    //$setting = $this->tb_setting_m->get();
    //foreach ($setting as $value);
?>
<title>:: <?php echo $retVal = (!empty($value->title)) ? $value->title : 'Site Title' ; ?> :: <?php echo $retVal = (isset($page_title)) ? $page_title : '' ; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Mplify Bootstrap 4.1.1 Admin Template">
<meta name="author" content="ThemeMakker, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/animate-css/animate.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/parsleyjs/css/parsley.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/sweetalert/sweetalert.css"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo $base_assets_url?>css/main.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>css/form-wizard.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>css/color_skins.css">
</head>

<style type="text/css" media="screen">
    #main-wizard {
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        width: calc(100% - 220px);
        position: relative;
        margin: auto;
        padding: 0 10px;
    }
    label.error {
        font-size: 11px;
        color: #de4848;
    }
    #middle {
        margin: auto !important;
    }
</style>

<body class="theme-blue" >

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="<?php echo $base_assets_url?>images/thumbnail.png" width="48" height="48" alt="Mplify"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay" style="display: none;"></div>

<div id="wrapper">
    <div id="main-wizard">
        <div class="container-fluid m-t-60">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body wizard-content">
                            <form id="example-form" class="tab-wizard wizard-circle wizard clearfix" action="<?php echo base_url('api/rest_kuesioner_alumni/save') ?>" method="post" enctype="multipart/form-data">
                                <?php
                                    $query = $this->tb_kues_kategori_m->get_by(array('is_tap' => '1', 'is_publish' => '1'));
                                    if(count($query) > 0) {
                                        foreach($query as $value) {
                                    ?>
                                    <h6><?php echo $value->kategori?></h6>
                                    <section style="padding: 40px">
                                        <?php
                                            if(!empty($value->deskripsi)){
                                        ?>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-12">
                                                <hr>
                                                <h5><b><?php echo $value->deskripsi?></b></h5>
                                                <hr>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                            
                                            $query = $this->tb_kues_m->get_by(array('id_kategori' => $value->id, 'is_publish' => '1'));
                                            if(count($query) > 0) {
                                                foreach($query as $field) {
                                                    $this->form_kuesioner->field($field->kode, $field->pertanyaan, $field->type, unserialize($field->atribut), unserialize($field->value), $field->form_group, $field->display);
                                                }
                                            }
                                        ?>
                                    </section>
                                    <?php
                                        }
                                    }
                                ?>
                            </form>
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

<script src="<?php echo $base_assets_url?>vendor/jquery-steps/jquery.steps.js"></script> <!-- JQuery Steps Plugin Js -->

<script src="<?php echo $base_assets_url?>vendor/jquery-validation/jquery.validate.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?php echo $base_assets_url?>vendor/jquery-validation/additional-methods.js"></script> <!-- Jquery Validation Plugin Css -->
<script src="<?php echo $base_assets_url?>vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<!-- date range -->
<script src="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/bootstrap-datepicker/moment.min.js"></script>
<script src="<?php echo $base_assets_url?>vendor/parsleyjs/js/parsley.min.js"></script>

<script src="<?php echo $base_assets_url?>vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->
<script src="<?php echo $base_assets_url?>bundles/mainscripts.bundle.js"></script>
<script type="text/javascript">
    'use strict';
    var jurusan = '',
        agama = '',
        jk = '';
    
    $.validator.addMethod('require-one', function(value) {
        return $('.require-one:checked').length > 0;
    }, 'You must select at least 1 choices.');

    var checkboxes = $('.require-one');
    var checkbox_names = $.map(checkboxes, function(e, i) {
        return $(e).attr("name")
    }).join(" ");

    var form = $("#example-form").show();

    form.steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "Simpan",
            next: "Berikutnya",
            previous: "Kembali"
        },
        onInit: function (event, currentIndex) {
            //Set tab width
            var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
            var tabCount = $tab.length;
            $tab.css('width', (100 / tabCount) + '%');

            //set button waves effect
            setButtonWavesEffect(event);
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            if (currentIndex > newIndex) { return true; }

            if (currentIndex < newIndex) {
                form.find('.body:eq(' + newIndex + ') label.error').remove();
                form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
            }

            //console.log(newIndex)
            
            //form.validate().settings.ignore = ':disabled,:hidden,#jurusan';
            form.validate().settings.ignore = ':hidden:not(".multiselect")';
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setButtonWavesEffect(event);
            //console.log(currentIndex);
            if (currentIndex == 1) {
                form.validate().settings.ignore = ':hidden:not(".multiselect,.require-one")';
            }
            if (currentIndex == 2) {
                
                $('[name="is_complete"]').rules('add',{
                    required: true
                });
            }

            return form.valid();
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ':hidden:not(".multiselect,.require-one,.is_complete")';
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            var URL     = $("#example-form").attr("action"),
                data    = $("#example-form").serialize();

            //console.log(formData);
            $.ajax({
                url        : URL,
                type       : 'POST',
                data       : data,
                success: function(data) {
                    // body...
                    var row = JSON.parse(data);
                    
                    if ( row.success ) {
                        swal({
                                title: "Selamat!", 
                                text: "Data berhasil disimpan!", 
                                type: "success",
                                timer: 800,
                                showConfirmButton: false
                        });
                        setTimeout(function () {
                            location.href = row.base_url;
                        }, 800);
                    }
                }
            });
        }
    });

    $('.fancy-checkbox').on('click', 'input[name="P01_001"]', function(event) {
        if ($('input[name="P01_004"]:checked')) {
            $('input[name="P01_004"]').prop('checked', false);
        }

        if (this.checked) { 
            $('#P01_001').css('display', 'block');
            setKerja();
        } else { 
            $('#P01_001').css('display', 'none');
            unsetKerja();
        }
        
        $('#P01_004').css('display', 'none');
    });
    
    $('.fancy-checkbox').on('click', 'input[name="P01_002"]', function(event) {
        if ($('input[name="P01_004"]:checked')) {
            $('input[name="P01_004"]').prop('checked', false);
        }

        if (this.checked) { 
            $('#P01_002').css('display', 'block');
            setKuliah()
        } else { 
            $('#P01_002').css('display', 'none');
            unsetKuliah();
        }
        $('#P01_004').css('display', 'none');
    });

    $('.fancy-checkbox').on('click', 'input[name="P01_003"]', function(event) {
        if ($('input[name="P01_004"]:checked')) {
            $('input[name="P01_004"]').prop('checked', false);
        }

        if (this.checked) { 
            $('#P01_003').css('display', 'block');
            setWirausaha();
        } else { 
            $('#P01_003').css('display', 'none'); 
            unsetWirausaha();
        }
        //this.checked ? $('#P01_003').css('display', 'block') :  $('#P01_003').css('display', 'none');
        $('#P01_004').css('display', 'none');
    });

    $('.fancy-checkbox').on('click', 'input[name="P01_004"]', function(event) {
        if (this.checked) {
            $('input[name="P01_001"]').prop('checked', false);
            $('input[name="P01_002"]').prop('checked', false);
            $('input[name="P01_003"]').prop('checked', false);

            $('#P01_001').css('display', 'none');
            $('#P01_002').css('display', 'none');
            $('#P01_003').css('display', 'none');

            unsetKerja();
            unsetKuliah();
            unsetWirausaha();
            setBelum();
            $('#P01_004').css('display', 'block');
        } else {
            $('#P01_004').css('display', 'none');
            
            // set rules field //

            unsetKerja();
            unsetKuliah();
            unsetWirausaha();
            unsetBelum();
        }
    });

    $('input[name="P10_001"]').on('click', function(event) {
        if (this.checked) {
            if ($(this).attr("id") == 'etc') {
                $('input[name="P10_002"]').attr({
                    'readonly': false,
                    'required': true
                });
            } else {
                $('input[name="P10_002"]').attr({
                    'readonly': true,
                    'required': false
                });
                $('input[name="P10_002"]').valid();
            }
        }
    });
    
    $('input[name="P18_001"]').on('click', function(event) {
        if (this.checked) {
            if ($(this).attr("id") == 'etc') {
                $('input[name="P18_002"]').attr({
                    'readonly': false,
                    'required': true
                });
            } else {

                $('input[name="P18_002"]').attr({
                    'readonly': true,
                    'required': false
                });
                $('input[name="P18_002"]').valid();
            }
        }
    });

    form.validate({
        //ignore: [],
        //ignore: ':hidden:not(".multiselect,.require-one")',
        groups: {
            checks: checkbox_names
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
        }
    });

    $('#jurusan').multiselect({
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        maxHeight: 200,
        filterPlaceholder: 'Search for something...',
        buttonText: function(options, select) {
            if (options.length === 0) {
                return 'Pilih Jurusan';
            }
            else {
                 var labels = '';
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
                $('#jurusan').valid();
                jurusan = option.val();
                $('.multiselect_div .multiselect-container').removeClass('show');
            }else{
                jurusan = '';
                $('.multiselect_div .multiselect-container').removeClass('show');
            }

            $('#jurusan option').each(function() {
                if ($(this).val() !== option.val()) {
                    values.push($(this).val());
                }
            });

            $('#jurusan').multiselect('deselect', values);
        }
    }); 

    $('#jk').multiselect({
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        maxHeight: 200,
        filterPlaceholder: 'Search for something...',
        buttonText: function(options, select) {
            if (options.length === 0) {
                return 'Pilih Jenis Kelamin';
            }
            else {
                 var labels = '';
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
                $('#jk').valid()
                jk = option.val();
                $('.multiselect_div .multiselect-container').removeClass('show');
            }else{
                jk = '';
                $('.multiselect_div .multiselect-container').removeClass('show');
            }

            $('#jk option').each(function() {
                if ($(this).val() !== option.val()) {
                    values.push($(this).val());
                }
            });

            $('#jk').multiselect('deselect', values);
        }
    }); 

    $('#agama').multiselect({
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        maxHeight: 200,
        filterPlaceholder: 'Search for something...',
        buttonText: function(options, select) {
            if (options.length === 0) {
                return 'Pilih Agama';
            }
            else {
                 var labels = '';
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
                $('#agama').valid();
                agama = option.val();
                $('.multiselect_div .multiselect-container').removeClass('show');
            }else{
                agama = '';
                $('.multiselect_div .multiselect-container').removeClass('show');
            }

            $('#agama option').each(function() {
                if ($(this).val() !== option.val()) {
                    values.push($(this).val());
                }
            });

            $('#agama').multiselect('deselect', values);
        }
    }); 
    
    $('.mm-yyyy').datepicker({ format: 'yyyy', startView: "year", minView: "year", minViewMode: 2, autoclose: true, changeYear: true, orientation: 'top' })
    .on('changeDate', function(e) {
        $(this).valid();
    });
    
    $('input[name="tanggal_lahir"]').datepicker({ format: 'yyyy-mm-dd', autoclose: true, changeMonth: true, changeYear: true, orientation: 'top' })
    .on('changeDate', function(e) {
        $(this).valid();
    });

    function setKerja() {
        // body...
        // set default value //
        $('input[name=P03_001]').val('');
        $('input[name=P04_001]').val('');
        $('input[name=P05_001]').val('');
        $('input[name=P07_001]').val('');
        $('[name=P02_001],[name=P06_001]').prop('checked', false);

        // set rules field //
        $('[name=P02_001]').rules('add',{
            required: true
        });
        $('[name=P06_001]').rules('add',{
            required: true
        });
        $('input[name=P03_001]').rules('add',{
            required: true
        });
        $('input[name=P04_001]').rules('add',{
            required: true
        });
        $('input[name=P05_001]').rules('add',{
            required: true
        });
        $('input[name=P07_001]').rules('add',{
            required: true
        });
    }
    
    function unsetKerja() {
        // body... 
        // set rules field //
        $('input[name=P03_001]').val('');
        $('input[name=P04_001]').val('');
        $('input[name=P05_001]').val('');
        $('input[name=P07_001]').val('');
        $('[name=P02_001],[name=P06_001]').prop('checked', false);

        $('[name=P02_001]').rules('remove', 'required');
        $('[name=P06_001]').rules('remove', 'required');
        $('input[name=P03_001]').rules('remove', 'required');
        $('input[name=P04_001]').rules('remove', 'required');
        $('input[name=P05_001]').rules('remove', 'required');
        $('input[name=P07_001]').rules('remove', 'required');
    }

    function setKuliah() {
        // body...
        // set default value //
        $('input[name="P08_001"]').val('');
        $('input[name="P09_001"]').val('');
        $('input[name="P11_001"]').val('');
        $('input[name="P10_002"]').val('');
        $('input[name="P10_002"]').attr({
            'readonly': true,
            'required': false
        });
        $('input[name="P10_002"]').valid();

        $('[name=P10_001],[name=P12_001],[name=P13_001]').prop('checked', false);

        // set rules field //
        $('[name=P10_001]').rules('add',{
            required: true
        });
        $('[name=P12_001]').rules('add',{
            required: true
        });
        $('[name=P13_001]').rules('add',{
            required: true
        });
        $('input[name="P08_001"]').rules('add',{
            required: true
        });
        $('input[name="P09_001"]').rules('add',{
            required: true
        });
        $('input[name="P11_001"]').rules('add',{
            required: true
        });
    }

    function unsetKuliah() {
        // body... 
        // set rules field //
        $('input[name="P08_001"]').val('');
        $('input[name="P09_001"]').val('');
        $('input[name="P11_001"]').val('');
        $('input[name="P10_002"]').val('');

        $('[name=P10_001]').rules('remove', 'required');
        $('[name=P12_001]').rules('remove', 'required');
        $('[name=P13_001]').rules('remove', 'required');
        $('input[name="P08_001"]').rules('remove', 'required');
        $('input[name="P09_001"]').rules('remove', 'required');
        $('input[name="P11_001"]').rules('remove', 'required');
        $('input[name="P10_002"]').rules('remove', 'required');
    }

    function setWirausaha() {
        // body...
        // set default value //
        $('input[name="P14_001"]').val('');
        $('input[name="P15_001"]').val('');
        $('input[name="P16_001"]').val('');
        $('input[name="P17_001"]').val('');

        // set rule //
        $('input[name="P14_001"]').rules('add',{
            required: true
        });
        $('input[name="P15_001"]').rules('add',{
            required: true
        });
        $('input[name="P16_001"]').rules('add',{
            required: true
        });
        $('input[name="P17_001"]').rules('add',{
            required: true
        });
    }

    function unsetWirausaha() {
        // body...
        // set rules //
        $('input[name="P14_001"]').val('');
        $('input[name="P15_001"]').val('');
        $('input[name="P16_001"]').val('');
        $('input[name="P17_001"]').val('');

        $('input[name="P14_001"]').rules('remove', 'required');
        $('input[name="P15_001"]').rules('remove', 'required');
        $('input[name="P16_001"]').rules('remove', 'required');
        $('input[name="P17_001"]').rules('remove', 'required');
    }

    function setBelum() {
        // body ...
        // set default value //
        $('input[type="P18_002"]').val('');
        $('[name=P18_001]').prop('checked', false);
        $('input[name="P18_002"]').val('');
        $('input[name="P18_002"]').attr({
            'readonly': true,
            'required': false
        });
        
        // set rules field //
        $('[name=P18_001]').rules('add',{
            required: true
        });
    }

    function unsetBelum() {
        // body...
        $('input[type="P18_002"]').val('');
        $('[name=P18_001]').prop('checked', false);
        $('input[name="P18_002"]').val('');
        
        $('[name=P18_001]').rules('remove', 'required');
    }

    function setButtonWavesEffect(event) {
        $(event.currentTarget).find('[role="menu"] li a').removeClass('');
        $(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('');
    }
</script>
</body>
</html>