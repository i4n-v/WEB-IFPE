<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crud.css">
    <title>CRUD</title>
</head>
<body>

<!-- Web site com modelo de salvamento de dados no arquivo CSV. -->
<!-- Dividisse em 3 divs que formam o layout do site -->
<!-- Baseia-se em formulários que são tratados por php, usando conceitos de sessions, cookies e banco de dados representados pelo arquivo csv.-->

<div id="screen">

    <div id="menu">
        <nav>   
            <span>Lista de compras</span>
        </nav>
    </div>    

<!-- Formulário de login que envia os dados pelo metodo POST ao servidor php-->
        <form action="php-server/aut.php" method="POST">

        <h1>Login</h1>

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
  
            <input type="text" name="user" class="email" placeholder="E-mail/Username" minlength="3" required>
            <input type="password" name="passwd" class="password" placeholder="Password" minlength="8" required>
            <input type="submit" value="Sign in" class="button">
            <button class="register"><a href="reg_form.php">Register</a></button>
        </form>


</div>
    
</body>
</html>