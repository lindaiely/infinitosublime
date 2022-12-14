<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Infinito Sublime</title>
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
					    "arealogin" 1fr
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
    .login{
        grid-area: arealogin;
        background-color: #83B0B5;
        margin: 2rem auto;
        padding: 3.5rem 6rem;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        border-radius: 0.8rem;
    }
    .login h2{
        font-size: 1.6rem;
        color: #000;
        margin: 0 auto 1rem auto;
        text-align: center;
    }
    .login form{
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        flex: 1;
    }
    .login input{
        border-radius: 0.3rem;
        border: none;
        outline: none;
        background-color: #1E2335;
        color: #E6DFC5;
        margin: 0.5rem 4.5rem 1.5rem auto;
        padding: 1rem 4rem 1rem 2.5rem;
    }
    #login, #senha{
        width: 100%;
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
    .login .btn{
        margin: 0.5rem 0 1.5rem;
        padding: 1rem;
        border: none;
        outline: none;
        color: #E6DFC5;
        border-radius: 0.3rem;
        cursor: pointer;
    }
    .login .btn-danger{
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
			<h1><a href="index.php">Infinito Sublime</a></h1>
            <div class="right">
                <a href="login.php"><i class="fa-solid fa-user"></i>MINHA CONTA</a>
                <a href="carrinho.php"><i class="fa-solid fa-cart-shopping"></i>CARRINHO</a>
                <input type="search" class="buscar" id="buscarProduto" placeholder="O que voc?? procura?">
            </div>
		</header>
    <nav class="login">
            <?php if(isset($_GET["m"])){ ?>
                <div id="message">
                    <?=base64_decode($_GET["m"])?>
                </div>
            <?php } ?>
        <h2>Fa??a seu login</h2>
            <form action="logar.php" method="post">
                <label for="login">E-mail</label>
                <div class="input-wrapper input-login">
                    <input type="text" name="login" id="login" placeholder="E-mail">
                </div>
                <label for="senha">Senha</label>
                <div class="input-wrapper input-senha">
                    <input type="password" name="senha" id="senha" placeholder="Senha">
                </div>
                <input type="submit" value="Entrar" class="btn btn-danger">
                <div class="auxiliar">
                    <br>
                    <a href="">Esqueceu sua senha?</a> <br><br>
                    <p>Novo por aqui? <a href="criar-conta.php">Crie sua conta</a></p>
                </div>
            </form>
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
					<li><a href="">Politica de troca e devolu????o</a></li>
					<li><a href="">D??vidas frequentes</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</div>
			<div class="atendimento">
				<p>ATENDIMENTO</p>
				<ul>
                    <li><i class="fa-solid fa-phone"></i>(xx) xxxx-xxxx</li>
					<li><i class="fa-solid fa-clock"></i>09:00 ??s 17:30</li>
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