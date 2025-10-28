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
    <main class="main-container">
        <button id="btm" class="botaomatriz">Voltar</button>
        <div class="categorias">
            <form onsubmit="return false;">
                <input class="pesquisar" type="text" id="pesquisar" placeholder="Pesquisar na página...">
            </form>
        </div>
        <h1 id="hh" class="hh">Promoções</h1>
        <div id="cc1" class="cards-container">
            <div class="card">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
                    <img class="imagenspromocao"
                        src="../IMAGENS/transferir.jpeg" alt="Produto 1">
                    <p class="preco">Camisa Manga Curta<br>Cor: Preto<br>Preço: R$99,90</p>
            </div>
            <div class="card">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
                <img class="imagenspromocao"
                    src="../IMAGENS/WhatsApp_Image_2025-10-05_at_11.54.46-removebg-preview (1).png" alt="Produto 2">
                <p class="preco">Camisa PSG<br>Cor: Azul<br>Preço: R$399,90</p>
            </div>
            <div class="card">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
                <img class="imagenspromocao" src="../IMAGENS/WhatsApp_Image_2025-10-05_at_12.40.02-removebg-preview.png"
                    alt="Produto 3">
                <p class="preco">Camisa Com<br> Desenho de Leão<br>Cor: Preto<br>Preço: R$178,90</p>
            </div>
            <div class="card">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
                <img class="imagenspromocao" src="../IMAGENS/WhatsApp_Image_2025-10-05_at_12.41.18-removebg-preview.png"
                    alt="Produto 4">
                <p class="preco">Camisa Corinthians<br>Cor: Branco<br>Preço: R$299,90</p>
            </div>
            <div class="card">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
                <img class="imagenspromocao" src="../IMAGENS/WhatsApp_Image_2025-10-05_at_12.42.12-removebg-preview.png"
                    alt="Produto 5">
                <p class="preco">Camisa Polo Com Detalhes<br>Cor: Branco<br>Preço: R$69,90</p>
            </div>
            <div class="card">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
                <img class="imagenspromocao" src="../IMAGENS/WhatsApp_Image_2025-10-05_at_12.42.40-removebg-preview.png"
                    alt="Produto 6">
                <p class="preco">Camisa Polo Clássica<br>Cor: Azul<br>Preço: R$89,90</p>
            </div>
            <div class="card">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
                <img class="imagenspromocao"
                    src="../IMAGENS/camisa_feminina_kombat_iii_camisas_negras_51_1_39eba36c933e24ab07c25b2638231955-removebg-preview.png"
                    alt="Produto 7">
                <p class="preco">Camisa Feminina<br> Kombat Vasco<br>Cor: Preto<br>Preço: R$489,90</p>
            </div>
            <div class="card">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
                <img class="imagenspromocao" src="../IMAGENS/imagewujheds-removebg-preview.png" alt="Produto 8">
                <p class="preco">Camisa Manchester<br> City Puma<br>Cor: Azul Claro<br>Preço: R$389,90</p>
            </div>
            <div class="card">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
                <img class="imagenspromocao" src="../IMAGENS/Camisa-Time-Melvin-002-removebg-preview.png"
                    alt="Produto 9">
                <p class="preco">Camisa Esportiva Com Detalhes<br>Cor: Preto - Ciano<br>Preço: R$189,90</p>
            </div>
            <div class="card">
                <div class="loader-wrapper">
                    <div class="animacaoload"></div>
                </div>
                <img class="imagenspromocao" src="../IMAGENS/images__1_-removebg-preview.png" alt="Produto 10">
                <p class="preco">Camisa Florida <br>de Praia com Detalhes<br>Cor: Preto<br>Preço: R$81,90</p>
            </div>
        </div>
        <div id="pp1" class="paragrafo1">
            <h2 id="pp3">Destaques Da Loja</h2>
            <div class="Produtoscoluna">
                <div class="produtos">
                    <div class="divp">
                        <figure class="figa">
                            <img class="imgfig" src="../IMAGENS/image-removebg-preview (1).png">
                            <figcaption class="fig">Camisa Michael<br> Jordan</figcaption>
                        </figure>
                        <figure class="figa">
                            <img class="imgfig" src="../IMAGENS/image-removebg-preview.png">
                            <figcaption class="fig">Camisa Polo <br>Clássica</figcaption>
                        </figure>
                        <figure class="figa">
                            <img class="imgfig" src="../IMAGENS/image-removebg-preview (2).png">
                            <figcaption class="fig">Camisa Seleção<br>Brasileira</figcaption>
                        </figure>
                        <figure class="figa">
                            <img class="imgfig" src="../IMAGENS/image-removebg-preview (3).png">
                            <figcaption class="fig">Camisa Palmeiras<br>Clássica</figcaption>
                        </figure>
                        <figure class="figa">
                            <img class="imgfig" src="../IMAGENS/image-removebg-preview (4).png">
                            <figcaption class="fig">Camisa Florida <br>de Praia</figcaption>
                        </figure>
                        <figure class="figa">
                            <img class="imgfig" src="../IMAGENS/image-removebg-preview (5).png">
                            <figcaption class="fig">Camisa de Time<br> EA-Sports</figcaption>
                        </figure>
                        <figure class="figa">
                            <img class="imgfig" src="../IMAGENS/image-removebg-preview (6).png">
                            <figcaption class="fig">Camisa Pain<br>Gaming</figcaption>
                        </figure>
                        <figure class="figa">
                            <img class="imgfig" src="../IMAGENS/image-removebg-preview (7).png">
                            <figcaption class="fig">Camisa Real Madrid<br>Temporada 25/26</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div id="pp2" class="paragrafo2">
            <h1 id="hhh">Produtos</h1>
            <div class="produtosemcoluna">
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/aimage-removebg-preview.png">
                        <figcaption class="legenda1">Camisa São Paulo<br>Cor: Preto<br>Preço: R$409,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/image-removebg-preview (8).png">
                        <figcaption class="legenda1">Camisa Napoli<br>Cor: Azul<br>Preço: R$109,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/image-removebg-preview (9).png">
                        <figcaption class="legenda1">Camisa Dia Dos Pais<br>Cor: Branco<br>Preço: R$79,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/image-removebg-preview (10).png">
                        <figcaption class="legenda1">Camisa Just do It<br>Cor: Preto<br>Preço: R$139,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/image-removebg-preview (11).png">
                        <figcaption class="legenda1">Camisa Clássica Manga Curta<br>Cor: Azul<br>Preço: R$49,90
                        </figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/image-removebg-preview (12).png">
                        <figcaption class="legenda1">Camisa Atlético de Madrid<br>Cor: Vermelho<br>Preço: R$349,90
                        </figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/image-removebg-preview (13).png">
                        <figcaption class="legenda1">Camisa Seleção Brasileira 2025<br>Cor: Azul<br>Preço: R$238,90
                        </figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/image-removebg-preview (14).png">
                        <figcaption class="legenda1">Camisa Cruzeiro<br>Cor: Branco<br>Preço: R$169,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/image-removebg-preview (18).png">
                        <figcaption class="legenda1">Cropped Alto<br>Cor: Preto<br>Preço: R$99,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/image-removebg-preview (19).png">
                        <figcaption class="legenda1">Cropped com Alça<br>Cor: Preto<br>Preço: R$119,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/image-removebg-preview (17).png">
                        <figcaption class="legenda1">Camisa Feminina Gola em V<br>Cor: Bege<br>Preço: R$59,90
                        </figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/image-removebg-preview (16).png">
                        <figcaption class="legenda1">Camisa Feminina Gola em V<br>Cor: Branca<br>Preço: R$79,90
                        </figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/image-removebg-preview (15).png">
                        <figcaption class="legenda1">Camisa Social Feminina Gola em V<br>Cor: Bege<br>Preço: R$229,90
                        </figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/imagem_2025-10-11_225604170-removebg-preview.png">
                        <figcaption class="legenda1">Camisa Feminina Casual<br>Cor: Branco<br>Preço: R$39,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/awoud (4).png">
                        <figcaption class="legenda1">Camisa Social Feminina<br>Cor: Rosa<br>Preço: R$159,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/awoud (3).png">
                        <figcaption class="legenda1">Cropped Alto<br>Cor: Azul<br>Preço: R$119,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/awoud (2).png">
                        <figcaption class="legenda1">Camisa Clássica Feminina<br>Cor: Azul<br>Preço: R$128,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/awoud (1).png">
                        <figcaption class="legenda1">Camisa Seleção Italiana Feminina<br>Cor: Azul<br>Preço: R$339,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/pwisohd (3).png">
                        <figcaption class="legenda1">Camisa com Estampa Feminina<br>Cor: Verde<br>Preço: R$53,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/pwisohd (2).png">
                        <figcaption class="legenda1">Camisa Manga Longa Feminina<br>Cor: Bege<br>Preço: R$79,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/pwisohd (1).png">
                        <figcaption class="legenda1">Camisa Fluminense Feminina<br>Cor: Padrão<br>Preço: R$349,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/pwisohd (4).png">
                        <figcaption class="legenda1">Camisa Manga Curta Para Trabalho<br>Cor: Vermelha<br>Preço: R$109,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/8787 (2).png">
                        <figcaption class="legenda1">Camisa Protetiva (Raios UV) Feminina<br>Cor: Preto<br>Preço: R$153,50</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/8787 (1).png">
                        <figcaption class="legenda1">Camisa Unisex<br>Cor: Roxo<br>Preço: R$147,90</figcaption>
                    </figure>
                </div>
                <div class="card1">
                    <figure class="card1a">
                        <img class="imgaa" src="../IMAGENS/8787 (3).png">
                        <figcaption class="legenda1">Camisa Polo Para Empresas<br>Cor: Preto<br>Preço: R$29,50</figcaption>
                    </figure>
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
</body>
</html>