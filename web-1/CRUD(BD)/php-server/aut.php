<?php
require_once("banco.php");
//inicia a sessão.
session_start();
//recebe os valores respectivos do formulário de login e aloca a uma variável.
$user= $_POST['user'];
$passwd=sha1($_POST['passwd']);//cripytografa a senha para validação.

$stmt= $pdo->prepare("SELECT * FROM users WHERE (user_name=? AND user_pass=?) OR (user_email=? AND user_pass=?)");

$stmt->execute([$user, $passwd, $user, $passwd]);

$dados= $stmt->fetchAll();

//verifica se os dados de login estão de acordo com o de registro.
if(sizeof($dados)>0){
    //caso os dados estejam corretos, adiciona os dados do usuário a uma variável de sessão, e redireciona para pagina já autenticada.
    $user= $dados[0];
    $_SESSION["user"]= $user['user_name'];
    $_SESSION["id"]= $user['user_id'];
    header('location:../logado.php');
    exit();
}

//caso os dados estejam incorretos ou não constem como registrados, o programa redireciona com, um menssagem de erro para a página de login.

header("location:../index.php?message=usúario ou senha incorretos&color=253, 204, 201")


?>