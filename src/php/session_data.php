<?php
$usuarioLogado = file_get_contents('nome-de-usuario.txt');
echo $usuarioLogado ? $usuarioLogado : "Usuário não logado";
?>
