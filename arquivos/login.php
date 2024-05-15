<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, #77aaff, #5588ff);
            margin: auto;
        }

        .tela-login{
            background-color: black;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 50px;
            border-radius: 15px;
            color: white;
        }

        input{
            border: none;
            padding: 15px;
            outline: none;
            font-size: 15px;

        }
        .inputSubmit{
            background-image: linear-gradient(to right, #77aaff, #5588ff);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-image: linear-gradient(to right, #5588ff, #3366ff);
            cursor: pointer;
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
        <a href="home.php" class="btn-danger">Voltar</a>
    </div>
    <div class="tela-login">
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuário">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>