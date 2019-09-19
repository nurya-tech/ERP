<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets1/styles/style.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets1/plugin/waves/waves.min.css">

</head>

<body>

<div id="single-wrapper">
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post" class="frm-single">
		<div class="inside">
			<div class="title"><strong>User</strong>Muslim</div>
			<!-- /.title -->
			<div class="frm-title">Register</div>
			<!-- /.frm-title -->
			<div class="frm-input"><input type="text" name="nama" placeholder="Username" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
			<div class="frm-input"><input type="email" name="email" placeholder="Email" class="frm-inp"><i class="fa fa-envelope frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="frm-input"><input type="telepon" name="telepon" placeholder="Telepon" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
			<div class="frm-input"><input type="alamat" name="alamat" placeholder="alamat" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
			<div class="frm-input"><input type="noRekening" name="noRekening" placeholder="noRekening" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
			<div class="frm-input"><input type="password" name="password" placeholder="Password" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="clearfix margin-bottom-20">
				<div class="checkbox primary"><input type="checkbox" id="accept"><label for="accept">Saya setuju</label></div>
				<!-- /.checkbox -->
			</div>
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit">Register<i class="fa fa-arrow-circle-right"></i></button>
			<div class="row small-spacing">
				<div class="col-sm-12">
					<div class="txt-login-with txt-center">Atau Register Dengan</div>
					<!-- /.txt-login-with -->
				</div>
				<!-- /.col-sm-12 -->
				<div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-facebook text-white waves-effect waves-light"><i class="ico fa fa-facebook"></i><span>Facebook</span></button></div>
			<!-- /.col-sm-6 -->
				<!--<div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-google-plus text-white waves-effect waves-light"><i class="ico fa fa-google-plus"></i>Google+</button></div>-->
				<!-- /.col-sm-6 --> 
		</div>
			<!-- /.row -->
			<a href="<?php echo base_url();?>welcome/login" class="a-link"><i class="fa fa-sign-in"></i>Already have account? Login.</a>
			<div class="frm-footer">MuslimMarket © 2019.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url();?>assets1/scripts/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets1/scripts/modernizr.min.js"></script>
	<script src="<?php echo base_url();?>assets1/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets1/plugin/nprogress/nprogress.js"></script>
	<script src="<?php echo base_url();?>assets1/plugin/waves/waves.min.js"></script>

	<script src="<?php echo base_url();?>assets1/scripts/main.min.js"></script>
</body>
</html>