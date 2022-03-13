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

<link rel="icon" href="<?php echo $retVal = (!empty($value->favicon)) ? base_url('assets/attachment/images/logo/'.$value->favicon) : 'favicon.ico' ; ?>" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/animate-css/animate.min.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo $base_assets_url?>css/main.css">
<link rel="stylesheet" href="<?php echo $base_assets_url?>css/color_skins.css">
</head>

<style type="text/css" media="screen">
    #form-regsitrasi .btn-group button {
        margin-top: 5px !important;
    }    
    label.error {
        font-size: 11px;
        color: #de4848;
    }
</style>

<body class="theme-blue" style="background-color: #fff !important">
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <?php echo $content ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>
</html>