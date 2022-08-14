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
        grid-template:  "topo" 80px
					    "perfil" 1fr
					    "rodape" 400px / auto;
        grid-auto-rows: auto;
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
        width: 35%;
        float: left;
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
        color: #E6DFC5;
        padding: 10px;
        border-radius: 8px;
        font-size: 1.2rem;
    }
    .perfil ul li a:hover{
        color: #83B0B5;
        background-color: #E6DFC5;
    }
    .perfil i{
        margin-right: 10px;
    }
    .dados{

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
			<h1><a href="../index.php">Infinito Sublime</a></h1>
            <div class="right">
                <a href="login.php"><i class="fa-solid fa-user"></i>MINHA CONTA</a>
                <a href="carrinho.php"><i class="fa-solid fa-cart-shopping"></i>CARRINHO</a>
                <input type="search" class="buscar" id="buscarProduto" placeholder="O que você procura?">
            </div>
		</header>
		<nav class="perfil">
			<ul>
                <li><a href=""><i class="fa-solid fa-user"></i>Meus dados</a></li>
                <li><a href=""><i class="fa-solid fa-clipboard"></i>Meus pedidos</a></li>
                <li><a href=""><i class="fa-regular fa-star"></i>Avaliação dos produtos</a></li>
                <li><a href=""><i class="fa-regular fa-clock"></i>Lista de espera</a></li>
                <li><a href=""><i class="fa-solid fa-rotate"></i>Trocas e devoluções</a></li>
                <li><a href=""><i class="fa-solid fa-user-lock"></i>Alterar senha</a></li>
                <li><a href=""><i class="fa-solid fa-right-from-bracket"></i>Sair</a></li>
            </ul>
            <section class="dados">

            </section>
		</nav>
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
					<li><a href="">Telefone: </a></li>
					<li><a href="">Horários de funcionamento</a></li>
					<li><a href="">Email:</a></li>
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