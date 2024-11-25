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

<body class="flex justify-center items-center h-screen bg-slate-100
            bg-gradient-to-r from-customColor-home to-violet-950">

        <div class="w-96 h-96">
            <form action="login.php" method="POST" class="grid grid-rows-6 grid-cols-2 w-full h-full">

                <h2 class="row-start-1 col-span-2 flex justify-center items-center">Login</h2>
                <input class="row-start-2 col-span-2 flex justify-center items-center" type="email" name="logEmail" placeholder="E-mail" required >
                <input class="row-start-3 col-span-2 flex justify-center items-center" type="password" name="logSenha" placeholder="Senha" required >
                <input class="row-start-4 col-span-2 flex justify-center items-center" type="submit" value="Logar">

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
                        echo "<span class='row-start-5 flex justify-center items-center'>Login realizado com sucesso!</span>";
                    } else {
                        echo "<span class='row-start-4 flex justify-center items-center'>Email ou senha inválidos!</span>";
                    }
                }
                ?>
                <a href="./cadastro.php" class="col-start-1 row-start-6 flex justify-center items-center">Cadastre-se!</a>
                <a href="../index.php" class="col-start-2 row-start-6 flex justify-center items-center">Home</a>
            </form>

            </div>
</body>

</html>