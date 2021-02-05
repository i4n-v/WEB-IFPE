<?php
session_start();//inicia a sessão para utilização dos dados registrados na global de sessão.

//verifica se o usuário está autenticado, caso não, redireciona para página de login.
if(!isset($_SESSION['user'])){
    header('locatiom:../index.php');
    exit();
} 

require_once("banco.php");

//recebe os dados da sessão e do formulário.
$item= $_POST['item'];
var_dump($item);
$stmt= $pdo->prepare("INSERT INTO itens(item_name, user_fk) VALUES (?, ?)");
$stmt->execute([$item, $_SESSION['id']]);

header('location:../logado.php')
//Redireciona para a página autenticada.
?>