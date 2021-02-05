<?phP
session_start();//inicia a sessão.

//verifica se o usuário está logado.
if(!isset($_SESSION['user'])){
    header('locatiom:../index.php');
    exit();
}

require_once("banco.php");

//adiciona os dados de sessãoo e do metodo get a uma variável.
$user= $_SESSION['user'];

$key= $_GET['key'];

$stmt= $pdo->prepare("SELECT * FROM itens WHERE item_id=?");
$stmt->execute([$key]);

$item_data= $stmt->fetchAll();

//verifica se o suário que está tentando remover é o mesmo que está logado.
if($item_data[0]['user_fk']!=$_SESSION['id']){
    header('location:../index.php');
    exit();
}

$stmt= $pdo->prepare("DELETE FROM itens WHERE item_id=?");
$stmt->execute([$key]);

header('location:../logado.php');//redioreciona para a pagina já autenticada.
       
?>