<?php
require_once './configDB.php';
include_once './src/artigo.php';

$artigo = new Artigo($mySql);

//As funções separadas pelas categorias

$artigo1 = $artigo->exibirArtigosAll();
//menos essa que engloba todos artigos criados 

$artigo2 = $artigo->exibirArtigosTecnologia();
$artigo3 = $artigo->exibirArtigosPolitica();
$artigo4 = $artigo->exibirArtigosJogos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary  mb-5 p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="flex-grow:0;" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Procurar Por Categoria
                        </a>
                        <ul class="dropdown-menu scroli">
                            
                            <li><a class="dropdown-item" href="#2">Tecnologia</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#3">Politica</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#4">Jogos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login/cadastro.php">Login</a>
                    </li>

                </ul>
                
            </div>
        </div>
    </nav>

    <div class="container scrool">
    <div class="container m-0 row w-100 d-flex  m-auto mb-5 py-2" id="2">
        <h2>Tecnologia:</h2>
        <?php foreach ($artigo2 as $artigos) { ?>

            <div class="card text-bg-light m-2 shadow" style="width: 18rem;">
                <img src="./login/admin/<?php echo $artigos['path']; ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><a href="pagArtigos.php?id=<?php echo $artigos['id']; ?>" class="fs-4 fw-semibold lh-1 text-decoration-none">
                            <?php echo $artigos['titulo']; ?>
                        </a></h5>
                </div>
            </div>

        <?php } ?>
    </div>
    <hr>
    <div class="container m-0 row w-100 d-flex  m-auto mb-5 py-2" id="3">
        <h2>Politica:</h2>
        <?php foreach ($artigo3 as $artigos) { ?>

            <div class="card text-bg-light m-2 shadow" style="width: 18rem;">
                <img src="./login/admin/<?php echo $artigos['path']; ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><a href="pagArtigos.php?id=<?php echo $artigos['id']; ?>" class="fs-4 fw-semibold lh-1 text-decoration-none">
                            <?php echo $artigos['titulo']; ?>
                        </a></h5>
                </div>
            </div>

        <?php } ?>
    </div>
    <hr>
    <div class="container m-0 row w-100 d-flex  m-auto mb-5 py-2" id="4">
        <h2>Jogos:</h2>
        <?php foreach ($artigo4 as $artigos) { ?>

            <div class="card text-bg-light m-2 shadow" style="width: 18rem;">
                <img src="./login/admin/<?php echo $artigos['path']; ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><a href="pagArtigos.php?id=<?php echo $artigos['id']; ?>" class="fs-4 fw-semibold lh-1 text-decoration-none">
                            <?php echo $artigos['titulo']; ?>
                        </a></h5>
                </div>
            </div>

        <?php } ?>
    </div>
    <hr>
    <div class="container m-0 row w-100 d-flex  m-auto mb-5 py-2" id="1">
        <h2>Todos os Artigos:</h2>
        <?php foreach ($artigo1 as $artigos) { ?>

            <div class="card text-bg-light m-2 shadow" style="width: 18rem;">
                <img src="./login/admin/<?php echo $artigos['path']; ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><a href="pagArtigos.php?id=<?php echo $artigos['id']; ?>" class="fs-4 fw-semibold lh-1 text-decoration-none">
                            <?php echo $artigos['titulo']; ?>
                        </a></h5>
                </div>
            </div>

        <?php } ?>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>