<?php
session_start();
// header('Content-Type: application/json');
// if(isset($_SESSION['username'])) {
//         echo json_encode(['username' => $_SESSION['username']]);
// } else {
//         echo json_encode(['error' => 'Usuário não logado.', 'session' => $_SESSION]);
// }

if (isset($_SESSION['usuario_logado'])) {
        echo $_SESSION['usuario_logado'];
} else {
        echo "Nenhum usuário logado";
}
