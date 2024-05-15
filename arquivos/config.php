<?php

    $dbHost = 'Localhost';
    $dbUserName = 'root';
    $dbPassword = '1234';
    $dbName = 'formulario-victor';

    $conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

    // if ($conexao->connect_error) 
    //{
    //    echo "Erro";
    //}
    //else{
    //    echo "Conexão realizada com sucesso";
    //}

