<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticando</title>
    <style>
    
    body{
        max-width: 1200px;
        background-color: rgba(0,0,0,0.5);
    }

    h1{
        color: white;
        text-shadow: 2px 2px 2px black;
    }

    div{
        max-width: 400px;
        margin: auto;
        font-size: 2em;
    }

    div#login{
        margin-bottom: 40px;
    }


    div fieldset{
        background-color: rgba(0,0,0,0.7);
        color: whitesmoke;
        box-shadow: 2px 1px 2px black;
    }
    legend{
        text-shadow: 2px 2px 2px black;
    }
    input:hover{
        background-color: #FFFBAB;
        transition: 0.7s;
        }
        input.bot{
        cursor: pointer;
        }
    
    </style>
</head>

<?php




?>

<body>

<h1>Login/Registro</h1>

<div id="login">

<form action="autenticar.php" method="POST">
<fieldset>
    <legend>Login</legend>
        <input type="email" name="email" minlength="10" placeholder="E-mail">
        <input type="password" name="senha" minlength="8" placeholder="Senha">   
        <input type="submit" value="Logar" class="bot">
</fieldset>
</form>

</div>

<div id="registro">

<form action="registro.php" method="POST">
<fieldset>
    <legend>Registro</legend>
        <input type="text" name="nome" placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Registrar" class="bot">
</fieldset>
</form>
</div>

</body>
</html>