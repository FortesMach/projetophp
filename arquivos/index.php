<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema PHP</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #77aaff, #5588ff);
            text-align: center;
            color: white;
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }

        a{
            text-decoration: none;
            color: white;
            border: 3px solid #77aaff;
            border-radius: 10px;
            padding: 10px;
        }

        a:hover{
            background-color: #77aaff;
        }


    </style>
</head>
<body>
    <h1>Bem vindo ao Sistema PHP</h1>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>