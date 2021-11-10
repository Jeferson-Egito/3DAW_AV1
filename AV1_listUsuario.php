<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$nomeArquivo = "Usuarios.txt";
$arquivoUsuario = fopen($nomeArquivo, "r") or die("Erro leitura arquivo");
$cabecalho = fgets($arquivoUsuario);
$x = 0;
while (!feof($arquivoUsuario)) {
    $linha[] = fgets($arquivoUsuario);

}
fclose($arquivoUsuario);
?>
<a href="AV1_cadUsuario.php">Inserir Usuário</a><br>
<a href="AV1_altUsuario.php">Alterar Usuário</a><br>
<a href="AV1_listUsuario.php">Listar Usuário</a><br>
<a href="AV1_excluirUsuario.php">Excluir Usuário</a><br><br>

<h1>Listar Usuário</h1>

<table>
    <tr>
        <th>Nome Usuário</th>
        <th>matricula</th>
        <th>função</th>
    </tr>
<?php
    for ($x=0;$x <= count($linha); $x++)
    echo "$linha";
    

    //</tr>
?>
</table>

</body>
</html>