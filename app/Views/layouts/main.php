<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?= $title ?? 'Error title'; ?></title>

    <meta name="description" content="Common form elements and overview & stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Bootstrap & FontAwesome -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/4.5.0/css/font-awesome.min.css'); ?>" />

    <!-- Page Specific Plugin Styles -->
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.custom.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/chosen.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datepicker3.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-timepicker.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/daterangepicker.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datetimepicker.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-colorpicker.min.css'); ?>" />

    <!-- Google Fonts -->
    <link rel="stylesheet" href="<?= base_url('assets/css/fonts.googleapis.com.css'); ?>" />

    <!-- Ace Styles -->
    <link rel="stylesheet" href="<?= base_url('assets/css/ace.min.css'); ?>" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="<?= base_url('assets/css/ace-skins.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/ace-rtl.min.css'); ?>" />

    <!-- Ace Settings Handler -->
    <script src="<?= base_url('assets/js/ace-extra.min.js'); ?>"></script>
    
    <style>
        .main-container {
            overflow-x: hidden !important;
        }

        body {
            overflow-x: hidden;
        }
    </style>
</head>

<body class="no-skin">
    <?= $this->include('layouts/navbar'); ?>

    <div class="main-container" id="main-container">
        <?= $this->include('layouts/sidebar'); ?>

        <div class="main-content">
            <?= $this->renderSection('content') ?>
        </div>

        <?= $this->include('layouts/footer'); ?>
    </div>

    <!-- Basic Scripts -->
    <!-- jQuery & Bootstrap -->
    <!--[if !IE]> -->
    <script src="<?= base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
    <!-- <![endif]-->
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>

    <!--[if IE]>
        <script src="assets/js/jquery-1.11.3.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) {
            document.write("<script src='<?= base_url('assets/js/jquery.mobile.custom.min.js'); ?>'><\/script>");
        }
    </script>

    <!-- Ace Scripts -->
    <script src="<?= base_url('assets/js/ace-elements.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/ace.min.js'); ?>"></script>

    <?= $this->renderSection('scripts'); ?>
</body>

</html>