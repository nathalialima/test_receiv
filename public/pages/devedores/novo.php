<html lang="en"><head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./dist/css/bootstrap.css">


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
    <link rel="stylesheet" href="./dist/css/app.css">

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

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <br>
            <br>
            <?php
                include_once('avisos.php')
            ?>
            <h2>Novo Devedor</h2>
            <br>
            <form class="form" action="<?=$response_util->url('/save')?>" method="post">

                <div class="row">
                    <div class="col-md-6">
                        <label><b>Nome:</b></label>
                        <input class="form-control" type="text" name="nome">
                    </div>
                    <div class="col-md-6">
                        <label><b>CPF/CNPJ:</b></label>
                        <input class="form-control" type="number" name="cpf_cnpj">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label><b>Data de Nascimento:</b></label>
                        <input class="form-control date" type="text" name="data_nascimento">
                    </div>
                    <div class="col-md-6">
                        <label><b>Endereço:</b></label>
                        <input class="form-control" type="text" name="endereco">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label><b>Título:</b></label>
                        <input class="form-control" type="text" name="descricao_titulo">
                    </div>
                    <div class="col-md-6">
                        <label><b>Valor:</b></label>
                        <input class="form-control money" type="text" name="valor">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label><b>Data de Vencimento:</b></label>
                        <input class="form-control date" type="text" name="data_vencimento">
                    </div>
                </div>
                <br>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                            <a href="./" class="btn btn-danger">Voltar</a>
                            <button type="submit" class="btn btn-info">Cadastrar</button>
                        </div>
                    </div>
                </div>

            </form>
        </main>
    </div>
</div>
<script src="./dist/js/bootstrap.bundle.js" ></script>
<script src="./dist/js/jquery.min.js" ></script>
<script src="./dist/js/jquery.mask.min.js" ></script>
<script>
    $(document).ready(function() {
        $('.date').mask('00/00/0000');
        $('.money').mask('00000000000000.00', {reverse: true});
    });
</script>
</body></html>