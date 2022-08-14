<?php

require_once 'db/conexao.php';

$login = mysqli_escape_string($conn, trim($_POST["login"]));
$senha = mysqli_escape_string($conn, trim($_POST["senha"]));

$senha = md5($senha);

$sql = "SELECT * FROM tbcliente WHERE login = '".$login."' AND senha = '".$senha."' ";
$resultSetUsuario = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultSetUsuario) == 0){
	mysqli_close($conn);
	header("location: login.php?m=" . base64_encode("E-mail/senha inválidos"));
	exit;
}

//pegar os dados do usuario e redirecionar ele
$row = mysqli_fetch_assoc($resultSetUsuario);
mysqli_close($conn);
header("location: admin/");