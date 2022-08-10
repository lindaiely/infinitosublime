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
						"promo" 200px
						"menu" 70px
					    "areacamisas" 1fr
                        "news"
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
	article{
		grid-area: promo;
		background-color: #E25345;
	}
	nav{
		grid-area: menu;
		background-color: #83B0B5;
		display: flex;
		justify-content: center;
	}
	.menu ul li{
		display: inline;
		position: relative;
		top: 40%;
		margin: 0 20px;
	}
	.menu ul li a{
		text-decoration: none;
		color: rgba(255, 255, 255, 0.938);
		padding: 10px;
		border-radius: 8px;
	}
	.menu ul li a:hover{
		color: #83B0B5;
		background-color: rgba(255, 255, 255, 0.938);
	}
	.areacamisas{
		grid-area: areacamisas;
		background-color: #E6DFC5;
	}
	.container-sessao-produtos{
		display: flex;
		flex-wrap: wrap;
	}
	.container-produtos{
		grid-area: produtos;
		background-color: #E6DFC5;
		margin-right: 4px;
	}
	.container-sessao-produtos .card-thumb{
		margin: 3px 30px;
	}
	.card-thumb{
		max-width: 265px;
	}
	.card-thumb-info{
		text-align: center;
		width: 100%;
		margin: 5px;
	}
	.card-thumb #card-img{
		width: 290px;
		height: 290px;
		border-radius: 15px;
	}
	.card-thumb .card-thumb-info a{
		text-decoration: none;
		font-size: 18px;
		color: #1E2335;
	}
	.card-thumb-detalhes{
		margin-bottom: 25px;
	}
	.card-thumb-precos{
		font-size: 18px;
		color: #1E2335;
		margin-top: 5px;
		margin-bottom: 3px;
	}
	.card-thumb-parcial-precos{
		font-size: 14px;
		color: #1E2335;
	}
	#news{
        grid-area: news;
        padding: 20px;
        background-color: #E25345;
    }
    #news p{
        font-size: 18px;
    }
    #news form{
        display: flex;
    }
    #news form > *{
        flex: 1;
        border: none;
        outline: none;
        padding: 5px 8px;
        margin: 0 10px;
        border-radius: 8px;
    }
    .btn{
        margin: 0.5rem 0 1.5rem;
        padding: 1rem;
        border: none;
        outline: none;
        color: #E6DFC5;
        border-radius: 0.3rem;
    }
    button{
        cursor: pointer;
    }
    .btn-danger{
        background-color: #E25345;
    }
    .auxiliar input[type="checkbox"]{
        margin: 0;
        padding: 0;
    }
    .auxiliar a{
        color: #E6DFC5;
        text-decoration: none;
        margin: auto;
    }
    .input-wrapper{
        position: relative;
        color: #E6DFC5;
        font-weight: bold;
        font-family: "Font Awesome 5 free";
    }
    .input-login::before{
        content: "\f007";
        position: absolute;
        top: 1.5rem;
        left: 1rem;
    }
    .input-senha::before{
        content: "\f084";
        position: absolute;
        top: 1.5rem;
        left: 1rem;
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
                <a href="../login.php">MINHA CONTA</a>
                <a href="../carrinho.php">CARRINHO</a>
                <input type="search" class="buscar" id="buscarProduto" placeholder="O que você procura?">
            </div>
		</header>
			<article class="promo">
				destaque
			</article>
		<nav class="menu">
			<ul>
				<li><a href="">TEMAS</a></li>
				<li><a href="produtos/camisas.php">CAMISAS</a></li>
				<li><a href="">CANECAS</a></li>
				<li><a href="">QUADROS</a></li>
			</ul>
		</nav>
		<nav class="areacamisas">
			<section class="sessao-produtos">
				<div class="container-sessao-produtos">
					<div class="card-thumb">
						<a href="">
							<img src="../img/camisa01-marvel.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Homem de ferro</a>
							<div class="card-thumb-detalhes">
								<div class="card-thumb-precos">
									<span>R$ 39,90</span>
								</div>
								<div class="card-thumb-parcial-precos">
									ou 3x R$ 9,90 sem juros
								</div>
							</div>
						</div>
					</div>
					<div class="card-thumb">
						<a href="">
							<img src="../img/camisa02-marvel.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Viúva negra</a>
							<div class="card-thumb-detalhes">
								<div class="card-thumb-precos">
									<span>R$ 39,90</span>
								</div>
								<div class="card-thumb-parcial-precos">
									ou 3x R$ 9,90 sem juros
								</div>
							</div>
						</div>
					</div>
					<div class="card-thumb">
						<a href="">
							<img src="../img/camisa03-marvel.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Groot</a>
							<div class="card-thumb-detalhes">
								<div class="card-thumb-precos">
									<span>R$ 39,90</span>
								</div>
								<div class="card-thumb-parcial-precos">
									ou 3x R$ 9,90 sem juros
								</div>
							</div>
						</div>
					</div>
					<div class="card-thumb">
						<a href="">
							<img src="../img/camisa04-marvel.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Pantera negra</a>
							<div class="card-thumb-detalhes">
								<div class="card-thumb-precos">
									<span>R$ 39,90</span>
								</div>
								<div class="card-thumb-parcial-precos">
									ou 3x R$ 9,90 sem juros
								</div>
							</div>
						</div>
					</div>
					<div class="card-thumb">
						<a href="">
							<img src="../img/camisa05-bb.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Breaking bad</a>
							<div class="card-thumb-detalhes">
								<div class="card-thumb-precos">
									<span>R$ 39,90</span>
								</div>
								<div class="card-thumb-parcial-precos">
									ou 3x R$ 9,90 sem juros
								</div>
							</div>
						</div>
					</div>
					<div class="card-thumb">
						<a href="">
							<img src="../img/camisa06-bb.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Breaking bad</a>
							<div class="card-thumb-detalhes">
								<div class="card-thumb-precos">
									<span>R$ 39,90</span>
								</div>
								<div class="card-thumb-parcial-precos">
									ou 3x R$ 9,90 sem juros
								</div>
							</div>
						</div>
					</div>
					<div class="card-thumb">
						<a href="">
							<img src="../img/camisa07-stw.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Star wars</a>
							<div class="card-thumb-detalhes">
								<div class="card-thumb-precos">
									<span>R$ 39,90</span>
								</div>
								<div class="card-thumb-parcial-precos">
									ou 3x R$ 9,90 sem juros
								</div>
							</div>
						</div>
					</div>
					<div class="card-thumb">
						<a href="">
							<img src="../img/camisa08-stw.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Star wars</a>
							<div class="card-thumb-detalhes">
								<div class="card-thumb-precos">
									<span>R$ 39,90</span>
								</div>
								<div class="card-thumb-parcial-precos">
									ou 3x R$ 9,90 sem juros
								</div>
							</div>
						</div>
					</div>
					<div class="card-thumb">
						<a href="">
							<img src="../img/camisa09-rm.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Rick and Morty</a>
							<div class="card-thumb-detalhes">
								<div class="card-thumb-precos">
									<span>R$ 39,90</span>
								</div>
								<div class="card-thumb-parcial-precos">
									ou 3x R$ 9,90 sem juros
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</nav>
		<section id="news">
            <form action="">
				<p>CADASTRE-SE E RECEBA NOSSAS NOVIDADES</p>
				<input type="nome" name="nome" id="nome" placeholder="Nome">
                <input type="email" name="email" id="email" placeholder="E-mail">
                <button>Cadastrar</button>
            </form>
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