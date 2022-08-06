<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Criar conta</title>
	<link rel="stylesheet" href="css/reset.css">
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
					    "criarconta" 1fr
					    "rodape" auto;
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
        padding: 0px 0px 0px 38rem;
    }
    .topo a{
        text-decoration: none;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
    }
    .topo a:hover{
        text-decoration: none;
        color: #1E2335;
        background-color: rgba(255, 255, 255, 0.938);
    }
	nav{
		grid-area: criarconta;
		width: 100%;
		background-color: #83B0B5;
		margin: 2rem auto;
        padding: 3.5rem 6rem;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        border-radius: 0.8rem;
	}

	footer{
        grid-area: rodape;
        width: 100%;
        background-color: #1E2335;
    }
    .rodape{
        display: flex;
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
    .subrodape p{
        display: flex;
        flex-wrap: wrap;
        border-top: 1px solid #E6DFC5;
    }
	</style>
	<div class="container">
		<header class="topo">
			<h1><a href="index.php">Infinito Sublime</a></h1>
            <div class="right">
                <a href="login.php">MINHA CONTA</a>
                <a href="carrinho.php">CARRINHO</a>
                <input type="search" class="buscar" id="buscarProduto" placeholder="O que você procura?">
            </div>
		</header>
		<nav class="criarconta">
			<h2>Crie sua conta</h2>
			<form action="">
				<label for="">Nome</label>
					<div class="input-wrapper input-nome">
						<input type="text" name="nome" id="nome" placeholder="Nome">
					</div>
                <label for="">E-mail</label>
					<div class="input-wrapper input-login">
						<input type="text" name="login" id="login" placeholder="Email">
					</div>
                <label for="">Senha</label>
					<div class="input-wrapper input-senha">
						<input type="password" name="senha" id="senha" placeholder="Senha">
					</div>
					<div class="input-wrapper input-senha">
						<input type="password" name="senha" id="senha" placeholder="Confirme sua senha">
					</div>
					<div class="auxiliar">
                    <label for="aux">
                        <input type="checkbox" name="aux" id="aux">
                        Gostaria de receber promoções, noticias e novidades sobre a loja
                    </label>
					<p>Ao criar sua conta, você concorda com os nossos <a href="">Termos de uso</a> e com a <a href="">Politica de privacidade</a>.</p>
                </div>
                <button class="btn btn-danger">Criar conta</button>
				<p>Já tem uma conta? <a href="login.php">Login</a> </p>
            </form>
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
            <div class="subrodape">
			    <p>&copy; Todos os direitos reservados - 2022</p>
		    </div>
		</footer>
	</div>
</body>
</html>