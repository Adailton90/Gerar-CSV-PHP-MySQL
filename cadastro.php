
<?php

function insert(){
	$nome = $_POST['nome'];
	$data = $_POST['data_de_admissao'];
	$data_de_admissao = implode("-", array_reverse(explode("/", $data)));
	$cargo = $_POST['cargo'];
	$gestor = $_POST['gestor'];
	$cc = $_POST['cc'];
	$matricula = $_POST['matricula'];
	$local_trabalho = $_POST['local_trabalho'];
	$sugestao1 = $_POST['sugestao1'];
	$sugestao2 = $_POST['sugestao2'];
	$sugestao3 = $_POST['sugestao3'];


	$connect = mysqli_connect("localhost","root","","cadastrousuario");
	$query = "INSERT INTO usuarios values(null, '$nome', '$data_de_admissao', '$cargo', '$gestor', '$cc', '$matricula', '$local_trabalho', '$sugestao1', '$sugestao2', '$sugestao3') ";
	$insert = mysqli_query($connect, $query) or die(mysqli_error( $connect ));

	echo "Usuario cadastrado com sucesso \n";
	header("Location:form.html");
} 
insert();

?>