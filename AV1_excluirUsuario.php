<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<a href="AV1_cadUsuario.php">Inserir Usuário</a><br>
<a href="AV1_altUsuario.php">Alterar Usuário</a><br>
<a href="AV1_listUsuario.php">Listar Usuário</a><br>
<a href="AV1_excluirUsuario.php">Excluir Usuário</a><br><br>

<h1>Excluir Usuário</h1>
<?php
$nomeArquivo = "Usuarios.txt";
$arquivoUsuario = fopen($nomeArquivo, "r") or die("Erro leitura arquivo");
$cabecalho = fgets($arquivoUsuario);
$x = 0;
while (!feof($arquivoUsuario)) {
    $linha[] = fgets($arquivoUsuario);

}
fclose($arquivoUsuario);
$search = $nome;
?>

<a href="AV1_cadUsuario.php">Inserir Usuário</a><br>
<a href="AV1_altUsuario.php">Alterar Usuário</a><br>
<a href="AV1_listUsuario.php">Listar Usuários</a><br>
<a href="AV1_excluirUsuario.php">Excluir Usuário</a><br><br>

    <h1>Excluir Usuário</h1>

<form action="AV1_excluirUsuario.php" method="POST">
    matricula: <input type="text" name="matricula" ><br>
    nome:   <input type="text" name="nome"><br>
    função:   <input type="text" name="funcao"><br>
    <input type="submit" value="Excluir">
</form>

</body>
</html>