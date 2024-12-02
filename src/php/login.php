<?php
session_start()
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

    <div class="w-96 h-96 border-2 border-slate-500 p-7 rounded-lg 
        bg-slate-100">
        <form action="login.php" method="POST" class="grid grid-rows-6 grid-cols-2 w-full h-full gap-6 justify-items-center">

            <h2 class="row-start-1 col-span-2 flex justify-center items-center text-2xl font-bold">Faça seu login</h2>
            <input class="row-start-2 col-span-2 border-2 border-slate-300 pl-2 w-full rounded-md" type="text" name="logEmailUsuario" placeholder="E-mail ou nome de usuário" required>
            <input class="row-start-3 col-span-2 border-2 border-slate-300 pl-2 w-full rounded-md" type="password" name="logSenha" placeholder="Senha" required>
            <input class="row-start-4 col-span-2 flex justify-center items-center
                            cursor-pointer transition bg-sky-600 hover:bg-sky-800 w-44 border-2 border-slate-300
                            font-semibold text-md text-white rounded-md" type="submit" value="Logar">

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $logEmailUsuario = $_POST['logEmailUsuario'];
                $logSenha = $_POST['logSenha'];
                $loginSucesso = false;

                // Abrir txt cadastros.txt para leitura 
                $txtCadastros = fopen('cadastros.txt', 'r');
                if ($txtCadastros) {
                    while (($linha = fgets($txtCadastros)) !== false) {

                        if (strpos($linha, ',') !== false) {
                            $dados = explode(",", trim($linha));

                            if (count($dados) === 3) {
                                list($armazena_usuario, $armazena_email, $armazena_senha) = explode(",", trim($linha));

                                if (($armazena_email == $logEmailUsuario || $armazena_usuario == $logEmailUsuario) && password_verify($logSenha, $armazena_senha)) {

                                    $loginSucesso = true;

                                    $_SESSION['nome_usuario'] = $armazena_usuario;
                                    $_SESSION['nome_real'] = $armazena_usuario;

                                    file_put_contents('nome-de-usuario.txt', $armazena_usuario); // Salvar o usuário logado
                                    break;
                                }
                            }
                        }
                    }
                    fclose($txtCadastros);
                }

                if ($loginSucesso) {
                    header("Location: index.php");
                    exit();
                } else {
                    echo "<span class='row-start-5 col-start-1 col-span-2 text-red-600 flex justify-center items-center'>Email ou senha inválidos!</span>";
                };
            };


            ?>
            <a href="./cadastro.php" class="col-start-1 row-start-6 transition hover:text-blue-500 flex items-center font-medium">Cadastre-se!</a>
            <a href="./index.php" class="col-start-2 row-start-6 transition hover:text-blue-500 flex items-center font-medium">Home</a>
        </form>

    </div>
</body>

</html>