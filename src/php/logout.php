<?php
session_start(); 
session_unset();
session_destroy();
file_put_contents('nome-de-usuario.txt', '');
header("Location: index.php");
exit();
?>
