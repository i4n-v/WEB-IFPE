<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
         body{
             background-color: rgba(0,0,0,0.6);
         }

        div#mensagem{
            color: white;
            font-size: 3em;
            border-radius: 20px;
            box-shadow: 5px 5px 5px black;
            background-color: rgba(0,0,0,0.7);
            max-width: 1050px;
            height: 300px;
            margin: auto;
            margin-top: 50px;
            text-align: center;
            padding-top: 200px;
            text-shadow: 3px 3px 3px black;
            
        }

        span#erro{
            color: red;
        }
        span#user{
            color: green;
        }

        button{
            position: absolute;
            left: 610px;
            bottom: 200px;
            width: 150px;
            height: 60px;
            box-shadow: 4px 4px 4px black;
        }

        button:hover{
            background-color:#FFF873;
            transition: 0.9s;
            cursor: pointer;
            font-size: 1em;
        }
        
        a{
            text-decoration: none;
        }

    </style>
</head>

<?php

session_start();

    echo '<div id="mensagem"><span>Seja bem vindo ' .'<span id="user">'. $_SESSION['usuario'] . '</span>' . '</span></div>';

 ?>   

<body>

<a href="logar.php"><button>Sair</button></a>
 
</body>
</html>