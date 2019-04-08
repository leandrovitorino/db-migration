<?php 
	// Exportação do banco de dados
	$origem = shell_exec("mysqldump -h $servidor -u $usuario -p$senha $dbname > backup/$dbname.sql");

	// Importação do banco de dados
	$destino = shell_exec("mysql -h $servidordest -u $usuariodest -p$senhadest $dbnamedest < backup/$dbname.sql");

	// Remove o arquivo .sql do servidor
	$remove = shell_exec('rm -rf backup/$dbname.sql');

	$_SESSION['msg'] = "<p align='center'><span style='color: green;'>Transferência efetuada com sucesso</span></p>";
 ?>