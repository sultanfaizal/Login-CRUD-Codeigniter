<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Murid</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url();?>Formbaru/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Formbaru/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Formbaru/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Formbaru/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Formbaru/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Formbaru/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Formbaru/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Formbaru/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Formbaru/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Formbaru/css/main.css">
</head>
<body>
	
	<form class="form-group" method="POST" action = "<?php echo base_url();?>index.php/beranda/tambahdataguru">
		<div class="container-contact100">
		
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Tambah Guru

				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Nama</span>
					<input class="input100" type="text" name="nama" placeholder="Masukan Nama">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Mapel</span>
					<input class="input100" type="text" name="mapel" placeholder="Masukan Kelas">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Jumlah Jam pelajaran&nbsp</span>
					<input class="input100" type="text" name="jam" placeholder="Masukan Kelas">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Gaji</span>
					<input class="input100" type="text" name="gaji" placeholder="Masukan Kelas">
					<span class="focus-input100"></span>
				</div>

				

				
				

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span class="glyphicon glyphicon-plus"></span>
					Tambah Guru
						</button>
					</div>
				</div>
			</form>
		</div>
		</div>
	



	<div id="dropDownSelect1"></div>
	</form>


<!--===============================================================================================-->
	<script src="<?php echo base_url();?>Formbaru/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>Formbaru/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>Formbaru/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>Formbaru/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>Formbaru/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>Formbaru/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>Formbaru/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>Formbaru/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>Formbaru/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


</body>
</html>
