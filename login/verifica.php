<?php
session_start();
if(!$_SESSION['email']){
    header('Location: cadastro.php');
}
//verifica se não existe uma sessão email
//caso sim retorne a pagina cadastro
?>