<?php

require_once "db/conexao.php";

// Resgatar os dados do formulário

$nome = trim($_POST["nome"]);
$login = trim($_POST["login"]);
$senha = trim($_POST["senha"]);

// passar pelo escape por questao de segurança dos dados
$nome = mysqli_escape_string($conn, $nome);
$login = mysqli_escape_string($conn, $login);
$senha = mysqli_escape_string($conn, $senha);

$msg = "";
$valido = true;

// Validação de dados na segunda camada (no servidor)
if($nome == "" || $login == "" || $senha == ""){
	$msg = "Preencha todos os campos";
	$valido = false;
}

//Validar se o login ja existe no bd
$sqllogin = "SELECT login FROM tbcliente WHERE login = '".$login."' ";
$resultsetLogin = mysqli_query($conn, $sqllogin);

if(mysqli_num_rows($resultsetLogin) > 0){
	$msg = "O login ($login) já existe no sistema!";
	$valido = false;
}

// criptografando a senha antes de inseri-la no bd
$senha = md5($senha);

if($valido){
	$sql = "INSERT INTO tbcliente VALUES (NULL, '$nome', '$login', '$senha')";

	if(mysqli_query($conn, $sql))
		//$msg = "Dados cadastrados com sucesso";
		$msg = 'Dados cadastrados com Sucesso!';
	else
		$msg = "Ocorreu um erro";
}


mysqli_close($conn);

//bate nessa pagina, seta uma mensagem e volta pra pagina de cadastrar com a mensagem
header("location: criar-conta.php?m=". base64_encode($msg));

//echo "<script>alert('Dados cadastrados com Sucesso!');</script>";
//header("location: criar-conta.php");
//echo "window.location='criar-conta.php';";