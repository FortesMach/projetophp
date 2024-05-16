<?php

    $dbHost = 'monorail.proxy.rlwy.net:20015';
    $dbUserName = 'root';
    $dbPassword = 'tbAGHQWiaBilWkkisuhJPfhbJacvKsRz';
    $dbName = 'railway';

    $conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

    // if ($conexao->connect_error) 
    //{
    //    echo "Erro";
    //}
    //else{
    //    echo "Conexão realizada com sucesso";
    //}

