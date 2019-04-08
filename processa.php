<?php
session_start();

//Receber os dados do formulário
$servidor = $_SESSION['servidor'];
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
$dbname = $_SESSION['dbname'];

//Receber os dados do formulário
$servidordest = $_POST['servidor'];
$usuariodest = $_POST['usuario'];
$senhadest = $_POST['senha'];
$dbnamedest = $_POST['dbname'];

//Criar a conexao com BD
$conn2 = mysqli_connect($servidordest, $usuariodest, $senhadest, $dbnamedest);

if (!$conn2){
	$_SESSION['msg'] = "<p align='center'><span style='color: red;'>Erro ao conectar no banco de dados</span></p>";
	header("Location: destino.php");
}else{
	//Incluir o arquivo que gerar o backup
	include_once("transferir.php");

	header("Location: index.php");
}