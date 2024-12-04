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

        <form action="cadastro.php" method="POST" class="grid grid-rows-9 grid-cols-2 w-full h-full gap-2 justify-items-center">
            <h2 class="row-start-1 col-span-2 flex justify-center items-center text-2xl font-bold">Cadastre-se</h2>
            <input class="row-start-2 col-span-2 border-2 border-slate-300 pl-2 w-full rounded-md" type="text" name="nome" placeholder="Nome completo" required>
            <input class="row-start-3 col-span-2 border-2 border-slate-300 pl-2 w-full rounded-md" type="text" name="usuario" placeholder="Nome de usuário" required>
            <input class="row-start-4 col-span-2 border-2 border-slate-300 pl-2 w-full rounded-md" type="email" name="email" placeholder="E-mail" required>
            <input class="row-start-5 col-span-2 border-2 border-slate-300 pl-2 w-full rounded-md" type="password" name="senha" placeholder="Senha" required>
            <input class="row-start-6 col-span-2 border-2 border-slate-300 pl-2 w-full rounded-md" type="password" name="confirma" placeholder="Confirme a Senha" required>
            <input class="row-start-7 col-span-2 flex justify-center items-center
                            cursor-pointer transition bg-sky-600 hover:bg-sky-800 w-44 border-2 border-slate-300
                            font-semibold text-md text-white rounded-md" type="submit" value="Cadastrar-se">

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nome = $_POST['nome'];
                $usuario = $_POST['usuario'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $confirma = $_POST['confirma'];

                if ($confirma === $senha) {

                    $senhaCripto = password_hash($senha, PASSWORD_DEFAULT);

                    // montar string de dados para salvar 
                    $novoCadastro = $usuario . ',' . $email . "," . $senhaCripto . "," . $nome ."\n";

                    // abrir txt para escrita ('a') (se o txt nao existir, é criado)
                    $txt = fopen('cadastros.txt', 'a');
                    // escrever dados no txt
                    fwrite($txt, $novoCadastro);
                    fclose($txt);

                    $userLogin = $usuario . "\n";
                    $txt = fopen('nome-de-usuario.txt', 'a');
                    fwrite($txt, $userLogin);
                    fclose($txt);

                    $_SESSION['nome_usuario'] = $usuario;
                    $_SESSION['nome_real'] = $nome;

                    echo "<span class='row-start-8 col-start-1 col-span-2 text-lime-400 flex justify-center items-center'>Cadastro realizado com sucesso!</span>";
                } else {
                    echo "<span class='row-start-8 col-start-1 col-span-2 text-red-600 flex justify-center items-center'>As senhas não conferem!</span>";
                }
            }
            ?>

            <a href="./login.php" class="col-start-1 row-start-9 transition hover:text-blue-500 flex items-center font-medium">Faça login!</a>
            <a href="./index.php" class="col-start-2 row-start-9 transition hover:text-blue-500 flex items-center font-medium">Home</a>
        </form>


    </div>
</body>

</html>