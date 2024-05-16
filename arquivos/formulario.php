<?php

    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Telefone: ' . $_POST['telefone']);
        //print_r('<br>');
        //print_r('Sexo: ' . $_POST['genero']);
        //print_r('<br>');
        //print_r('Data de Nascimento: ' . $_POST['dataNascimento']);
        //print_r('<br>');
        //print_r('Cidade: ' . $_POST['cidade']);
        //print_r('<br>');
        //print_r('Estado: ' . $_POST['estado']);
        //print_r('<br>');
        //print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['dataNascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao,"INSERT INTO usuarios(nome, usuario, senha, email, telefone, sexo, data_nasc, cidade, estado, endereco) 
        VALUES ('$nome', '$usuario', '$senha', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");

        header('Location: login.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema PHP</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, #77aaff, #5588ff);
            margin: auto;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
        }
        fieldset{
            border: 3px solid #77aaff;
        }
        legend{
            border: 1px solid #77aaff;
            padding: 10px;
            text-align: center;
            background-color: #77aaff;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: 0.5s;
        }
        
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: #77aaff;
        }

        #dataNascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit{
            background-image: linear-gradient(to right, #77aaff, #5588ff);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            border-radius: 10px;
            cursor: pointer;
        }

        #submit:hover{
            background-image: linear-gradient(to right, #5588ff, #3366ff);
        }

        .btn-danger{
            background-color: #dc3545;
            padding: 10px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            color: white;
            display: flex;
            width: 40px;
            margin: 10px 0 10px 10px;
        }

        .btn-danger:hover{
            background-color: #bb2d3b;
        }

        .nav{
            display: flex;
            position: relative;
            background-image: linear-gradient(to right, #5588ff, #3366ff);
        }
    </style>
</head>
<body>
    <div class="nav">
        <a href="index.php" class="btn-danger">Voltar</a>
    </div>
    
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Registro de Funcionários</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="usuario" id="usuario" class="inputUser" required>
                    <label for="usuario" class="labelInput">Usuario</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Sexo</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="dataNascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="dataNascimento" id="dataNascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>