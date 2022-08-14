<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "infsublime";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(mysqli_connect_errno()){
	echo "Erro na conexao com o banco de dados " . mysqli_connect_error();
	exit;
}