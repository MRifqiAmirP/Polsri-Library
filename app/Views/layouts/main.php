<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?= $title ?? 'Error title'; ?></title>

	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- Bootstrap & FontAwesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- Google Fonts -->
	<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

	<!-- Ace Styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
	<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

	<!--[if lte IE 9]>
        <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

	<!-- Ace Settings Handler -->
	<script src="assets/js/ace-extra.min.js"></script>

	<!-- HTML5shiv and Respond.js for IE8 support -->
	<!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
	<style>
		.main-container {
			min-width: 100% !important;
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
	<script src="assets/js/jquery-2.1.4.min.js"></script>
	<!-- <![endif]-->
	<script src="assets/js/bootstrap.min.js"></script>

	<!--[if IE]>
        <script src="assets/js/jquery-1.11.3.min.js"></script>
    <![endif]-->

	<script type="text/javascript">
		if ('ontouchstart' in document.documentElement) {
			document.write("<script src='assets/js/jquery.mobile.custom.min.js'><\/script>");
		}
	</script>

	<!-- Ace Scripts -->
	<script src="assets/js/ace-elements.min.js"></script>
	<script src="assets/js/ace.min.js"></script>

	<?= $this->renderSection('scripts'); ?>
</body>

</html>