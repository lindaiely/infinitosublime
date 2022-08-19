<?php 
session_start();

$basePath = $_SERVER["DOCUMENT_ROOT"];
require_once $basePath . "/infinitosublime/util/funcao.php";

$baseUrl = url() . "/infinitosublime";

if (!isset($_SESSION["id"]) || !isset($_SESSION["nome"]) || !isset($_SESSION["login"])) {
    header("location: " . $baseUrl);
    exit;
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Infinito Sublime</title>
	<link rel="stylesheet" href="../css/reset.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<style>
    *{
	    box-sizing: border-box;
    }
    body, html{
        font-family: 'Rubik', sans-serif;
    }
    .container{
        display: grid;
        background-color: #E6DFC5;
        grid-template:  "topo topo" 80px
					    "perfil nav" 1fr
					    "rodape rodape" 400px / auto 850px;
        grid-auto-rows: auto;
        grid-gap: 3px;
    }
    header{
        grid-area: topo;
        background-color: #1E2335;
        display: flex;
    }
    header h1{
        margin: 30px;
    }
    header h1 a{
        text-decoration: none;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
    }
    header h1 a:hover{
        text-decoration: none;
        color: #1E2335;
        background-color: rgba(255, 255, 255, 0.938);
    }
    header input{
        padding: 8px 10px;
        border-radius: 5px;
        border: none;
        outline: none;
    }
    .topo .buscar{
        display: flex;
        margin: auto 25px
    }
    .topo .right{
        display: flex;
        margin: auto 45px;
        padding: 0px 0px 0px 33rem;
    }
    .topo a{
        text-decoration: none;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        margin: 0 6px 0 6px;
    }
    .topo a i{
        margin-right: 8px;
    }
    .topo a:hover{
        text-decoration: none;
        color: #1E2335;
        background-color: rgba(255, 255, 255, 0.938);
    }
	nav{
		grid-area: perfil;
        background-color: #E6DFC5;
	}
    .perfil{
        width: 100%;
        background-color: #83B0B5;
    }
    .perfil ul{
        padding: 3rem 5rem;
    }
    .perfil ul li{
        padding: 1.3rem;
    }
    .perfil ul li a{
        text-decoration: none;
        color: #000;
        padding: 10px;
        border-radius: 8px;
        font-size: 1.2rem;
    }
    .perfil ul li a:hover{
        color: #000;
        background-color: #E6DFC5;
    }
    .perfil i{
        margin-right: 10px;
    }
    section{
        grid-area: nav;
        display: flex;
        flex-wrap: wrap;
    }
    .pessoais{
        margin: auto 0 auto 5rem;
    }
    .pessoais h2{
        font-size: 1.4rem;
        margin: 0 auto 1.5rem auto;
    }
    .endereco h2{
        font-size: 1.4rem;
        margin: 0 auto 1rem auto;
    }
    .pessoais form, .endereco form{
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        flex: 1;
    }
    .pessoais input{
        border-radius: 0.3rem;
        border: none;
        outline: none;
        margin: 0.5rem 4rem 1rem auto;
        padding: 0.5rem 4rem 0.5rem 0.5rem;
        width: 100%;
    }
    .pessoais .btn{
        padding: 0.6rem 2rem;
        margin: auto;
        border: none;
        outline: none;
        cursor: pointer;
    }
    .endereco{
        margin: auto;
    }
    .endereco a{
        font-size: 0.8rem;
        color: #000;
    }
    .endereco input{
        border-radius: 0.3rem;
        border: none;
        outline: none;
        margin: 0.5rem 4rem 1rem auto;
        padding: 0.5rem 4rem 0.5rem 0.5rem;
        width: 100%;
    }
    .endereco .cep-aux input{
        margin-bottom: 4px;
    }
    .endereco .endereco-aux input{
        margin-top: 16px;
    }
    .endereco .btn{
        padding: 0.6rem 2rem;
        margin: auto;
        border: none;
        outline: none;
        cursor: pointer;
    }
	footer{
        grid-area: rodape;
        width: 100%;
        background-color: #1E2335;
    }
    .rodape{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .rodape p{
        margin-top: 35px;
        margin-bottom: 20px;
        color: #E6DFC5;
    }
    .rodape ul li{
        margin: 10px 0;
        color: #E6DFC5;
    }
    .rodape ul li a{
        text-decoration: none;
        color: #E6DFC5;
    }
    .redes ul li{
        display: inline;
        margin: 3px;
        font-size: 2rem;
    }
    .atendimento i{
        margin-right: 6px;
    }
    .break{
        flex-basis: 100%;
        height: 0;
    }
    .subrodape{
        display: flex;
        justify-content: center;
    }
</style>
	<div class="container">
		<header class="topo">
			<h1><a href="<?=$baseUrl?>/index.php">Infinito Sublime</a></h1>
            <div class="right">
                <a href="login.php"><i class="fa-solid fa-user"></i>Olá, <?=$_SESSION["nome"]?></a>
                <a href="carrinho.php"><i class="fa-solid fa-cart-shopping"></i>CARRINHO</a>
                <input type="search" class="buscar" id="buscarProduto" placeholder="O que você procura?">
            </div>
		</header>
		<nav class="perfil">
			<ul>
                <li><a href="<?=$baseUrl?>/admin"><i class="fa-solid fa-user"></i>Meus dados</a></li>
                <li><a href="<?=$baseUrl?>/admin/meus-pedidos.php"><i class="fa-solid fa-clipboard"></i>Meus pedidos</a></li>
                <li><a href="<?=$baseUrl?>/admin/avaliacao.php"><i class="fa-regular fa-star"></i>Avaliação dos produtos</a></li>
                <li><a href="<?=$baseUrl?>/admin/lista-espera.php"><i class="fa-regular fa-clock"></i>Lista de espera</a></li>
                <li><a href="<?=$baseUrl?>/admin/trocas.php"><i class="fa-solid fa-rotate"></i>Trocas e devoluções</a></li>
                <li><a href="<?=$baseUrl?>/admin/alterar-senha.php"><i class="fa-solid fa-user-lock"></i>Alterar senha</a></li>
                <li><a href="<?=$baseUrl?>/admin/sair.php"><i class="fa-solid fa-right-from-bracket"></i>Sair</a></li>
            </ul>
		</nav>
            <section class="dados">
                <div class="pessoais">
                    <h2>Dados pessoais</h2>
                    <form action="">
                        <label for="nome">Nome completo</label>
                        <div>
                            <input type="text" name="nome" id="nome" placeholder="">
                        </div>
                        <label for="email">E-mail</label>
                        <div>
                            <input type="text" name="email" id="email" placeholder="">
                        </div>
                        <label for="cpf">CPF</label>
                        <div>
                            <input type="text" name="cpf" id="cpf" placeholder="">
                        </div>
                        <label for="dtnascimento">Data de nascimento</label>
                        <div>
                            <input type="date" name="dtnascimento" id="dtnascimento" placeholder="">
                        </div>
                        <label for="telefone">Telefone</label>
                        <div>
                            <input type="text" name="telefone" id="telefone" placeholder="">
                        </div>
                        <input type="button" value="Salvar alterações" class="btn">
                    </form>
                </div>
                <div class="endereco">
                    <h2>Endereço de entrega</h2>
                    <form action="">
                        <div class="cep-aux">
                            <input type="text" name="cep" id="cep" placeholder="CEP">
                            <br>
                            <a href="">Não sei meu cep</a>
                        </div>
                        <div class="endereco-aux">
                            <input type="text" name="endereco" id="endereco" placeholder="Endereço(rua, avenida, quadra, lote)">
                        </div>
                        <div>
                            <input type="text" name="numero" id="numero" placeholder="Informe o número">
                        </div>
                        <div>
                            <input type="text" name="comp" id="comp" placeholder="Complemento">
                        </div>
                        <div>
                            <input type="text" name="bairro" id="bairro" placeholder="Bairro">
                        </div>
                        <div>
                            <input type="text" name="cidade" id="cidade" placeholder="Cidade">
                        </div>
                        <div>
                            <input type="text" name="estado" id="estado" placeholder="Estado">
                        </div>
                        <input type="button" value="Salvar alterações" class="btn">
                    </form>
                </div>
            </section>
		<footer class="rodape">
			<div class="institucional">
				<p>INSTITUCIONAL</p>
				<ul>
					<li><a href="">Quem somos</a></li>
					<li><a href="">Como comprar</a></li>
					<li><a href="">Feedback dos clientes</a></li>
					<li><a href="">Noticias</a></li>
					<li><a href="">Politica de privacidade</a></li>
					<li><a href="">Politica de troca e devolução</a></li>
					<li><a href="">Dúvidas frequentes</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</div>
			<div class="atendimento">
				<p>ATENDIMENTO</p>
				<ul>
                    <li><i class="fa-solid fa-phone"></i>(xx) xxxx-xxxx</li>
					<li><i class="fa-solid fa-clock"></i>09:00 às 17:30</li>
					<li><i class="fa-solid fa-envelope"></i>infinitosublime@gmail.com</li>
				</ul>
			</div>
			<div class="pagamento">
				<p>FORMAS DE PAGAMENTO</p>
			</div>
			<div class="redes">
				<p>REDES SOCIAIS</p>
				<ul>
					<li><a href="https://www.facebook.com/infinitosublime" target="_blank" rel="external"><i class="fa-brands fa-square-facebook"></i></a></li>
					<li><a href="https://www.instagram.com/infinitosublime/" target="_blank" rel="external"><i class="fa-brands fa-square-instagram"></i></a></li>
					<li><a href="" target="_blank" rel="external"><i class="fa-brands fa-square-whatsapp"></i></a></li>
				</ul>
			</div>
            <div class="break subrodape">
			    <p>&copy; Todos os direitos reservados - 2022</p>
		    </div>
		</footer>
	</div>
</body>
</html>