<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crud.css">
    <title>CRUD</title>
</head>

<?php
require_once("php-server/banco.php");
//Função php que inicia uma sessão e seta um cookie php para o client que serve como identificador.
session_start();
//Variável que recebe os dados registrados do usuário na variaável global de sessão.
$user= $_SESSION['user'];
//Variável que recebe os dados registrados no arquivo csv.

$stmt= $pdo->prepare("SELECT * FROM itens WHERE user_fk=?");

$stmt->execute([$_SESSION['id']]);

$itens= $stmt->fetchAll();
?>

<body>

<div id="screen">

    <div id="menu">
        <nav>   
            <span>Lista de compras</span>
            <?php if(isset($user)):?>
            <span id="user"><?=$user?><span>-</span><a href="index.php">Logout</a></span> 
            <?php endif?>    
        </nav>
    </div>   
    

    <form id="add" action="php-server/add.php" method="POST">
            <h1>Add</h1>
            <input type="text" name="item" class="email" placeholder="Item da lista" required>
            <input type="submit" value="Add" class="button">
        </form>

        <div id="list">

            <table>
                <h2>Itens da lista</h2>

                <?php foreach($itens as $item):?>
                    <tr>    
                        <td><?=$item['item_name']?></td>
                        <!-- botão de delete que passa o indice do item por pelo metodo get ao servidor para a exclusão do item da lista -->
                        <td id="delete"><a href="php-server/delete.php?key=<?=$item['item_id']?>">Delete</a></td>
                    </tr>
                <?php endforeach ?>
            
            </table>

        </div>

</div>