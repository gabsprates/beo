<?php
// definições de host, database, usuário e senha
$servidor = "localhost";
$usuario  = "root";
$senha 	  = "root";
$banco = "curriculoFacomp";

// Criando a conexão
$link = mysqli_connect($servidor, $usuario, $senha, $banco)or die(mysqli_connect_error());
mysqli_set_charset($link, "utf8")or die(mysqli_error($link));