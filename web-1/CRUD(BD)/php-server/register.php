<?php
require_once('banco.php');

//recebe os valores respectivos do formulário de registro e aloca a uma variável.
$username= $_POST['username'];
$email= $_POST['email'];
$passwd= sha1($_POST['passwd']);//sha1 cripytografa a senha registrada pelo.

$stmt= $pdo->prepare("SELECT * FROM users WHERE user_name=?");
$stmt->execute([$username]);

$stmt2= $pdo->prepare("SELECT * FROM users WHERE user_email=?");
$stmt2->execute([$email]);
    
    if($stmt->rowcount()>0&&$stmt2->rowcount()>0){

       header('location:../reg_form.php?message=O cadastro já existe&color=253, 204, 201');
       exit();

    }else if($stmt->rowcount()>0){

        header('location:../reg_form.php?message=Username já cadastrado&color=253, 204, 201');
        exit();

    }else if($stmt2->rowcount()>0){

        header('location:../reg_form.php?message=Email já cadastrado&color=253, 204, 201');
        exit();

    }

//se os dados já não forem cadastrados, o programa os cadastra e envia uma mensagem pelo metodo get de validação.
$stmt= $pdo->prepare("INSERT INTO users(user_name, user_email, user_pass) VALUES (?, ?, ?)");
$stmt->execute([$username, $email, $passwd]);
//reciona a pagina com a menssagem de valediredação.
header('location:../reg_form.php?message=Cadastrado com sucesso&color=232, 253, 201');