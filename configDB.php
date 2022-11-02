<?php

    //Aqui eu faço uma conexão com o banco de dados MySql

    $mySql = new mysqli('localhost', 'root', '123456', 'blog');
    $mySql -> set_charset('utf8');
    if ($mySql == false){
        echo 'FATAL ERROR!';
        return;
        //Caso não consiga estabelecer uma conexão com o banco de dados
    }
    elseif($mySql->error){
        die("<h1>FATAL ERROR: </h1>". $mySql->error);
        //Caso o banco me retorne um erro na hora de sua conexão
    }

?>