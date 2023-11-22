<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '166350';
    $dbName = 'mydb';

    $conexao = new mysqli ($dbHost,$dbUsername,$dbPassword,$dbName);

    if ($conexao->connect_errno)
    {
        echo "erro";
    
    }
    else
    {
        echo "conexao efetuada com sucesso";
    }
?>