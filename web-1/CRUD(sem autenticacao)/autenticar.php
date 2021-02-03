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
            color:red;
        }

        span#erro{
            color: red;
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

$email= $_POST['email'];
$senha= $_POST['senha'];

$cadastros= file('cadastro.csv');
$logado= false;

foreach ($cadastros as $cadastro) {
    
    list($n, $e, $s)= explode(',',$cadastro);    
if(trim($e)==$email&&trim($s)==$senha){
    $_SESSION["usuario"]= $n;
    header('location:logado.php');
    exit();
$logado= true;
}

}

echo '<div id="mensagem"><span>E-mail ou senha incorreta.</span></div>';


?>

<body>

<a href="logar.php"><button>Voltar</button></a>
 
</body>
</html>