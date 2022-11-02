<?php
    require_once '../../configDB.php';
    include_once '../../src/artigo.php';
    
    $artigo = new Artigo($mySql);
    $artigo = $artigo->exibirArtigosAll();
    //pegando a função
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-between px-3 align-items-center mb-3">
            <a href="../logout.php" class="btn btn-outline-secondary">Voltar</a>
            <h1>Página Administrativa</h1>
        </div>
        <div class="mb-3">
            <?php foreach($artigo as $verArtigos) {  ?>
            <div id="artigo-admin">
                <p><?php echo $verArtigos['titulo'] ?> / <?php echo $verArtigos['categoria'] ?></p>
                <nav>
                    <a class="btn btn-warning" href="./editar-artigo.php?id=<?php echo $verArtigos["id"] ?>">Editar</a>

                    <a class="btn btn-danger" href="./excluir-artigo.php?id=<?php echo $verArtigos['id'] ?>">Excluir</a>
                </nav>
            </div>
            <?php } ?>
            
        </div>
        <a  class="btn btn-primary" href="./adicionar-artigo.php">Adicionar Artigo</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>