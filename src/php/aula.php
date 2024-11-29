<?php
require_once 'arrays-cursos.php';
$index = $_GET['index'];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

        <?php foreach ($cursos as $key => $curso) {
            if ($key == $index) {
                echo $curso['nome'];
            }
        } ?>
    </title>

    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="../scrollbar.css">
    <link rel="shortcut icon" href="../img/FocusHub.png" type="image/x-icon">
</head>

<body class="h-screen bg-gradient-to-b from-indigo-950 via-indigo-900 to-indigo-950 font-josefin text-white">

    <div id="header"></div>

        <main class="grid md:grid-cols-3 md:grid-rows-4 grid-rows-10 grid-cols-1 h-full gap-3">
            <div class="md:col-start-1 md:col-span-2 row-start-1 row-span-2 md:row-span-3 bg-slate-300 md:m-10 m-5"></div>

            <div class="bg-slate-300 md:col-start-3 md:row-start-1 md:row-span-4 ml-10"></div>

            <div class="row-start-4 col-start-1 col-span-2 flex flex-col justify-center items-center gap-6 m-10">
                <span class="text-3xl">PROGRESSO:</span>
                <div class="h-5 w-full border-green-400 border-2"></div>
            </div>

        </main>


    <div id="footer"></div>

    <script src="../components/header.js"></script>
    <script src="../components/footer.js"></script>

</body>

</html>