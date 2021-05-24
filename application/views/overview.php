<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head') ?>
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<?php $this->load->view('_partials/header') ?>
	</header><!-- End Header -->

	<?= $contents ?>

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<?php $this->load->view('_partials/footer') ?>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<?php $this->load->view('_partials/js') ?>

</body>

</html>
