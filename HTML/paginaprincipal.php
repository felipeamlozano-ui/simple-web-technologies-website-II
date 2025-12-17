<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rafa decotes</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<?php ?>

<body class="body">
    <?php
    session_start();
    // Nome e foto do usuário
    $nomeprincipal = $_SESSION['nomeglobal'] ?? '';
    $fotoglobal = $_SESSION['fotoglobal'] ?? 0;

    // Pega o primeiro nome
    $primeiroNome = '';
    if (!empty($nomeprincipal)) {
        $primeiroNome = explode(" ", $nomeprincipal)[0];
    }

    // Carrinho do usuário logado
    $carrinho = $_SESSION['carrinho'] ?? [];
    $quantidade = count($carrinho);
    ?>
    <header class="header-container">
        <div class="perfil-container">
            <div class="barrapp"></div>
            <p class="pnome" style="color: white;">
                <?php echo htmlspecialchars($primeiroNome); ?>
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
        <div class="buttons">
            <button id="produtos" class="button1">Produtos</button>
            <button id="login" class="button1">Login</button>
            <button id="promotion" class="button1">Promoções</button>
            <button id="suporte" class="button1">Suporte</button>
        </div>
        <div class="titulo">Rafa's Decotaria</div>
        <div id="carrinho-de-compra" style="cursor: pointer;">
            <svg class="svgdocarrinho" style="margin-top: 10px;" xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960"
                width="34px" fill="#e3e3e3">
                <path
                    d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z" />
            </svg>
            <p class="textodocarrinho">Carrinho
                <span>
                    <div id="circulo-cart">
                        <span id="contador-cart"></span>
                    </div>
                </span>
            </p>
        </div>
        <input type="checkbox" id="theme-toggle" class="toggle">

        <label for="theme-toggle" class="switch">
            <span class="knob">

                <!-- Ícone de sol -->
                <span class="icon light-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="yellow">
                        <path d="M440-760v-160h80v160h-80Zm266 110-55-55 112-115 56 57-113 113Zm54 210v-80h160v80H760ZM440-40v-160h80v160h-80ZM254-652 140-763l57-56 113 113-56 54Zm508 512L651-255l54-54 114 110-57 59ZM40-440v-80h160v80H40Zm157 300-56-57 112-112 29 27 29 28-114 114Zm283-100q-100 0-170-70t-70-170q0-100 70-170t170-70q100 0 170 70t70 170q0 100-70 170t-170 70Zm0-80q66 0 113-47t47-113q0-66-47-113t-113-47q-66 0-113 47t-47 113q0 66 47 113t113 47Zm0-160Z" />
                    </svg>
                </span>

                <!-- Ícone de lua -->
                <span class="icon dark-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="black">
                        <path d="M484-80q-84 0-157.5-32t-128-86.5Q144-253 112-326.5T80-484q0-146 93-257.5T410-880q-18 99 11 193.5T521-521q71 71 165.5 100T880-410q-26 144-138 237T484-80Zm0-80q88 0 163-44t118-121q-86-8-163-43.5T464-465q-61-61-97-138t-43-163q-77 43-120.5 118.5T160-484q0 135 94.5 229.5T484-160Z" />
                    </svg>
                </span>
            </span>
        </label>
        </label>
    </header>

    <script>
        document.getElementById("carrinho-de-compra").addEventListener("click", function() {
            window.location.href = './carrinho.php';
        });
    </script>
    <main class="main-container">
        <button id="btm" class="botaomatriz">Voltar</button>
        <div class="categorias">
            <form onsubmit="return false;">
                <input class="pesquisar" type="text" id="pesquisar" placeholder="Pesquisar na página...">
            </form>
        </div>
        <h1 id="hh" class="hh">Promoções</h1>
        <div id="cc1" class="cards-container">
            <div class="card-element" data-img="../IMAGENS/transferir.jpeg" data-text="Camisa simples
            Cor: Preta
            Preço: R$79,90">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
            </div>
            <div class="card-element"
                data-img="../IMAGENS/WhatsApp_Image_2025-10-05_at_11.54.46-removebg-preview (1).png" data-text="Camisa PSG
            Cor: Azul
            Preço: R$399,90">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
            </div>
            <div class="card-element" data-img="../IMAGENS/WhatsApp_Image_2025-10-05_at_12.40.02-removebg-preview.png"
                data-text="Camisa Com Desenho de Leão
            Cor: Preto
            Preço: R$178,90">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
            </div>
            <div class="card-element" data-img="../IMAGENS/WhatsApp_Image_2025-10-05_at_12.41.18-removebg-preview.png"
                data-text="Camisa Corinthians
            Cor: Branco
            Preço: R$299,90">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
            </div>
            <div class="card-element" data-img="../IMAGENS/WhatsApp_Image_2025-10-05_at_12.42.12-removebg-preview.png"
                data-text="Camisa Polo Com Detalhes
            Cor: Branco
            Preço: R$69,90">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
            </div>
            <div class="card-element" data-img="../IMAGENS/WhatsApp_Image_2025-10-05_at_12.42.40-removebg-preview.png"
                data-text="Camisa Polo Clássica
            Cor: Azul
            Preço: R$89,90">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
            </div>
            <div class="card-element"
                data-img="../IMAGENS/camisa_feminina_kombat_iii_camisas_negras_51_1_39eba36c933e24ab07c25b2638231955-removebg-preview.png"
                data-text="Camisa Feminina Kombat Vasco
            Cor: Preto
            Preço: R$489,90">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
            </div>
            <div class="card-element" data-img="../IMAGENS/imagewujheds-removebg-preview.png" data-text="Camisa Manchester City Puma
            Cor: Azul Claro
            Preço: R$389,90">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
            </div>
            <div class="card-element" data-img="../IMAGENS/Camisa-Time-Melvin-002-removebg-preview.png" data-text="Camisa Esportiva Com Detalhes
            Cor: Preto - Ciano
            Preço: R$189,90">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
            </div>
            <div class="card-element" data-img="../IMAGENS/images__1_-removebg-preview.png" data-text="Camisa Florida de Praia com Detalhes
            Cor: Preto
            Preço: R$81,90">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
            </div>
        </div>
        <div id="pp1" class="paragrafo1">
            <h2 id="pp3">Destaques Da Loja</h2>
            <div class="Produtoscoluna">
                <div class="produtos">
                    <div class="divp">
                        <div class="carde-element" data-img="../IMAGENS/image-removebg-preview (1).png" data-text="Camisa Michael
                        Jordan">
                            <div class="loader-wrapper1">
                                <div class="animacaoload1"></div>
                            </div>
                        </div>
                        <div class="carde-element" data-img="../IMAGENS/image-removebg-preview.png" data-text="Camisa Polo Clássica">
                            <div class="loader-wrapper1">
                                <div class="animacaoload1"></div>
                            </div>
                        </div>
                        <div class="carde-element" data-img="../IMAGENS/image-removebg-preview (2).png" data-text="Camisa Seleção Brasileira">
                            <div class="loader-wrapper1">
                                <div class="animacaoload1"></div>
                            </div>
                        </div>
                        <div class="carde-element" data-img="../IMAGENS/image-removebg-preview (3).png" data-text="Camisa Palmeiras Clássica">
                            <div class="loader-wrapper1">
                                <div class="animacaoload1"></div>
                            </div>
                        </div>
                        <div class="carde-element" data-img="../IMAGENS/image-removebg-preview (4).png" data-text="Camisa Florida de Praia">
                            <div class="loader-wrapper1">
                                <div class="animacaoload1"></div>
                            </div>
                        </div>
                        <div class="carde-element" data-img="../IMAGENS/image-removebg-preview (5).png" data-text="Camisa de Time
                         EA-Sports">
                            <div class="loader-wrapper1">
                                <div class="animacaoload1"></div>
                            </div>
                        </div>
                        <div class="carde-element" data-img="../IMAGENS/image-removebg-preview (6).png" data-text="Camisa
                         Pain Gaming">
                            <div class="loader-wrapper1">
                                <div class="animacaoload1"></div>
                            </div>
                        </div>
                        <div class="carde-element" data-img="../IMAGENS/image-removebg-preview (7).png" data-text="Camisa Real Madrid Temporada 25/26">
                            <div class="loader-wrapper1">
                                <div class="animacaoload1"></div>
                            </div>
                        </div>
                        <!--
                        <figure class="figa">
                            <img class="imgfig" src="../IMAGENS/image-removebg-preview (6).png">
                            <figcaption class="fig">Camisa Pain<br>Gaming</figcaption>
                        </figure>
                        <figure class="figa">
                            <img class="imgfig" src="../IMAGENS/image-removebg-preview (7).png">
                            <figcaption class="fig">Camisa Real Madrid<br>Temporada 25/26</figcaption>
                        </figure> -->
                    </div>
                </div>
            </div>
        </div>
        <div id="pp2" class="paragrafo2">
            <h1 id="hhh">Produtos</h1>
            <div class="produtosemcoluna">
                <div class="produto-element" data-img="../IMAGENS/aimage-removebg-preview.png" data-text="Camisa São Paulo
                Cor: Preto
                Preço: R$409,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>
                <div class="produto-element" data-img="../IMAGENS/image-removebg-preview (8).png" data-text="Camisa Napoli
                Cor: Azul
                Preço: R$109,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>
                <div class="produto-element" data-img="../IMAGENS/image-removebg-preview (9).png" data-text="Camisa Dia dos Pais
                Cor: Branco
                Preço: R$79,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>
                <div class="produto-element" data-img="../IMAGENS/image-removebg-preview (10).png" data-text="Camisa Just do It
                Cor: Preto
                Preço: R$139,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/image-removebg-preview (11).png" data-text="Camisa Clássica Manga Curta
                Cor: Azul
                Preço: R$49,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/image-removebg-preview (12).png" data-text="Camisa Atlético de Madrid
                Cor: Vermelho
                Preço: R$349,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/image-removebg-preview (13).png" data-text="Camisa Seleção Brasileira 2025
                Cor: Azul
                Preço: R$238,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/image-removebg-preview (14).png" data-text="Camisa Cruzeiro
                Cor: Branco
                Preço: R$169,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/image-removebg-preview (18).png" data-text="Cropped Alto
                Cor: Preto
                Preço: R$99,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/image-removebg-preview (19).png" data-text="Cropped com Alça
                Cor: Preto
                Preço: R$119,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/image-removebg-preview (17).png" data-text="Camisa Feminina Gola em V
                Cor: Bege
                Preço: R$59,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/image-removebg-preview (16).png" data-text="Camisa Feminina Gola em V
                Cor: Branca
                Preço: R$79,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/image-removebg-preview (15).png" data-text="Camisa Social Feminina Gola em V
                Cor: Bege
                Preço: R$229,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/imagem_2025-10-11_225604170-removebg-preview.png" data-text="Camisa Feminina Casual
                Cor: Branco
                Preço: R$39,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/awoud (4).png" data-text="Camisa Social Feminina
                Cor: Rosa
                Preço: R$159,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/awoud (3).png" data-text="Cropped Alto
                Cor: Azul
                Preço: R$119,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/awoud (2).png" data-text="Camisa Clássica Feminina
                Cor: Azul
                Preço: R$128,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/awoud (1).png" data-text="Camisa Seleção Italiana Feminina
                Cor: Azul
                Preço: R$339,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/pwisohd (3).png" data-text="Camisa com Estampa Feminina
                Cor: Verde
                Preço: R$53,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/pwisohd (2).png" data-text="Camisa Manga Longa Feminina
                Cor: Bege
                Preço: R$79,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/pwisohd (1).png" data-text="Camisa Fluminense Feminina
                Cor: Padrão
                Preço: R$349,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/pwisohd (4).png" data-text="Camisa Manga Curta Para Trabalho
                Cor: Vermelha
                Preço: R$109,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/8787 (2).png" data-text="Camisa Protetiva (Raios UV) Feminina
                Cor: Preto
                Preço: R$153,50">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/8787 (1).png" data-text="Camisa Unisex
                Cor: Roxo
                Preço: R$147,90">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>

                <div class="produto-element" data-img="../IMAGENS/8787 (3).png" data-text="Camisa Polo Para Empresas
                Cor: Preto
                Preço: R$29,50">
                    <div class="loader-wrapper1">
                        <div class="animacaoload1"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <footer>
        <div class="rodape">
            <div class="rodape1">
                <p class="creditos1"><a href="../google_terms_of_service_pt-BR_br.pdf" class="butaotermosdeuso">Termos
                        de Uso</a></p>
                <p class="creditos1"><a href="../HTML/suporte.html" class="butaoduvidas">Dúvidas</a></p>
                <p class="creditos1"><a href="../HTML/contato.html" class="butaocontato">Contato</a></p>
                <p class="creditos1"><a href="../HTML/sobre.php" class="butaosobre">Sobre</a></p>
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
    <link rel="stylesheet" href="../JAVASCRIPT/react-build/assets/index.css">
    <!-- JS do React build -->
    <script type="module" src="../JAVASCRIPT/react-build/assets/index.js"></script>
</body>

</html>