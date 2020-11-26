<?php
	$codigo = $_POST["codigo"];
	$tipo = $_POST["tipo"];
	$descricao = $_POST["descricao"];
	$data = $_POST["data"];
	$valor = $_POST["valor"];

	$conn = mysqli_connect('localhost', "root", "", 'banco')
	or die("Não foi possiível conectar.");

	mysqli_query($conn, "INSERT INTO conta_corrente (codigo, tipo, descricao, data, valor) VALUES ('$codigo', '$tipo', 
		'$descricao', '$data', '$valor')") or die("Não foi possível fazer a inserção.");
	mysqli_close($conn);

	if (mysqli_insert_id($conn)) {
		header("Location: insercao.php");
	} else {
		header("Location: insercao.php");
	}
?>