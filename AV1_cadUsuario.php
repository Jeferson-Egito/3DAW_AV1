<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$ehPost = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $funcao = $_POST["funçao"];
    $cadastroUsuario = fopen("Usuarios.txt", "w");
    $txt = "nome;matricula;funcao\n";
    fwrite($arquivoUsuario,$txt);
    $txt = $nome . ";" . $matricula . ";" . $funcao . "\n";
    fwrite($arquivoUsuario,$txt);
    $txt2 = "$nome;$matricula;$funcao\n";
    fwrite($arquivoUsuario,$txt2);
    fclose($arquivoUsuario);
} else {
    $ehPost = false;
}
?>
<a href="AV1_cadUsuario.php">Inserir Usuário</a><br>
<a href="AV1_altUsuario.php">Alterar Usuário</a><br>
<a href="AV1_listUsuario.php">Listar Usuários</a><br>
<a href="AV1_excluirUsuario.php">Excluir Usuário</a><br><br>

<h1>Inserir Usuário</h1>

<h3><?php if ($ehPost) {echo "Usuario $nome inserido com sucesso";} ?></h3>

<form action="AV1_cadUsuario.php" method="POST">
    nome:   <input type="text" name="Usuario"><br>
    matricula:   <input type="text" name="matricula"><br>
    função:   <input type="text" name="funcao"><br>
    <input type="submit" value="enviar">
</form>
</body>
</html>