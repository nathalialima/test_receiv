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
            <br><br>
            <?php
                include_once('avisos.php')
            ?>
            <h2>Lista Devedores</h2>
            <br>
            <form action="<?=$response_util->url('/')?>" method="get" class="form">
             <div class="row">
                <div class="col-md-6">
                    <label>Nome: </label>
                    <input type="text" name="nome" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>CPF/CNPJ:</label>
                    <input type="text" name="cpf_cnpj" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="float-right">
                        <button type="submit" class="btn btn-info">Buscar</button>
                    </div>
                </div>
            </div>

            </form>

            <div class="table-responsive">
                <table class="table table-bordered">
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
        </main>
    </div>
</div>
<script src="./dist/js/bootstrap.bundle.js" ></script>

</body></html>