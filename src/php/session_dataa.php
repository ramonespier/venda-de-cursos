<?php
session_start();

// if($_SERVER['REQUEST_METHOD'] == 'POST') {
//     if(isset($_SESSION['$logEmail']) && isset($_SESSION['$logSenha'])) {
        echo json_encode(['usuario' => $_SESSION['usuario']]);
// }
// }
?>

