<?php
session_start();
if(!isset($_SESSION['id_usuario']))
{
    header("location:index.php");
    exit;
}
echo '<input type="button" style="width:80px;height:30px" value="SourceCode" onclick="window.location=\'https://netflix-app-theta.vercel.app/\'" />';
?>

Muito bem!, Clique no Botão ao lado para acessar o nosso site!

<a href="sair.php">sair</a>

