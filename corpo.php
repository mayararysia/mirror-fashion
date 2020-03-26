<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php print @$cabecalho_title;?></title>
    
    <?php
        if(@$mostrarReset){
            $css = '<link rel="stylesheet" href="css/reset.min.css">'.@$cabecalho_css;
        }
    ;?>
    
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script">
    <?php 
        print $mostrarReset == true ? @$css : @$cabecalho_css;
    ?> 
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
    <header class="container">
        <h1><a href="index.php"><img src="img/logo.png" alt="Mirror Fashion"></a></h1>
        <p class="sacola"> Nenhum item na sacola de compras</p>
        <nav class="menu-opcoes">
            <ul>
                <li><a href="#">Sua Conta</a></li>
                <li><a href="#">Lista de Desejos</a></li>
                <li><a href="#">Cartao Fidelidade</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
            </ul>
        </nav>
    </header>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</body>
</html>
