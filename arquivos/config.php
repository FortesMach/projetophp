<?php

    $dbHost = 'monorail.proxy.rlwy.net';
    $dbUserName = 'root';
    $dbPassword = 'tbAGHQWiaBilWkkisuhJPfhbJacvKsRz';
    $dbPort = '20015';
    $dbName = 'railway';

    $conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbPort, $dbName);

    // if ($conexao->connect_error) 
    //{
    //    echo "Erro";
    //}
    //else{
    //    echo "Conexão realizada com sucesso";
    //}

