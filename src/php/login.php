<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="../scrollbar.css">
</head>

<body>

        <div>

            <form action="login.php" method="POST">
                <h2>Login</h2>
                <input type="email" name="logEmail" placeholder="E-mail" required >
                <input type="password" name="logSenha" placeholder="Senha" required >
                <input type="submit" value="Logar">

                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $logEmail = $_POST['logEmail'];
                    $logSenha = $_POST['logSenha'];
                    $loginSucesso = false;

                    if (isset($_SESSION['cadastro'])) {
                        foreach ($_SESSION['cadastro'] as $user) {
                            if ($user['email'] === $logEmail && $user['senha'] === $logSenha) {
                                $loginSucesso = true;
                                break;
                            }
                        }
                    }

                    if ($loginSucesso) {
                        echo "<span>Login realizado com sucesso!</span>";
                    } else {
                        echo "<span>Email ou senha inválidos!</span>";
                    }
                }
                ?>

            </form>

            <a href="./cadastro.php">
                Cadastre-se!
            </a>
            </div>
</body>

</html>