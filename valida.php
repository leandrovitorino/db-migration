<?php  

	session_start();

	$servidor = $_POST['servidor'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$dbname = $_POST['dbname'];

	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if (!$conn){
		$_SESSION['msg'] = "<p align='center'><span style='color: red;'>Erro ao conectar no banco de dados</span></p>";
		header("Location: index.php");
	}else{
		$_SESSION['msg'] = "<p align='center'><span style='color: green;'>O banco foi conectado com sucesso</span></p>";
		
		$_SESSION['servidor'] = $servidor;
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha'] = $senha;
		$_SESSION['dbname'] = $dbname;

		header("Location: destino.php");
	}
?>