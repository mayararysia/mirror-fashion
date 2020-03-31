<?php
    $mostrarReset = true;
    $cabecalho_title = "Camisa Casual";
    $cabecalho_css =
    '<link rel="stylesheet" href="css/bootstrap-reduzido.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/rodape.css">';
  
    include("corpo.php");
?>

<div class="container paineis">
    <section class="painel-produtos">
        <h2>CAMISA CASUAL</h2>
            
        <ol>
            <?php
                include("connection.php");
                $dados = mysqli_query($conexao,	"SELECT * FROM produtos WHERE categoria like 'CAS%' ORDER BY data DESC;");
                while($produto = mysqli_fetch_array($dados)):
            ?>

            <li>
                <a href="produto.php?id=<?= $produto['id'] ?>">
                    <figure>
                        <img src="img/produtos/casual/<?= $produto['id'] ?>.png" alt="casual <?= $produto['id' ]?>">
                        <figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
                    </figure>
                </a>
            </li> 
            <?php endwhile; ?>
        </ol>
    </section>
</div>

<?php include("rodape.php"); ?>
<script type="text/javascript" src="js/desabilitaRodape.js"></script>