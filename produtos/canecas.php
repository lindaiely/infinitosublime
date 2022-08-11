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
					    "areacanecas" 1fr
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
	.areacanecas{
		grid-area: areacanecas;
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
    #news button{
		background-color: #fff;
		cursor: pointer;
	}
	#news button:hover{
		background-color: #E6DFC5;
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
                <a href="../login.php"><i class="fa-solid fa-user"></i>MINHA CONTA</a>
                <a href="../carrinho.php"><i class="fa-solid fa-cart-shopping"></i>CARRINHO</a>
                <input type="search" class="buscar" id="buscarProduto" placeholder="O que você procura?">
            </div>
		</header>
			<article class="promo">
				destaque
			</article>
		<nav class="menu">
			<ul>
				<li><a href="">TEMAS</a></li>
				<li><a href="camisas.php">CAMISAS</a></li>
				<li><a href="canecas.php">CANECAS</a></li>
				<li><a href="">QUADROS</a></li>
			</ul>
		</nav>
		<nav class="areacanecas">
			<section class="sessao-produtos">
				<div class="container-sessao-produtos">
					<div class="card-thumb">
						<a href="">
							<img src="../img/caneca01-venom.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Venom</a>
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
							<img src="../img/caneca02-matrix.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Matrix</a>
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
							<img src="../img/caneca03-matrix.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Matrix</a>
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
							<img src="../img/caneca04-stw.jpg" id="card-img" alt="">
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
							<img src="../img/caneca05-lula.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Nadando em lágrimas dos bolsominions</a>
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
							<img src="../img/caneca06-lula.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">O pai ta on</a>
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
							<img src="../img/caneca07-lula.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Lula</a>
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
							<img src="../img/caneca08-lula.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Lula vale a luta!</a>
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
							<img src="../img/caneca09-natal.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Feliz natal para você e sua família !</a>
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
							<img src="../img/caneca10-natal.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Feliz natal !</a>
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
							<img src="../img/caneca11-natal.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Feliz natal !</a>
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
							<img src="../img/caneca12-natal.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Feliz natal !</a>
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
							<img src="../img/caneca16-dc.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Liga da justiça</a>
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
							<img src="../img/caneca17-dc.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">X-men</a>
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
							<img src="../img/caneca18-dc.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Coringa</a>
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
							<img src="../img/caneca19-dc.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Deadpool</a>
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
							<img src="../img/caneca20-dc.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Batman</a>
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
							<img src="../img/caneca21-dc.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">The flash</a>
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
							<img src="../img/caneca22-dc.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Liga da justiça</a>
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
							<img src="../img/caneca23-dc.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Batman</a>
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
							<img src="../img/caneca24-dc.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Coringa</a>
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
							<img src="../img/caneca25-dc.jpg" id="card-img" alt="">
						</a>
						<div class="card-thumb-info">
							<a href="">Batman</a>
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