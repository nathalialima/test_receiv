<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./dist/css/bootstrap.css">

    <title></title>
</head>
<body>
<div class="container">
    <br>
    <h1>Lista de Devedores</h1>
    <br>
    <?php
    $message = new \App\Helpers\Messages();
    if($message->has('messageError')){
    ?>
        <div class="row">
            <div class="col-md-12 alert alert-danger" role="alert">
                <?=$message->getMessageError()?>
            </div>
        </div>
    <?php
        }

    if($message->has('message')){
    ?>
    <div class="row">
        <div class="col-md-12 alert alert-info" role="alert">
            <?=$message->getMessageError()?>
        </div>
    </div>
    <?php
        }
    ?>
    <div class="row">

        <a href="./new" class="btn btn-info">Novo Devedor</a>

        <div class="col-sm-12">
            <br>
            <table class="table">
                <thead>
                <th>Nome</th>
                <th>CPF/CNPJ</th>
                <th>Título</th>
                <th>Valor</th>
                <th>Vencimento</th>
                <th>Ações</th>
                </thead>
                <tbody>
                <?php
                foreach ($devedores as $devedor) {
                    ?>
                    <tr>
                        <td><?=$devedor->nome?></td>
                        <td><?=$devedor->cpf_cnpj?></td>
                        <td><?=$devedor->descricao_titulo?></td>
                        <td><?=$devedor->valor?></td>
                        <td><?=$devedor->data_vencimento?></td>
                        <td><a href="./view/<?=$devedor->id?>/devedor" class="btn btn-info">Visualizar</a>
                        <a href="./edit/<?=$devedor->id?>/devedor" class="btn btn-info">Editar</a>
                        <a href="./delete/<?=$devedor->id?>/devedor" class="btn btn-danger">Excluir</a> </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./dist/js/bootstrap.bundle.js" ></script>
</body>
</html>