<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crud.css">
    <title>CRUD</title>
</head>
<body>

<div id="screen">

    <div id="menu">
        <nav>   
            <span>Lista de compras</span>
        </nav>
    </div>    

    <!-- Formulário de registro que envia os dados pelo metodo POST ao servidor php-->
      
        <form action="php-server/register.php" method="POST">

         <h1>Register</h1>

        <?php
// Variável que recebe a cor da div de mensagem, representando erro ou sucesso.
$color=isset($_GET['color'])?$_GET['color']:'';       
// Variável que recebe uma mensagem pelo metodo get, confirmando ou não o login.
$message= isset($_GET['message'])?$_GET['message']:'';
//condição que verifica se existe uma mensagem de login vinda do servidor php e exibe a div de menssagem.
    if($message!=''){    
    echo "<div id='message' style='background-color:rgb(".$color.");'><h4>".$message."</h4></div>";
}
?>  

            <input type="text" name="username" class="username" placeholder="User name" required minlength="3">
            <input type="email" name="email" class="email" placeholder="E-mail" required>
            <input type="password" name="passwd" class="password" placeholder="Password" minlength="8" required>
            <input type="submit" value="Confirm" class="button">
            <button class="register"><a href="/">Login page</a></button>
        </form>

</div>
    
</body>
</html>