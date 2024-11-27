<?php
require_once 'arrays-cursos.php';
$index = $_GET['index'];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FocusHub</title>
    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="../scrollbar.css">
</head>

<body class="w-full h-full bg-slate-200 font-josefin">

    <div id="header"></div>

    <div class="w-full h-full grid grid-cols-3 grid-rows-2 gap-7 p-7">
        <?php
            foreach ($cursos as $key => $curso) {
                if ($key == $index) {
                    echo '<div class="col-start-1 col-span-2 row-start-1 row-span-2 text-justify border-2 border-slate-300 p-5 bg-white shadow-lg flex flex-col gap-3">';
                    echo '<h1 class="font-bold text-2xl col-start-1">' . $curso['nome'] . '</h1>';
                    echo '<p class="col-start-1">' . $curso['descricao'] . '</p>';
                    echo '<p class="col-start-1">' . $curso['aprendera'] . '</p>';
                    echo '<img class="col-start-1 flex" src="../img/arrays/' . $curso['imagem'] . '" alt="Imagem do curso">';
                    echo '</div>';
                }
            }
        ?>

        <div class="row-start-1 col-start-3 w-full h-full bg-white shadow-lg
        grid grid-rows-5">
        <span class="font-extrabold text-3xl text-green-600 flex justify-center items-center bg-red-100">GRATIS</span>

        </div>

        <div class="row-start-2 col-start-3 w-full h-full bg-white shadow-lg
        grid grid-rows-5">
        

        </div>
    </div>
    <div id="footer"></div>

    <script src="../components/header.js"></script>
    <script src="../components/footer.js"></script>
</body>

</html>