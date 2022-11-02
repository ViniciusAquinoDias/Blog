<?php
require_once "./filtragem.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Adicionar Artigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Adicionar Artigo</h1>

        <form action="" enctype="multipart/form-data" method="POST">
            <div class="mb-3">
                <label for="formFile" class="form-label">Imagem</label>
                <input class="form-control" type="file" id="formFile" name="arquivos">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titulo do Artigo</label>
                <input type="text" class="form-control" name="titulo" id="exampleFormControlInput1" placeholder="Melhores Jogos de 2022...">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Conteudo do Artigo</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="conteudo" placeholder="Top 1: minecraft, 
Top 2: Gta5..."></textarea>
            </div>

            <div class="group mb-4">
                <p>Categorias:</p>

                <div class="form-check">
                    <input class="form-check-input" name="politica" type="checkbox" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Politica
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="tecnologia" type="checkbox" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Tecnologia
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" name="jogo" type="checkbox" id="flexCheckDefaultn">
                    <label class="form-check-label" for="flexCheckDefaultn">
                        Jogos
                    </label>
                </div>
            </div>
            <p>
                <button class="btn btn-primary">Criar um novo Artigo</button>
                <a href="./index.php" class="btn btn-outline-secondary">Voltar</a>
            </p>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>