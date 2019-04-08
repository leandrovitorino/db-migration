<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Migrando o Banco de Dados</title>
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link href='support/style.css' rel='stylesheet' />
	    <link href='nprogress.css' rel='stylesheet' />
	    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700,400italic' rel='stylesheet' type='text/css'>
	    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  		<script src='nprogress.js'></script>
  		<script>if(location.hostname.match(/ricostacruz\.com$/)){var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-20473929-1"]),_gaq.push(["_trackPageview"]),function(){var a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)}()}</script>
	</head>
	<body>
		<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
		<div class="wrap-contact2">
		<?php
		if(isset($_SESSION['msg'])){
			echo "<p>".$_SESSION['msg']."</p>";
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php" enctype="multipart/form-data" class="contact2-form validate-form">
			<span class="contact2-form-title">
				Destino
			</span>
			<div class="wrap-input2 validate-input">
				<label>Servidor: </label>
				<input type="text" name="servidor" placeholder="Nome do servidor"><br><br>
				<span class="focus-input2"></span>
			</div>
			<div class="wrap-input2 validate-input">
				<label>Usuário: </label>
				<input type="text" name="usuario" placeholder="Nome do usuário"><br><br>
				<span class="focus-input2"></span>
			</div>
			<div class="wrap-input2 validate-input">
				<label>Senha: </label>
				<input type="password" name="senha" placeholder="Senha da base de dados"><br><br>
				<span class="focus-input2"></span>
			</div>
			<div class="wrap-input2 validate-input">
				<label>Base de Dados: </label>
				<input type="text" name="dbname" placeholder="Nome da base de dados"><br><br>
				<span class="focus-input2" ></span>
			</div>
			<div class="container-contact2-form-btn">
				<div class="wrap-contact2-form-btn">
					<div class="contact2-form-bgbtn"></div>
						<button type="submit" class="contact2-form-btn">Transferir
						</button>
				</div>
			</div>
		</form>
		</div>
		</div>
		</div>
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="js/main.js"></script>
		<script>
		    $('body').show();
		    $('.version').text(NProgress.version);
		    NProgress.start();
		    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);

		    $("#b-0").click(function() { NProgress.start(); });
		    $("#b-40").click(function() { NProgress.set(0.4); });
		    $("#b-inc").click(function() { NProgress.inc(); });
		    $("#b-100").click(function() { NProgress.done(); });
		</script>
  		<script>var HN=[];HN.factory=function(e){return function(){HN.push([e].concat(Array.prototype.slice.call(arguments,0)))};},HN.on=HN.factory("on"),HN.once=HN.factory("once"),HN.off=HN.factory("off"),HN.emit=HN.factory("emit"),HN.load=function(){var e="hn-button.js";if(document.getElementById(e))return;var t=document.createElement("script");t.id=e,t.src="//hn-button.herokuapp.com/hn-button.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n)},HN.load();</script>
	</body>
</html>