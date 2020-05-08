<html lang="en"><head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../dist/css/bootstrap.css">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../../dist/css/app.css">

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">App</a>

</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <?php
                include_once ('menu.php')
                ?>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <br>
            <h2>Informações Devedor</h2>
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
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                        <a href="../../" class="btn btn-danger">Voltar</a>
                    </div>
                    </div>
                </div>

        </main>
    </div>
</div>
<script src="../../dist/js/bootstrap.bundle.js" ></script>

</body></html>