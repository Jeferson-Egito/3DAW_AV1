<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<a href="AV1_cadUsuario.php">Inserir Usuario</a><br>
<a href="AV1_altUsuario.php">Alterar Usuario</a><br>
<a href="AV1_listUsuario.php">Listar Usuario</a><br>
<a href="AV1_excluirUsuario.php">Excluir Usuario</a><br><br>

<h1>Alterar Usuario</h1>
<?php
$mat = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST[""];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $mat = $_POST["matricula"];
    
} else {
    $mat = $_GET["matricula"];
}

?>
<form action="AV1_alterarUsuario.php" method="POST">
    matricula: <input type="hidden" name="matricula" value="123456"> 123456<br>
    nome:   <input type="text" name="Usuario" value="Jose da Silva"><br>
    email:   <input type="text" name="email" value="ze@faeterj.edu.br"><br>
    idade:   <input type="text" name="idade" value="22"><br>
    <input type="submit" value="Alterar">
</form>

</body>
</html>