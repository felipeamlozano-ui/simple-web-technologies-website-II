<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafa decotes</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body class="body">
    <?php
    session_start();
    $nomeprincipal = $_SESSION['nomeglobal'] ?? '';
    $fotoglobal = $_SESSION['fotoglobal'] ?? 0;

    $primeiroNome = '';
    if (!empty($nomeprincipal)) {
        $primeiroNome = explode(" ", $nomeprincipal)[0];
    }
    ?>
    <header class="header-container">
        <div class="perfil-container">
            <div class="barrapp"></div>
            <p class="pnome" style="color: white;">
                <?php echo $primeiroNome ?>
            </p>
            <div class="perfil">
                <img src="<?php
                if ($fotoglobal == 1) {
                    echo '../IMAGENS/43117268-homem-silhueta-perfil-cenario-anime-estilo-gratis-vetor.jpg';
                } elseif ($fotoglobal == 2) {
                    echo '../IMAGENS/fotor-03d1a91a0cec4542927f53c87e0599f6.jpg';
                } else {
                    echo '../IMAGENS/icon-7797704_1280.png';
                }
                ?>" alt="Foto de perfil">
            </div>
        </div>
        <div class="cabecario">
            <button id="produtos" class="button1">Produtos</button>
            <button id="login" class="button1">Login</button>
            <button id="promotion" class="button1">Promoções</button>
            <button id="suporte" class="button1">Suporte</button>
            <div class="button2"></div>
            <div class="titulo">Rafa's Decotaria</div>
        </div>
    </header>
    <main>
        <h1 id="sobre">Sobre:</h1>
        <a href="../HTML/paginaprincipal.php" class="sobre1">Voltar</a>
        <ul>
        <li><h2 id="tema">Tema do Site:</h2>
        <p>O site consiste em uma loja virtual de peças de roupa, oferecendo uma grande variedade de vestimentas e produtos personalizados para os usuários escolherem.</p></li>
        <li><h2 id="relevancia">Relevância:</h2>
        <p>O tema foi escolhido por apresentar uma proposta atraente para todos os integrantes do grupo e por ser uma ótima oportunidade prática de se demonstrar como aplicações web com propostas simples e cotidianas, como uma loja de roupas, conseguem integrar diversos componentes complexos de JavaScript, CSS, PHP e HTML.</li>
        <li><h2 id="publico">Público-alvo:</h2>
        <p>Pessoas de todas idades e gostos, especialmente jovens e fãs de esportes, pela grande variedade de roupas esportivas e personalizadas disponíveis na loja.</p></li>
        <li><h2 id="objetivo">Objetivo final:</h2>
        <p>O site apresenta uma página principal, carregada no próprio servidor através de PHP, apresentando um cabeçalho direcionador para as demais páginas do site, um rodapé com informações sobre a equipe, termos de uso e página de suporte e, na parte principal da página, cards contendo as imagens e informações de cada produto, separados por setores como produtos e promoções. Quando a imagem do produto não é carregada, o JavaScript exibe uma animação de loading durante o período de espera.</p>
        <p>Há também uma página de login, na qual há um formulário em que o usuário pode inserir suas informaçoes pessoais, escolher uma foto de perfil e cadastrar sua conta, sendo estas processadas através de um script PHP e armazenadas no arquivo usuarios.txt, que valida o cadastro ou não do usuário inserido. Após o login, o site apresenta as informações do usuário e altera sua foto de perfil para o ícone cadastrado. 
        <p>A página de suporte permite entrar em contato com os administradores da página e enviar uma mensagem. O site é completamente responsivo em todos os dispositivos, incluindo computadores, tablets e celulares. Por fim, há um mecanismo de busca que permite pesquisar pelo nome de um produto em específico na página principal, utilizando-se JavaScript para se processar o comando inserido</p></li>
        </ul>
    </main>
    <footer>
        <div class="rodape">
            <div class="rodape1">
                <p class="creditos1"><a href="../google_terms_of_service_pt-BR_br.pdf" class="butaotermosdeuso">Termos
                        de Uso</a></p>
                <p class="creditos1"><a href="../HTML/suporte.html" class="butaoduvidas">Dúvidas</a></p>
                <p class="creditos1"><a href="../HTML/contato.html" class="butaocontato">Contato</a></p>
            </div>
            <div class="equipe">
                <p class="ppp">Conheça nossa Equipe:</p>
                <div>
                    <li class="lifooter">Felipe Augusto</li>
                    <li class="lifooter">Rafael Augusto</li>
                    <li class="lifooter">Daniel Godoi</li>
                </div>
            </div>
            <h1 class="titulorodape">Rafa's Decotaria</h1>
        </div>
    </footer>
    <script src="../JAVASCRIPT/script.js"></script>
</body>

</html>