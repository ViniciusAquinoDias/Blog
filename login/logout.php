<?php
session_start();
unset($_SESSION['email']);
//apagando a sessão e enviando a pagina principal
header('Location: ../index.php');
exit();