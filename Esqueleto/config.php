<?php

    $dbHost = 'localhost';
    $dbusername = 'root';
    $dbPassword = '';
    $dbName = 'aula';

    $conexao = new mysqli($dbHost, $dbusername, $dbPassword, $dbName);

    /*if ($conexao -> connect_errno){
        echo "erro";
    }
    else{
        echo"Conexão efetuada com sucesso";
    }*/