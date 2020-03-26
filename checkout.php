<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Checkout Mirror Fashion</title>
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/checkout.min.css">
</head>

<body>
    <nav class="navbar	navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
            <span	class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="index.php">Mirror Fashion</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item	active">
                    <a class="nav-link" href="sobre.html">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ajuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Perguntas	frequentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Entre	em	contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Ótima escolha!</h1>
            <p class="lead">Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <div class="card mb-3">
                    <div class="card-header">Sua compra</div>
                    <!--	fim	.card-header	-->
                    <div class="card-body">
                        <img class="img-thumbnail mb-3 d-none d-sm-block" src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan" class="img-thumbnail	mb-3">
                        <dl>
                            <dt>Produto</dt>
                            <dd><?= $_POST['nome'] ?></dd>
                            <dt>Cor</dt>
                            <dd><?= $_POST['cor'] ?></dd>
                            <dt>Tamanho</dt>
                            <dd><?= $_POST['tamanho'] ?></dd>
                            <dt>Preço</dt>
                            <dd id="preco"><?= $_POST['preco'] ?></dd>
                        </dl>
                    </div>
                    <!--	fim	.card-body	-->
                </div>
                <!--	fim	.card	-->
                <div class="card mb-3 quantidade-e-total">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="qtd">Quantidade:</label>
                            <input type="number" id="qtd" min="1" max="99" value="1" class="form-control">
                        </div>
                            <div class="form-group">
                            <label for="total">Total:</label>
                            <output for="qtd preco" id="total" class="form-control">
                                 R$	<?= $_POST['preco'] ?>
                            </output>
                        </div>
                    </div>
                </div>
            </div>
            <form class="col-md-8 col-xl-9">
                <!-- <div class="row">
                    <fieldset class="col-lg-4">
                        <div class="card mb-3 quantidade-e-total">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="qtd">Quantidade:</label>
                                    <input type="number" id="qtd" min="1" max="99" value="1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="total">Total:</label>
                                    <output for="qtd preco" id="total" class="form-control"> R$></output>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div> -->
                <!-- <br/> -->
                <div class="row">
                    <fieldset class="col-lg-6">
                        <legend>Dados pessoais</legend>
                        <div class="form-group">
                            <div class="input-group	mb-3">
                                <div class="input-group-prepend"> <label class="input-group-text" for="nome">Nome	completo</label></div>
                                <input type="text" class="form-control" id="nome" required name="nome" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group	mb-3">
                                <div class="input-group-prepend"> <span class="input-group-text">@</span></div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group	mb-3">
                                <div class="input-group-prepend"><label class="input-group-text" or="cpf">CPF</label></div>
                                <input type="text" class="form-control" id="cpf" name="cpf" data-mask="999.999.999-99" placeholder="000.000.000-00" required>
                            </div>
                        </div>
                        <div class="form-group	custom-control	custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="newsletter" value="sim" checked>
                            <label class="custom-control-label" for="newsletter">Quero	receber	Newsletter	da	Mirror	Fashion</label>
                        </div>
                    </fieldset>

                    <fieldset class="col-lg-6">
                        <legend>Cartão de crédito</legend>
                        <div class="form-group">
                            <div class="input-group	mb-3">
                                <div class="input-group-prepend"><label class="input-group-text" for="numero-cartao">Número	- CVV</label></div>
                                <input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group	mb-3">
                                <div class="input-group-prepend"><label class="input-group-text" for="bandeira-cartao">Bandeira</label></div>
                                <select class="custom-select" id="bandeira-cartao">
                                    <option	disabled selected>Selecione	uma	opção...</option>
                                    <option	value="master">MasterCard</option>
                                    <option	value="visa">VISA</option>
                                    <option	value="amex">American Express</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><label class="input-group-text" for="validade-cartao">Validade</label></div>
                                <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                            </div>
                        </div>
                    </fieldset>
                </div>
                <button type="submit" class="btn btn-primary btn-lg "> <i class="far fa-check-circle"></i> Confirmar Pedido</button>
            </form>
        </div>
        <!-- fim . row -->
    </div>
    <!-- fim . container -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="font-awesome/js/all.min.js"></script>
    <!-- <script type="text/javascript" src="js/jquery.inputmask.min.js"></script> -->
    <script type="text/javascript" src="js/total.min.js"></script>
</body>

</html>
