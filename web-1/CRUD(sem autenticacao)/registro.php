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

$nome= $_POST['nome'];
$senha= $_POST['senha'];
$email= $_POST['email'];

$linha= implode(',', [$nome, $email, $senha]). "\n";

$cadastro= file('cadastro.csv')!=null?file('cadastro.csv'): 1;

for ($i=0; $i <sizeof($cadastro) ; $i++) { 
    
    if($linha==$cadastro[$i]){

        echo "<div id='mensagem'><span id='erro'>O cadastro já foi realizado, tente logar como usuário!</span></div>";
    
    }else if($i==(sizeof($cadastro)-1)){

        $fp= fopen('cadastro.csv', 'a');
        fwrite($fp, $linha);
        fclose($fp);
        
        echo "<div id='mensagem'><span>O cadastro foi concluido com sucesso!</span></div>";
        
    }

}

?>

<body>

<a href="logar.php"><button>Voltar</button></a>
 
</body>
</html>