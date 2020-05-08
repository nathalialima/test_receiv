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
    <h1>Editar Devedor</h1>
    <br>
    <form class="form" action="../../save" method="post">
    <input type="hidden" name="id" value="<?=$devedor->id?>">
    <div class="row">
        <div class="col-md-6">
            <label><b>Nome:</b></label>
            <input class="form-control" type="text" name="nome" value="<?=$devedor->nome?>">
        </div>
        <div class="col-md-6">
            <label><b>CPF/CNPJ:</b></label>
            <input class="form-control" type="number" name="cpf_cnpj" value="<?=$devedor->cpf_cnpj?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label><b>Data de Nascimento:</b></label>
            <input class="form-control" type="text" name="data_nascimento" value="<?=$devedor->data_nascimento?>">
        </div>
        <div class="col-md-6">
            <label><b>Endereço:</b></label>
            <input class="form-control" type="text" name="endereco" value="<?=$devedor->endereco?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label><b>Título:</b></label>
            <input class="form-control" type="text" name="descricao_titulo" value="<?=$devedor->descricao_titulo?>">
        </div>
        <div class="col-md-6">
            <label><b>Valor:</b></label>
            <input class="form-control" type="text" name="valor" value="<?=$devedor->valor?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label><b>Data de Vencimento:</b></label>
            <input class="form-control" type="text" name="data_vencimento" value="<?=$devedor->data_vencimento?>">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 float-md-right">
            <button type="submit" class="btn btn-info">Editar</button>
            <a href="../../" class="btn btn-danger">Voltar</a>
        </div>
    </div>

    </form>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../../dist/js/bootstrap.bundle.js" ></script>
</body>
</html>