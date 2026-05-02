<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Mael Projects</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left"><h1>Logo</h1></div>
            <nav class="desktop right">
                <ul>
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#servico">Serviço</a></li>
                </ul>
            </nav><!--desktop--->
            <nav class="mobile">
                <ul>
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#servico">Serviço</a></li>
                </ul><!--mobile--->
            </nav>
             <div class="clear"></div>
        </div><!--center--->
    </header>

    <section class="inicio">
        <div class="center">
        <img src="" alt="">
        <h1>Mael Devs - Criando Soluções Digitais em forma de site!</h1>
        </div><!---center--->
    </section><!---inicio--->

    <section class="sobre">
        <div class="center">
        <div class="w50 left">
            <h2>Ismael S. Almeida</h2>
            <p>Calouro de Engenharia de Software, Sou desenvolvedor web apaixonado por transformar ideias em sistemas funcionais. Trabalho principalmente com PHP puro e gosto de manter o código limpo, organizado e sem gambiarra. Estou sempre evoluindo e buscando criar soluções que realmente funcionam.</p>
        </div><!---w50--->
        <div class="w50 right">
            <img src="" alt="">
        </div><!---w50--->
         <div class="clear"></div>
        </div><!---center--->
    </section><!---sobre--->

    <section class="especialidades">
        <div class="center">
            <h2>Especialidades</h2>
            <div class="box-especialidades w25 left">
                <h3><i class="fa-solid fa-file-code"></i></h3>
                <h4>PHP</h4>
                <p>PHP (Hypertext Preprocessor) é uma linguagem de script open source, de uso geral, amplamente utilizada no lado do servidor (server-side) para desenvolvimento web. Ele permite criar sites dinâmicos e interativos, sendo incorporado diretamente no HTML. A versão 8.5 traz melhorias como novos tipos e operadores, e é a base de grande parte da web</p>
            </div><!---w25--->
            <div class="box-especialidades w25 left">
                <h3><i class="fa-solid fa-file-code"></i></h3>
                <h4>HTML5</h4>
                <p>HTML (HyperText Markup Language) é a linguagem de marcação usada para estruturar páginas web, organizando textos, imagens, links e outros elementos.</p>
            </div><!---w25--->
            <div class="box-especialidades w25 left">
                <h3><i class="fa-brands fa-css"></i></h3>
                <h4>CSS</h4>
                <p>CSS (Cascading Style Sheets) é a linguagem usada para estilizar e controlar a aparência visual de uma página HTML. Ele define o layout, cores, fontes, espaçamentos e outros estilos. Basicamente, enquanto o HTML estrutura o conteúdo, o CSS cuida do design.</p>
            </div><!---w25--->
            <div class="box-especialidades w25 left">
                <h3><i class="fa-brands fa-js"></i></h3>
                <h4>JS</h4>
                <p>JS (JavaScript) é uma linguagem de programação que traz interatividade para as páginas web. Com JS, você pode manipular elementos HTML e CSS, responder a ações do usuário, como cliques e preenchimentos de formulários, e realizar cálculos ou carregamentos dinâmicos de conteúdo sem precisar recarregar a página.</p>	
            </div><!---w25--->
            <div class="clear"></div>
       </div><!---center--->
    </section>

    <section class="servico">
        <div class="center">
            <h2>Serviços</h2>
            <ul>
                <li>Criação de sites</li>
                <li>Sistemas de login/autenticação</li>
                <li>Painéis administrativos</li>
                <li>Ajustes e melhorias visuais</li>
                <li>Suporte Help Desk</li>
            </ul>
        </div><!---center--->
    </section><!---serviço--->

    <footer class="<?php if(isset($pagina_erro) && $pagina_erro===true) echo "fixed";?>">
		<div class="center">
			<p>Todos os direitos reservados.</p>
			<div class="clear"></div>
		</div>	
	</footer>
</body>
</html>