<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<!-- <title>Document</title> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Skydash Admin</title>
	  <!-- plugins:css -->
	  <link rel="stylesheet" href="<?php echo base_url('assets/SkyDash/vendors/feather/feather.css'); ?>">
	  <link rel="stylesheet" href="<?php echo base_url('assets/SkyDash/vendors/ti-icons/css/themify-icons.css'); ?>">
	  <link rel="stylesheet" href="<?php echo base_url('assets/SkyDash/vendors/css/vendor.bundle.base.css'); ?>">
	  <!-- endinject -->
	  <!-- Plugin css for this page -->
	  <link rel="stylesheet" href="<?php echo base_url('assets/SkyDash/vendors/datatables.net-bs4/dataTables.bootstrap4.css'); ?>">
	  <link rel="stylesheet" href="<?php echo base_url('assets/SkyDash/vendors/ti-icons/css/themify-icons.css'); ?>">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/SkyDash/js/select.dataTables.min.css'); ?>">
	  <!-- End plugin css for this page -->
	  <!-- inject:css -->
	  <link rel="stylesheet" href="<?php echo base_url('assets/SkyDash/css/vertical-layout-light/style.css');?>">
	  <!-- endinject -->
	  <link rel="shortcut icon" href="<?php echo base_url('assets/SkyDash/images/favicon.png'); ?>" />
</head>
<body>
	<div class="container-scroller">
		<?php $this->load->view("admin/template/header"); ?>
		<div class="container-fluid page-body-wrapper">
			<?php $this->load->view('admin/template/navbar'); ?>
			<?php $this->load->view( $body ); ?>
			<?php $this->load->view('admin/template/footer'); ?>
		</div>

	</div>
<!-- Import -->
  <!-- plugins:js -->
  <script src="<?php echo base_url('assets/SkyDash/vendors/js/vendor.bundle.base.js'); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo base_url('assets/SkyDash/vendors/chart.js/Chart.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/SkyDash/vendors/datatables.net/jquery.dataTables.js'); ?>"></script>
  <script src="<?php echo base_url('assets/SkyDash/vendors/datatables.net-bs4/dataTables.bootstrap4.js'); ?>"></script>
  <script src="<?php echo base_url('assets/SkyDash/js/dataTables.select.min.js'); ?>"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url('assets/SkyDash/js/off-canvas.js'); ?>"></script>
  <script src="<?php echo base_url('assets/SkyDash/js/hoverable-collapse.js'); ?>"></script>
  <script src="<?php echo base_url('assets/SkyDash/js/template.js'); ?>"></script>
  <script src="<?php echo base_url('assets/SkyDash/js/settings.js'); ?>"></script>
  <script src="<?php echo base_url('assets/SkyDash/js/todolist.js'); ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url('assets/SkyDash/js/dashboard.js'); ?>"></script>
  <script src="<?php echo base_url('assets/SkyDash/js/Chart.roundedBarCharts.js'); ?>"></script>
  <!-- End custom js for this page-->
  <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
</body>
</html>