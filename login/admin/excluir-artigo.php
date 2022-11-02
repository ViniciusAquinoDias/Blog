<?php
include_once '../../src/artigo.php';
require_once '../../configDB.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //se o metodo de requisição http for igual a post retorne isso:

        $artigo = new Artigo($mySql);
        $artigo->excluir($_POST['id']);
         //esta enviando a uma função excluir com os parametros post-id
        header('Location: index.php');
        die();
    };

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Excluir Artigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Você realmente deseja excluir o artigo?</h1>
        <form method="POST" action="./excluir-artigo.php">
            <p class="my-3">
                <input type="hidden" name="id" value="<?php echo $_GET['id'];
                ?>" />
                <a href="./index.php" class="btn btn-primary mx-3">Voltar</a>
                <button class="btn btn-danger">Excluir</button>
            </p>
            
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>