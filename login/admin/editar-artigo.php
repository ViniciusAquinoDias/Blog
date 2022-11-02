<?php
include_once '../../src/artigo.php';
require_once '../../configDB.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //se o metodo de requisição http for igual a post retorne isso:
        $artigo = new Artigo($mySql);
        $artigo->editar($_POST['titulo'], $_POST['conteudo'], $_POST['id']);
        //esta enviando a uma função editar com os parametros post-titulo, post-conteudo, post-id
        
        header('Location: index.php');
        die();
    };

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Editar Artigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Editar Artigo</h1>
        <form action="editar-artigo.php" method="POST">
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titulo do Artigo</label>
                <input type="text" class="form-control" name="titulo" id="exampleFormControlInput1" placeholder="Melhores Jogos de 2022...">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Conteudo do Artigo</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="conteudo" placeholder="Top 1: minecraft, 
Top 2: Gta5..."></textarea>
            <p>
                <input type="hidden" name="id" value="<?php echo $_GET['id'];
                ?>" />
            </p>
            <p>
                <button class="btn btn-primary">Editar Artigo</button>
                <a href="./index.php" class="btn btn-outline-secondary">Voltar</a>
            </p>
        </form>
        
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>