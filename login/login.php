<?php
session_start();
//inicia uma sessão

include_once('verifica.php');
require_once('../configDB.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: ./cadastro.php');
    exit();
    //caso os campos email e senha estejam vazios volta a tela de cadastro
};

$email = mysqli_real_escape_string($mySql, $_POST['email']);
$senha = mysqli_real_escape_string($mySql, $_POST['senha']);

$query = "SELECT * FROM `usuario` WHERE email = '{$email}' and senha = md5('{$senha}')";
//perguntando se a um registro assim no banco de dados
$result = mysqli_query($mySql, $query);
$row = mysqli_num_rows($result);

if($row == 1){
    //caso $row for igual a 1:
    $_SESSION['email'] = $email;
    //armazena a sessão email em uma variavel email e da acesso a pagina
    header('Location: admin/index.php');
    exit();
} else {
    //caso não volte a pagina de cadastro
    header('Location: cadastro.php');
}
?>
