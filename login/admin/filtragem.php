<?php
require_once '../../src/artigo.php';
require_once '../../configDB.php';

//a parte de arquivos

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['titulo']) && isset($_POST['conteudo'])) {
    //se a requisição http for identica a post e existir post-titulo, post-conteudo mostrar isso:
    $artigo = new Artigo($mySql);

    $titulo = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($_POST['titulo'])));
    //filtrando strings
    $conteudo = preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($_POST['conteudo'])));
    //filtrando strings

    $arquivo = $_FILES['arquivos'];
    //armazenando os arquivos de img

    $categoriaResult = '';

    function categoria($v){
        $categoriaResult = '';
        if($_POST['tecnologia'] == 'on'){
            return $categoriaResult = 'tecnologia';
        }
        elseif($_POST['politica'] == 'on'){
            return $categoriaResult = 'politica';
        }
        elseif($_POST['jogo'] == 'on'){
            return $categoriaResult = 'jogo';
        }
       return  $v = $categoriaResult;
    }
    $new = '';
    $result = categoria($new);
    // caso alguns dos inputs estivessem on "que so aparece quando clicado e enviado" retornar strings já determinadas a coluna de categorias


    if ($arquivo['error']) {
        //caso o arquivo apresente erro. ex: arquivo indefinido
        die('falha ao enviar');
        //ira mostrar uma nova pagina com uma menssagem
    }
    $pasta = "./arquivos/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    //"iniqid" gera id unicos caso duvidas existe artigo na documentação oficial
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    //'stringtolower' e para não ter por exemplo '.JPG' e sim '.jpg'
    //resumidamente está codificando o nome da imagem para não existir nomes repetidos


    if ($extensao != 'jpg' && $extensao != 'png')
    //caso a extensão for diferente de jpg ou png:
        die("Tipo de arquivo não aceito");
        //apresentar um problema dizendo que o tipo de arquivo nãom e aceito
        //isso serve para previnir ataques ao sistema

        $paths = $pasta . $novoNomeDoArquivo . '.' . $extensao;
        //convertendo a url basicamente ex "imagem.JPG" ficara igual a 'ntgnea.jpg'

    $confirmado = move_uploaded_file($arquivo["tmp_name"], $paths);

    if ($confirmado){
        //caso tudo certo enviar ao banco de dados e retornar a pagina principal
        $artigo->criarArtigos($titulo, $conteudo, $novoNomeDoArquivo, $paths,$result);
        header('Location: ./index.php');
    } else {
        //caso problemas apresentar a mensagem falha
        echo 'falha';
    }
    die();

}


?>