<?php
    $mostrarReset = true;
    $cabecalho_title = "Mirror Fashion";
    $cabecalho_css =
    '<link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/rodape.css">';
  
    include("corpo.php");
?>

<div class="container destaque">
    <section class="busca">
        <h2>Busca</h2> 
        <form>
            <input type="search">
            <button>Buscar</button>
        </form>
    </section>
    <!-- fim .busca -->
    <section class="menu-departamentos">
        <h2>Departamentos</h2>
        <nav>
            <ul>
                <li>
                    <a href="#">Blusas e Camisas</a>
                    <ul>
                        <li><a href="#">Manga curta</a></li>
                        <li><a href="#">Manga comprida</a></li>
                        <li><a href="#">Camisa social</a></li>
                        <li><a href="#">Camisa casual</a></li>
                    </ul>
                </li>
                <li><a href="#">Calças</a></li>
                <li><a href="#">Saias</a></li>
                <li><a href="#">Vestidos</a></li>
                <li><a href="#">Sapatos</a></li>
                <li><a href="#">Bolsas e Carteiras</a></li>
                <li><a href="#">Acessórios</a></li>
            </ul>
        </nav>
    </section>
    <!-- fim .menu-departamentos -->
    <section class="banner-destaque"><figure><img src="img/destaque-home.png" alt="Promoção: Big City Night"><a href="#" class="pause"></a></figure> </section>
    <!-- fim .banner-destaque -->
</div>
<!-- fim .container .destaque -->

<div class="container paineis">
    <section class="painel novidades painel-aberto">
        <h2>Novidades</h2>
        <ol>
            <!-- primeiro produto -->
            <li>
                <a href="produto.html">
                    <figure>
                        <img src="img/produtos/miniatura1.png" alt="miniatura1">
                        <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li>
            <!-- fim do primeiro produto -->

            <li>
                <a href="produto.html">
                    <figure>
                        <img src="img/produtos/miniatura2.png">
                        <figcaption>Segunda blusa por R$ 120,90</figcaption>
                    </figure>
                </a>
            </li>

            <li>
                <a href="produto.html">
                    <figure>
                        <img src="img/produtos/miniatura3.png">
                        <figcaption>Terceira blusa por R$ 118,90</figcaption>
                    </figure>
                </a>
            </li>

            <li>
                <a href="produto.html">
                    <figure>
                        <img src="img/produtos/miniatura4.png">
                        <figcaption>Quarta blusa por R$ 110,90</figcaption>
                    </figure>
                </a>
            </li>

            <li>
                <a href="produto.html">
                    <figure>
                        <img src="img/produtos/miniatura5.png">
                        <figcaption>Quinta blusa por R$ 50,00</figcaption>
                    </figure>
                </a>
            </li>

            <li>
                <a href="produto.html">
                    <figure>
                        <img src="img/produtos/miniatura6.png">
                        <figcaption>Blusa rosa por R$ 20,90</figcaption>
                    </figure>
                </a>
            </li>
        </ol>
        <button type="button">Mostrar mais</button>
    </section>

    <section class="painel mais-vendidos painel-aberto">
        <h2>Mais Vendidos</h2>
        <ol>
            <li>
                <a href="produto.html">
                    <figure>
                        <img src="img/produtos/miniatura1.png" alt="miniatura1">
                        <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                    </figure>
                </a>
            </li>
            <!-- fim do primeiro produto -->
            <li>
                <a href="produto.html">
                    <figure>
                        <img src="img/produtos/miniatura15.png">
                        <figcaption>Vestido por R$ 120,90</figcaption>
                    </figure>
                </a>
            </li>

            <li>
                <a href="produto.html">
                    <figure>
                        <img src="img/produtos/miniatura13.png">
                        <figcaption>Blusa por R$ 118,90</figcaption>
                    </figure>
                </a>
            </li>

            <li>
                <a href="produto.html">
                    <figure>
                        <img src="img/produtos/miniatura14.png">
                        <figcaption>Blusa por R$ 110,90</figcaption>
                    </figure>
                </a>
            </li>

            <li>
                <a href="produto.html">
                    <figure>
                        <img src="img/produtos/miniatura7.png">
                        <figcaption>Blusa por R$ 50,00</figcaption>
                    </figure>
                </a>
            </li>

            <li>
                <a href="produto.html">
                    <figure>
                        <img src="img/produtos/miniatura11.png">
                        <figcaption>Short por R$ 20,90</figcaption>
                    </figure>
                </a>
            </li>
        </ol>
        <button type="button">Mostrar mais</button>
    </section>
</div>

<?php 
    include("rodape.php"); 
?>

<script type="text/javascript" src="js/less.min.js"></script>
<script type="text/javascript" src="js/banner.min.js"></script>';   
<script type="text/javascript" src="js/home.min.js"></script>
<script type="text/javascript" src="js/desabilitaRodape.js"></script>';
