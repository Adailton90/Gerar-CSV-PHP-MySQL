<?php
  function gerarCSVMysql(){

	// Obtendo os dados do Banco de dados:
	$connect = mysqli_connect("localhost","root","","cadastrousuario");
	$query = "SELECT * FROM usuarios";
	
	// Inserindo o conteúdo no arquivo:
	$list = mysqli_query($connect, $query) or die(mysqli_error( $connect ));;
	$fp = fopen('usuarios.csv', 'w');

	foreach ($list as $fields) {
		fputcsv($fp, $fields);
	}

	echo "\n Arquivo criado com sucesso \n";
	}
	
	gerarCSVMysql();
?>