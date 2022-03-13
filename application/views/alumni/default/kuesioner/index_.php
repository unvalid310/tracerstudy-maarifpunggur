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

<?php
    $_user_id = $this->session->userdata('user_id');;
    $_q_user = $this->vw_alumni_m->get_by(array('user_id'=>$_user_id));
    if (count($_q_user) > 0) {
        # code...
        foreach ($_q_user as $jsonData);
    }

    $_q_quest = $this->tb_quest_m->get_by(array('user_id' => $_user_id));
    if (count($_q_quest) > 0) {
        # code...
        foreach ($_q_quest as $questData);
    }
?>
<div id="wrapper">
    <div id="main-wizard">
        <div class="container-fluid m-t-60">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header text-center">
                            <img src="<?php echo $base_assets_url?>images/logo tracer .png?width=60">
                        </div>
                        <div class="body wizard-content">
                            <form id="example-form" class="tab-wizard wizard-circle wizard clearfix" action="<?php echo base_url('api/rest_kuesioner_alumni/save') ?>" method="post" enctype="multipart/form-data">
                                
                                <h6>Biodata</h6>
                                <section style="padding: 40px">
                                    <div class="form-group">
                                        <label>Nama Lengkap <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control col-lg-10 col-md-10 col-sm-12" name="realname" autocomplete="off" value="<?php echo $retVal = (!empty($jsonData->realname)) ? $jsonData->realname : '' ; ?>" placeholder="Nama Lengkap" required>
                                        <input type="hidden" name="user_id" value="<?php echo $_user_id ; ?>">
                                        <input type="hidden" name="quest_id" value="<?php echo $id = (!empty($questData->quest_id)) ? $questData->quest_id : null ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nis <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control col-lg-5 col-md-5 col-sm-12" name="nis" autocomplete="off" value="<?php echo $retVal = (!empty($jsonData->nis)) ? $jsonData->nis : '' ; ?>" placeholder="Nomor Induk Siswa" required>
                                    </div>
                                    <div class="form-group row">
                                        <div class="inputGroup col-lg-5 col-md-5 col-sm-6">
                                            <label>Tempat Lahir <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" value="<?php echo $retVal = (!empty($jsonData->tempat_lahir)) ? $jsonData->tempat_lahir : '' ; ?>" placeholder="Tempat Lahir" required>
                                        </div>
                                        <div class="inputGroup col-lg-7 col-md-7 col-sm-6">
                                            <label>Tanggal Lahir <span class="text-danger">*</span></label>
                                            <input type="text" id="tanggal_lahir" class=".datepicker_wrapper form-control col-lg-7 col-md-7 col-sm-6" name="tanggal_lahir" autocomplete="off" value="<?php echo $retVal = (!empty($jsonData->tanggal_lahir)) ? $jsonData->tanggal_lahir : '' ; ?>" placeholder="Tanggal Lahir" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="inputGroup col-lg-3 col-md-3 col-sm-6">
                                            <label>Jenis Kelamin <span class="text-danger">*</span></label>
                                            <div class="multiselect_div pl-0 pr-0">
                                                <div class="multiselect_div">
                                                    <select id="jk" name="jk" class="multiselect multiselect-custom" multiple="multiple"  required>
                                                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                                                        <option value="PEREMPUAN">PEREMPUAN</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inputGroup col-lg-4 col-md-4 col-sm-6">
                                            <label>Agama <span class="text-danger">*</span></label>
                                            <div class="multiselect_div pl-0 pr-0">
                                                <div class="multiselect_div">
                                                    <select id="agama" name="agama" class="multiselect multiselect-custom" multiple="multiple" required>
                                                        <option value="ISLAM">ISLAM</option>
                                                        <option value="KRISTEN KATOLIK">KRISTEN KATOLIK</option>
                                                        <option value="KRISTEN PROTESTAN">KRISTEN PROTESTAN</option>
                                                        <option value="HINDU">HINDU</option>
                                                        <option value="BUDHA">BUDHA</option>
                                                    </select>
                                                </div>
                                            </div>    
                                        </div>
                                        <di class="col-lg-5 col-md-5"></di>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat <span class="text-danger">*</span></label>
                                        <textarea id="alamat" class="form-control col-lg-8 col-md-8 col-sm-12" name="alamat" rows="5" required><?php echo $retVal = (!empty($jsonData->alamat)) ? $jsonData->alamat : '' ; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>No. Telepon <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control col-lg-5 col-md-5 col-sm-12" name="no_telp" autocomplete="off" value="<?php echo $retVal = (!empty($jsonData->no_telp)) ? $jsonData->no_telp : '' ; ?>" placeholder="Nomor Telpon" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jurusan <span class="text-danger">*</span></label>
                                        <div class="multiselect_div col-lg-5 col-md-5 col-sm-12 pl-0 pr-0">
                                            <div class="multiselect_div">
                                                <select id="jurusan" name="jurusan_id" class="multiselect multiselect-custom" multiple="multiple" required>
                                                    <?php  
                                                        $query = $this->tb_jurusan_m->get_by(array('is_publish' => '1'));
                                                        foreach ($query as $data) {
                                                    ?>
                                                    <option value="<?php echo $data->jurusan_id ?>"><?php echo $data->nama_jurusan.' ('.$data->kode_jurusan.')' ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="inputGroup col-lg-3 col-md-3 col-sm-12">
                                            <label>Tahun Masuk <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control mm-yyyy" name="th_masuk" autocomplete="off" value="<?php echo $retVal = (!empty($jsonData->th_masuk)) ? $jsonData->th_masuk : '' ; ?>" placeholder="Tahun Masuk" required>
                                        </div>
                                        <div class="inputGroup col-lg-3 col-md-3 col-sm-12">
                                            <label>Tahun Lulus <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control mm-yyyy" name="th_keluar" autocomplete="off" value="<?php echo $retVal = (!empty($jsonData->th_keluar)) ? $jsonData->th_keluar : '' ; ?>" placeholder="Tahun Lulus" required>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12"></div>
                                    </div>
                                </section>

                                <!-- Main Quest -->
                                <h6>Kuesioner Wajib</h6>
                                <section style="padding: 40px">
                                    <div class="form-group row clearfix">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label>Kegiatan Setelah Lulus <span class="text-danger">*</span></label>    
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                            <label class="fancy-checkbox col-lg-12 p-l-0 p-r-0">
                                                <input type="checkbox" name="P01_001" value="5" class="require-one" <?php echo $retVal = (!empty($questData->P01_001)) ? 'checked' : '' ; ?>>
                                                <span>Bekerja</span>
                                            </label>
                                            <label class="fancy-checkbox col-lg-12 p-l-0 p-r-0">
                                                <input type="checkbox" name="P01_002" value="4" class="require-one" <?php echo $retVal = (!empty($questData->P01_002)) ? 'checked' : '' ; ?>>
                                                <span>Kuliah</span>
                                            </label>
                                            <label class="fancy-checkbox col-lg-12 p-l-0 p-r-0">
                                                <input type="checkbox" name="P01_003" value="3" class="require-one" <?php echo $retVal = (!empty($questData->P01_003)) ? 'checked' : '' ; ?>>
                                                <span>Wirausaha</span>
                                            </label>
                                            <label class="fancy-checkbox col-lg-12 p-l-0 p-r-0">
                                                <input type="checkbox" name="P01_004" value="2" class="require-one" <?php echo $retVal = (!empty($questData->P01_004)) ? 'checked' : '' ; ?>>
                                                <span>Belum Bekerja/Kuliah</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <!-- IF P01_001 Is True -->
                                    <div id="P01_001" style="display: none">
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-12">
                                                <hr>
                                                <h5><b>Isilah Kuesioner berikut apabila anda sudah bekerja</b></h5>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini <span class="text-danger">*</span></label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P02_001" class="require-radio" value="5" <?php echo $retVal = (!empty($questData->P02_001) && $questData->P02_001 == '5') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Setingkat lebih tiggi</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P02_001" class="require-radio" value="4"<?php echo $retVal = (!empty($questData->P02_001) && $questData->P02_001 == '4') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Tingkat yang sama</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P02_001" class="require-radio" value="3"<?php echo $retVal = (!empty($questData->P02_001) && $questData->P02_001 == '3') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Setingkat lebih rendah</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P02_001" class="require-radio" value="2" <?php echo $retVal = (!empty($questData->P02_001) && $questData->P02_001 == '2') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Tidak perlu pendidikan</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div id="middle" class="col-lg-8 col-md-8 col-sm-8">
                                                <label>Nama Perusahaan/Instansi <span class="text-danger">*</span></label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <input type="text" name="P03_001" class="form-control" value="<?php echo $retVal = (!empty($questData->P03_001)) ? $questData->P03_001 : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div id="middle" class="col-lg-8 col-md-8 col-sm-8">
                                                <label>Tahun Masuk Kerja <span class="text-danger">*</span></label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <input type="text" name="P04_001" class="form-control mm-yyyy col-lg-5 col-sm-5 col-sm-12" value="<?php echo $retVal = (!empty($questData->P04_001)) ? $questData->P04_001 : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div id="middle" class="col-lg-8 col-md-8 col-sm-8">
                                                <label>Jabatan <span class="text-danger">*</span></label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <input type="text" name="P05_001" class="form-control" value="<?php echo $retVal = (!empty($questData->P05_001)) ? $questData->P05_001 : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>Apakah jurusan SMK anda sesuai dengan pekerjaan <span class="text-danger">*</span></label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P06_001" class="require-radio" value="1" <?php echo $retVal = (!empty($questData->P06_001) && $questData->P06_001 = '1') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Iya</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P06_001" class="require-radio" value="0" <?php echo $retVal = (!empty($questData->P06_001) && $questData->P06_001 = '0') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Tidak</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div id="middle" class="col-lg-8 col-md-8 col-sm-8">
                                                <label>Berapa lama anda menunggu dari Lulus SMK hingga mendapatkan pekerjaan <span class="text-danger">*</span></label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <div class="input-group">
                                                    <input type="number" name="P07_001" class="form-control col-lg-3 col-md-3 col-sm-12" style="border-radius: 4px" value="<?php echo $retVal = (!empty($questData->P07_001)) ? $questData->P07_001 : '' ; ?>">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="border: none; background-color: transparent;">Bulan setelah lulus ujian</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- IF P01_002 Is True -->
                                    <div id="P01_002" style="display: none">
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-12">
                                                <hr>
                                                <h5><b>Isilah Kuesioner berikut apabila melanjutkan ke jenjang perkuliah</b></h5>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div id="middle" class="col-lg-8 col-md-8 col-sm-8">
                                                <label>Nama Perguruan Tinggi / Universitas <span class="text-danger">*</span></label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <input type="text" name="P08_001" class="form-control" value="<?php echo $retVal = (!empty($questData->P08_001)) ? $questData->P08_001 : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div id="middle" class="col-lg-8 col-md-8 col-sm-8">
                                                <label>Jurusan <span class="text-danger">*</span></label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <input type="text" name="P09_001" class="form-control" value="<?php echo $retVal = (!empty($questData->P09_001)) ? $questData->P09_001 : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>Jenjang pendidikan saat ini <span class="text-danger">*</span></label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-6 p-r-0 p-l-0">
                                                    <input type="radio" name="P10_001" class="require-radio" value="5" <?php echo $retVal = (!empty($questData->P10_001) && $questData->P10_001 == '5') ? 'checked' : '' ; ?>>
                                                    <span><i></i>S1</span>
                                                </label>
                                                <label class="fancy-radio col-lg-6 p-r-0 p-l-0">
                                                    <input type="radio" name="P10_001" class="require-radio" value="4" <?php echo $retVal = (!empty($questData->P10_001) && $questData->P10_001 == '4') ? 'checked' : '' ; ?>>
                                                    <span><i></i>D1</span>
                                                </label>
                                                <label class="fancy-radio col-lg-6 p-r-0 p-l-0">
                                                    <input type="radio" name="P10_001" class="require-radio" value="3" <?php echo $retVal = (!empty($questData->P10_001) && $questData->P10_001 == '3') ? 'checked' : '' ; ?>>
                                                    <span><i></i>D2</span>
                                                </label>
                                                <label class="fancy-radio col-lg-6 p-r-0 p-l-0">
                                                    <input type="radio" name="P10_001" class="require-radio" value="2" <?php echo $retVal = (!empty($questData->P10_001) && $questData->P10_001 == '2') ? 'checked' : '' ; ?>>
                                                    <span><i></i>D3</span>
                                                </label>
                                                <label class="fancy-radio col-lg-6 p-r-0 p-l-0">
                                                    <input type="radio" name="P10_001" class="require-radio" value="1" <?php echo $retVal = (!empty($questData->P10_001) && $questData->P10_001 == '1') ? 'checked' : '' ; ?>>
                                                    <span><i></i>D4</span>
                                                </label>
                                                <label class="fancy-radio col-lg-6 p-r-0 p-l-0">
                                                    <input type="radio" name="P10_001" id="etc" class="require-radio" value="0"  <?php echo $retVal = (!empty($questData->P10_001) && $questData->P10_001 == '0') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Lainya</span>
                                                </label>
                                                <input type="text" name="P10_002" class="form-control" <?php echo $retVal = (!empty($questData->P10_002)) ? 'value="'.$questData->P10_002.'"' : 'readonly' ; ?>>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div id="middle" class="col-lg-8 col-md-8 col-sm-8">
                                                <label>Tahun Masuk Kuliah <span class="text-danger">*</span></label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <input type="text" name="P11_001" class="form-control mm-yyyy col-lg-5 col-sm-5 col-sm-12" value="<?php echo $retVal = (!empty($questData->P11_001)) ? $questData->P11_001 : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>Apa kegiatan anda selama kuliah <span class="text-danger">*</span></label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P12_001" class="require-radio" value="1" <?php echo $retVal = (!empty($questData->P12_001) && $questData->P12_001 == '1') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Hanya kuliah saja</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P12_001" class="require-radio" value="0" <?php echo $retVal = (!empty($questData->P12_001) && $questData->P12_001 == '0') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Kuliah sambil bekerja</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>Apakah jurusan SMK anda sesuai dengan perkuliahan anda <span class="text-danger">*</span></label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P13_001" class="require-radio" value="1" <?php echo $retVal = (!empty($questData->P13_001) && $questData->P13_001 == '1') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Iya</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio"" name="P13_001" class="require-radio" value="0" <?php echo $retVal = !empty($questData->P13_001) && ($questData->P13_001 == '1') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Tidak</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- IF P01_003 Is True -->
                                    <div id="P01_003" style="display: none">
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-12">
                                                <hr>
                                                <h5><b>Isilah Kuesioner berikut apabila anda wirausaha</b></h5>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Nama Usaha <span class="text-danger">*</span>
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <input type="text" name="P14_001" value="<?php echo $retVal = (!empty($questData->P14_001)) ? $questData->P14_001 : '' ; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Bidang Usaha <span class="text-danger">*</span>
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <input type="text" name="P15_001" value="<?php echo $retVal = (!empty($questData->P15_001)) ? $questData->P15_001 : '' ; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Jumlah Karyawan <span class="text-danger">*</span>
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <input type="number" name="P16_001" value="<?php echo $retVal = (!empty($questData->P16_001)) ? $questData->P16_001 : '' ; ?>" class="form-control col-lg-2 col-md-2 col-sm-12">
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Bulan Membuka Usaha <span class="text-danger">*</span>
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <input type="text" name="P17_001" value="<?php echo $retVal = (!empty($questData->P17_001)) ? $questData->P17_001 : '' ; ?>" class="form-control mm-yyyy col-lg-5 col-md-5 col-sm-12">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- IF P01_004 Is True -->
                                    <div id="P01_004" style="display: none">
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-12">
                                                <hr>
                                                <h5><b>Isilah Kuesioner berikut apabila anda belum bekerja/kuliah</b></h5>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>Kegiatan apa yang anda lakukan sekarang</label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-12 p-l-0 p-r-0">
                                                    <input type="radio" name="P18_001" class="require-radio" value="5" <?php echo $retVal = (!empty($questData->P18_001) && $questData->P18_001 == '5') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Mencari Pekerjaan</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-l-0 p-r-0">
                                                    <input type="radio" name="P18_001" class="require-radio" value="4" <?php echo $retVal = (!empty($questData->P18_001) && $questData->P18_001 == '4') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Mencari Perguruan Tinggi</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-l-0 p-r-0">
                                                    <input type="radio" name="P18_001" id="etc" class="require-radio" value="0" <?php echo $retVal = (!empty($questData->P18_001) && $questData->P18_001 == '0') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Lainnya</span>
                                                </label>
                                                <input type="text" class="form-control" name="P18_002" <?php echo $retVal = !empty($questData->P18_002) ? 'value="'.$questData->P18_002.'"' : 'readonly' ; ?>>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <h6>Kuesioner Opsional</h6>
                                <section style="padding: 40px">
                                    <!-- IF P01_001 Is True -->
                                    <div id="sec_P01_001">
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-12">
                                                <hr>
                                                <h5><b>Kesesuaian Program Keahlian Terhadap Bidang Pekerjaan</b></h5>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Seberapa erat hubungan antara bidang keahlian terhadap pekerjaan anda
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P19_001" class="require-radio" value="4" <?php echo $retVal = (!empty($questData->P19_001) && $questData->P19_001 == '4') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Sangat Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P19_001" class="require-radio" value="3" <?php echo $retVal = (!empty($questData->P19_001) && $questData->P19_001 == '3') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P19_001" class="require-radio" value="2" <?php echo $retVal = (!empty($questData->P19_001) && $questData->P19_001 == '2') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Cukup Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P19_001" class="require-radio" value="1" <?php echo $retVal = (!empty($questData->P19_001) && $questData->P19_001 == '1') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Tidak Erat</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Jika menurut anda, pekerjaan anda saat ini tidak sesuai dengan bidang keahlian pendidikan anda mengapa anda mengambilnya
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <input type="text" name="P20_001" class="form-control" value=" <?php echo $retVal = (!empty($questData->P20_001)) ? $questData->P20_001 : '' ; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Seberapa erat pengetahuan di bidang atau disiplin ilmu anda terhadap pekerjaan
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P21_001" value="4" <?php echo $retVal = (!empty($questData->P21_001) && $questData->P21_001 == '4') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Sangat Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P21_001" value="3" <?php echo $retVal = (!empty($questData->P21_001) && $questData->P21_001 == '3') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P21_001" value="2" <?php echo $retVal = (!empty($questData->P21_001) && $questData->P21_001 == '2') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Cukup Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P21_001" value="1" <?php echo $retVal = (!empty($questData->P21_001) && $questData->P21_001 == '1') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Tidak Erat</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Seberapa erat pengetahuan di luar bidang atau disiplin ilmu anda terhadap pekerjaan
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P22_001" value="4" <?php echo $retVal = (!empty($questData->P22_001) && $questData->P22_001 == '4') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Sangat Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P22_001" value="3" <?php echo $retVal = (!empty($questData->P22_001) && $questData->P22_001 == '3') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P22_001" value="2" <?php echo $retVal = (!empty($questData->P22_001) && $questData->P22_001 == '2') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Cukup Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P22_001" value="1" <?php echo $retVal = (!empty($questData->P22_001) && $questData->P22_001 == '1') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Tidak Erat</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- IF P01_002 Is True -->
                                    <div id="sec_P01_002">
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-12">
                                                <hr>
                                                <h5><b>Kesesuaian Program Keahlian Terhadap Program Studi Perkuliahan</b></h5>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Seberapa erat hubungan antara bidang keahlian terhadap program study anda 
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P23_001" class="require-radio" value="4" <?php echo $retVal = (!empty($questData->P23_001) && $questData->P23_001 == '4') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Sangat Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P23_001" value="3" <?php echo $retVal = (!empty($questData->P23_001) && $questData->P23_001 == '3') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P23_001" value="2" <?php echo $retVal = (!empty($questData->P23_001) && $questData->P23_001 == '2') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Cukup Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P23_001" value="1" <?php echo $retVal = (!empty($questData->P23_001) && $questData->P23_001 == '1') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Tidak Erat</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Jika menurut anda, program study anda saat ini tidak sesuai dengan bidang keahlian pendidikan anda mengapa anda mengambilnya 
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <input type="text" name="P24_001" value=" <?php echo $retVal = (!empty($questData->P23_001)) ? $questData->P24_001 : '' ; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Seberapa erat pengetahuan di bidang atau disiplin ilmu anda terhadap program study yang anda ambil 
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P25_001" value="4" <?php echo $retVal = (!empty($questData->P25_001) && $questData->P25_001 == '4') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Sangat Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P25_001" value="3" <?php echo $retVal = (!empty($questData->P25_001) && $questData->P25_001 == '3') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P25_001" value="2" <?php echo $retVal = (!empty($questData->P25_001) && $questData->P25_001 == '2') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Cukup Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P25_001" value="1" <?php echo $retVal = (!empty($questData->P25_001) && $questData->P25_001 == '1') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Tidak Erat</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Seberapa erat pengetahuan di luar bidang atau disiplin ilmu anda terhadap program study
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P26_001" value="4" <?php echo $retVal = (!empty($questData->P26_001) && $questData->P26_001 == '4') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Sangat Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P26_001" value="3" <?php echo $retVal = (!empty($questData->P26_001) && $questData->P26_001 == '3') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P26_001" value="2" <?php echo $retVal = (!empty($questData->P26_001) && $questData->P26_001 == '2') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Cukup Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P26_001" value="1" <?php echo $retVal = (!empty($questData->P26_001) && $questData->P26_001 == '1') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Tidak Erat</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- IF P01_003 Is True -->
                                    <div id="sec_P01_003">
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-12">
                                                <hr>
                                                <h5><b>Kesesuaian Program Keahlian Terhadap Bidang Usaha</b></h5>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Seberapa erat hubungan antara bidang keahlian terhadap bidang usaha anda  
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P27_001" value="4" <?php echo $retVal = (!empty($questData->P27_001) && $questData->P27_001 == '4') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Sangat Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P27_001" value="3" <?php echo $retVal = (!empty($questData->P27_001) && $questData->P27_001 == '3') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P27_001" value="2" <?php echo $retVal = (!empty($questData->P27_001) && $questData->P27_001 == '2') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Cukup Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P27_001" value="1" <?php echo $retVal = (!empty($questData->P27_001) && $questData->P27_001 == '1') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Tidak Erat</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Jika menurut anda, bidang usaha anda saat ini tidak sesuai dengan bidang keahlian pendidikan anda mengapa anda menjalankan usaha tersebut  
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <input type="text" name="P28_001" value=" <?php echo $retVal = (!empty($questData->P28_001)) ? $questData->P28_001 : '' ; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Seberapa erat pengetahuan di bidang atau disiplin ilmu anda terhadap usaha yang anda jalankan 
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P29_001" value="4" <?php echo $retVal = (!empty($questData->P29_001) && $questData->P29_001 == '4') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Sangat Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P29_001" value="3" <?php echo $retVal = (!empty($questData->P29_001) && $questData->P29_001 == '3') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P29_001" value="2" <?php echo $retVal = (!empty($questData->P29_001) && $questData->P29_001 == '2') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Cukup Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P29_001" value="1" <?php echo $retVal = (!empty($questData->P29_001) && $questData->P29_001 == '1') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Tidak Erat</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row clearfix">
                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                <label>
                                                    Seberapa erat pengetahuan di luar bidang atau disiplin ilmu anda terhadap bidang usaha anda 
                                                </label>    
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 inputGroup">
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P30_001" value="4" <?php echo $retVal = (!empty($questData->P30_001) && $questData->P30_001 == '4') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Sangat Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P30_001" value="3" <?php echo $retVal = (!empty($questData->P30_001) && $questData->P30_001 == '3') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P30_001" value="2" <?php echo $retVal = (!empty($questData->P30_001) && $questData->P30_001 == '2') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Cukup Erat</span>
                                                </label>
                                                <label class="fancy-radio col-lg-12 p-r-0 p-l-0">
                                                    <input type="radio" name="P30_001" value="1" <?php echo $retVal = (!empty($questData->P30_001) && $questData->P30_001 == '3') ? 'checked' : '' ; ?>>
                                                    <span><i></i>Tidak Erat</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row clearfix" style="padding-top: 40px">
                                        <div class="col-lg-12 col-md-12 col-sm-12 inputGroup">
                                            <label class="fancy-checkbox col-lg-12 p-r-0 p-l-0">
                                                <input type="checkbox" name="is_complete" value="1" class="is_complete">
                                                <span>Saya telah mengisi data kuesioner dengan sebenar-benarnya</span>
                                            </label>
                                        </div>
                                    </div>
                                </section>
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
    
    <?php if(!empty($questData->P01_001) && $questData->P01_001 !== '0') { ?>
        $('#P01_001').css('display', 'block'); 
    <?php } else { ?>
        $('#P01_001').css('display', 'none');
    <?php } ?>   
    <?php if(!empty($questData->P01_002) && $questData->P01_002 !== '0') { ?>
        $('#P01_002').css('display', 'block');
    <?php } else { ?>
        $('#P01_002').css('display', 'none');
    <?php } ?>   
    <?php if(!empty($questData->P01_003) && $questData->P01_003 !== '0') { ?>
        $('#P01_003').css('display', 'block');
    <?php } else { ?>
        $('#P01_003').css('display', 'none');
    <?php } ?>   
    <?php if(!empty($questData->P01_004) && $questData->P01_004 !== '0') { ?>
        $('#P01_004').css('display', 'block');
    <?php } else { ?>
        $('#P01_004').css('display', 'none');
    <?php } ?>
    
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
                form.validate().settings.ignore = ':hidden:not(".multiselect,.require-one,.require-radio")';
            }
            if (currentIndex == 2) {
                
                $('[name="is_complete"]').rules('add',{
                    required: true
                });
            }

            return form.valid();
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ':hidden:not(".multiselect,.require-one,.require-radio,.is_complete")';
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

    <?php
        if (!empty($jsonData->jurusan_id)) {
            # code...
    ?>
        $('#jurusan').multiselect('select', <?php echo $jsonData->jurusan_id ?>, true);
    <?php
        }
        if (!empty($jsonData->agama)) {
            # code...
    ?>
        $('#agama').multiselect('select', '<?php echo $jsonData->agama ?>', true);
    <?php
        }
        if (!empty($jsonData->jk)) {
            # code...
    ?>  
        $('#jk').multiselect('select', '<?php echo $jsonData->jk ?>', true);
    <?php
        }
    ?>
    
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