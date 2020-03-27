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
            <?php
                include("connection.php");
                $dados = mysqli_query($conexao,	"SELECT	* FROM	produtos ORDER BY data DESC LIMIT 0, 9");
                while($produto = mysqli_fetch_array($dados)):
            ?>

            <li>
                <a href="produto.php?id=<?= $produto['id'] ?>">
                    <figure>
                        <img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="miniatura<?= $produto['id' ]?>">
                        <figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
                    </figure>
                </a>
            </li>
            <?php endwhile; ?>
        </ol>
        <button type="button">Mostrar mais</button>
    </section>

    <section class="painel mais-vendidos painel-aberto">
        <h2>Mais Vendidos</h2>
        <ol>
            <?php
                $conexao = mysqli_connect("127.0.0.1",	"root",	"", "DB_MIRROR_FASHION", "3306");
                    
                if ($conexao -> connect_errno) {
                    echo "Failed to connect to MySQL: " . $conexao -> connect_error;
                    exit();
                }
                $dados = mysqli_query($conexao,	"SELECT	* FROM	produtos ORDER BY vendas ASC LIMIT 0, 9");
                while($produto = mysqli_fetch_array($dados)):
            ?>
            <li>
                <a href="produto.php?id=<?= $produto['id'] ?>">
                    <figure>
                        <img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="miniatura<?= $produto['id'] ?>">
                        <figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
                    </figure>
                </a>
            </li>
            <?php endwhile; ?>
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
