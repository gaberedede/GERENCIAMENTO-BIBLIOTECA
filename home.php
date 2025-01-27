<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(156, 154, 154), rgb(71, 71, 71));
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid white;
            border-radius: 10px;
            padding: 10px;
            display: block;
        }
        a:hover{
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <h1>Gerenciamento da Biblioteca de Paranaguá</h1>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>