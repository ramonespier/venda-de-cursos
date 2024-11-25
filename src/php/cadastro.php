<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="../scrollbar.css">
</head>

<body>

    <div>

        <form action="cadastro.php" method="POST">
            <h2>Cadastro</h2>
            <input type="text" name="usuario" placeholder="Nome de usuário" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="password" name="confirma" placeholder="Confirme a Senha" required>
            <input type="submit" value="Cadastrar">

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $usuario = $_POST['usuario'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $confirma = $_POST['confirma'];

                if ($confirma === $senha) {
                    $novoCadastro = [
                        'usuario' => $usuario,
                        'email' => $email,
                        'senha' => $senha
                    ];

                    if (isset($_SESSION['cadastro'])) {
                        $_SESSION['cadastro'][] = $novoCadastro;
                    } else {
                        $_SESSION['cadastro'] = [$novoCadastro];
                    }

                    echo "<span>Cadastro realizado com sucesso!</span>";

                    if (isset($_SESSION['usuario'])) {
                        $_SESSION['usuario'][] = $usuario;

                    } else {
                        $_SESSION['usuario'] = [$usuario];
                    }

                    print_r($_SESSION['usuario']);
                    
                } else {
                    echo "<span>As senhas não conferem!</span>";
                }
            }
            ?>
        </form>

        <a href="./login.php">
            Faça login!
        </a>

        <a href="../index.php">Home</a>

    </div>
</body>

</html>