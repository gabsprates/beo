<?php
	$servidor = "localhost";
	$usuario  = "root";
	$senha 	  = "root";

	// Criando a conexão
	$conn = new mysqli($servidor, $usuario, $senha);

	// Conferindo a conexão
	if ($conn->connect_error) {
	    die("A Conexão falhou: " . $conn->connect_error);
	} 
	//echo "Conexão efetuada com sucesso!";