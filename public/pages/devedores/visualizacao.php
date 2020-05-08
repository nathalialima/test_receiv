<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../dist/css/bootstrap.css">

    <title></title>
</head>
<body>
<div class="container">
    <br>
    <h1>Dados do Devedor</h1>
    <br>
    <div class="row">
        <div class="col-md-6">
            <label><b>Nome:</b><?=$devedor->nome?></label>
        </div>
        <div class="col-md-6">
            <label><b>CPF/CNPJ:</b><?=$devedor->cpf_cnpj?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label><b>Data de Nascimento:</b><?=$devedor->data_nascimento?></label>
        </div>
        <div class="col-md-6">
            <label><b>Endereço:</b><?=$devedor->endereco?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label><b>Título:</b><?=$devedor->descricao_titulo?></label>
        </div>
        <div class="col-md-6">
            <label><b>Valor:</b><?=$devedor->valor?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label><b>Data de Vencimento:</b><?=$devedor->data_vencimento?></label>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 float-md-right">
            <a href="../../" class="btn btn-danger">Voltar</a>
        </div>
    </div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../../dist/js/bootstrap.bundle.js" ></script>
</body>
</html>