<?php
    include("connection.php");

	$dados = mysqli_query($conexao,	"SELECT	* FROM	produtos WHERE	id = $_GET[id]");
	$produto = mysqli_fetch_array($dados);
?>

<?php
    $mostrarReset = true;
    $cabecalho_title = $produto['nome'];
    $cabecalho_css =
    '<link rel="stylesheet" href="css/produto.css">
     <link rel="stylesheet" href="css/rodape.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton&display=swap">';
   
    include("corpo.php");
?>

<div class="produto-back">
    <div class="container">
        <div class="produto">
            <h1><?= $produto['nome'] ?></h1>
            <p>por apenas <?= $produto['preco']?></p>
            <form action="checkout.php" method="POST">
                <fieldset class="cores tamanhos">
                    <legend>Escolha o tamanho:</legend>
                    
                    <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                    <output for="tamanho" name="valortamanho">42</output>

                    <legend>Escolha a cor:</legend>

                    <input type="radio" name="cor" value="verde" id="verde" checked>
                    <label for="verde"><img src="img/produtos/foto<?= $produto['id'] ?>-verde.png" alt="<?= $produto['nome'] ?> na cor verde"></label>

                    <input type="radio" name="cor" value="rosa" id="rosa">
                    <label for="rosa"><img src="img/produtos/foto<?= $produto['id'] ?>-rosa.png" alt="<?= $produto['nome'] ?> na cor rosa"></label>

                    <input type="radio" name="cor" value="azul" id="azul">
                    <label for="azul"><img src="img/produtos/foto<?= $produto['id'] ?>-azul.png" alt="<?= $produto['nome'] ?> na cor azul"></label>
                </fieldset>
                <button class="comprar" name="id" value="<?= $produto['id'] ?>">Comprar</button>
            </form>
        </div>
        <div class="detalhes">
            <h2>Detalhes do produto</h2>
            <p><?= $produto['descricao'] ?></p>
            <table>
                <thead>
                    <tr>
                        <th>Característica</th>
                        <th>Detalhe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Modelo</td>
                        <td>Cardigã 7845</td>
                    </tr>
                    <tr>
                        <td>Material</td>
                        <td>Algodão e poliester</td>
                    </tr>
                    <tr>
                        <td>Cores</td>
                        <td>Azul, Rosa e Verde</td>
                    </tr>
                    <tr>
                        <td>Lavagem</td>
                        <td>Lavar a mão</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("rodape.php"); ?>
<script type="text/javascript" src="js/produto.js"></script>
<script type="text/javascript" src="js/desabilitaRodape.js"></script>
