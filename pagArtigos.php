<?php
require_once './configDB.php';
require_once './src/artigo.php';
$obj_artigo = new Artigo($mySql);
$artigo = $obj_artigo->pegarArtigosId($_GET['id']);
//Aqui só está sendo chamado o id que foi enviado para a url com o get
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-light">
    
    <div class="container p-4">
        <h1 class=" pt-3 m-0" style="text-transform: uppercase;">
            <strong><?php echo $artigo['titulo'] ?></strong>
        </h1>
        <div class="p-3">
        <img src="./login/admin/<?php echo $artigo['path']; ?>" class="img-fluid p-2" alt="...">
        </div>
        <p class="fs-5 fw-normal lh-sm">
            <?php echo $artigo['conteudo'] ?>
        </p>
        <div class="d-flex w-100 justify-content-end">
            <a class="btn btn-outline-danger mt-2 p-2" href="./index.php">Voltar</a>
            </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>