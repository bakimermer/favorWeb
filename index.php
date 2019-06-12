<?php 
	if ($_POST) {
		include("admin/baglanti.php");
		$yaz = $baglanti->query('INSERT INTO records (name,email,phone,type,message) values ("'.$_POST['name'].'","'.$_POST['email'].'","'.$_POST['phone'].'","'.$_POST['type'].'","'.$_POST['message'].'")');

		if ($yaz) {
			echo "Başaralı";
		} else {
			echo "Başarısız";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form action="" method="POST" class="contact2-form validate-form">
					<span class="contact2-form-title">
						Bağış Formu
					</span>

					<div class="wrap-input2 validate-input" data-validate="İsim Gerekledir">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="Ad Soyad"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Email Gereklidir">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Telefon Gereklidir">
						<input class="input2" type="text" name="phone">
						<span class="focus-input2" data-placeholder="Telefon"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Seçiniz">
						<select name="type" style="width:100%;height:50px;border:0px solid">
						  <option value="">Seçiniz</option>
						  <option value="bagisVeren">Bağış Yapmak İstiyorum</option>
						  <option value="bagisAlan">Bağış Kabul Ediyorum</option>
						</select>

					</div>

					<div class="wrap-input2 validate-input" data-validate = "Mesaj Gereklidir.">
						<textarea class="input2" name="message"></textarea>
						<span class="focus-input2" data-placeholder="Mesaj"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								Gönder
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

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
