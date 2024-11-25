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

<body class="flex justify-center items-center h-screen bg-slate-100
bg-gradient-to-r from-customColor-home to-violet-950">

    <div class="w-96 h-96 border-2 border-slate-500 p-7 rounded-lg 
    bg-slate-100">

        <form action="cadastro.php" method="POST" class="grid grid-rows-8 grid-cols-2 w-full h-full gap-2 justify-items-center">
            <h2 class="row-start-1 col-span-2 flex justify-center items-center text-2xl font-bold">Cadastre-se</h2>
            <input class="row-start-2 col-span-2 border-2 border-slate-300 pl-2 w-full rounded-md" type="text" name="usuario" placeholder="Nome de usuário" required>
            <input class="row-start-3 col-span-2 border-2 border-slate-300 pl-2 w-full rounded-md" type="email" name="email" placeholder="E-mail" required>
            <input class="row-start-4 col-span-2 border-2 border-slate-300 pl-2 w-full rounded-md" type="password" name="senha" placeholder="Senha" required>
            <input class="row-start-5 col-span-2 border-2 border-slate-300 pl-2 w-full rounded-md" type="password" name="confirma" placeholder="Confirme a Senha" required>
            <input class="row-start-6 col-span-2 flex justify-center items-center
                            cursor-pointer transition bg-sky-600 hover:bg-sky-800 w-44 border-2 border-slate-300
                            font-semibold text-md text-white rounded-md" type="submit" value="Cadastrar-se">

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

                    echo "<span class='row-start-7 col-start-1 col-span-2 text-lime-400 flex justify-center items-center'>Cadastro realizado com sucesso!</span>";

                    if (isset($_SESSION['usuario'])) {
                        $_SESSION['usuario'][] = $usuario;

                    } else {
                        $_SESSION['usuario'] = [$usuario];
                    }
                    
                } else {
                    echo "<span class='row-start-7 col-start-1 col-span-2 text-red-600 flex justify-center items-center'>As senhas não conferem!</span>";
                }
            }
            ?>
        <a href="./login.php" class="col-start-1 row-start-8 transition hover:text-blue-500 flex items-center font-medium">Faça login!</a>
        <a href="../index.php" class="col-start-2 row-start-8 transition hover:text-blue-500 flex items-center font-medium">Home</a>
        </form>


    </div>
</body>

</html>