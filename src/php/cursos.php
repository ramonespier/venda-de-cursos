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
    <link rel="shortcut icon" href="../img/FocusHub.png" type="image/x-icon">
    <link rel="stylesheet" href="../card.css">
</head>

<body class="w-full h-full bg-gradient-to-b from-indigo-950 via-indigo-900 to-indigo-950 font-josefin">

    <div id="header"></div>

    <div class="w-full h-full grid grid-cols-1 grid-rows-3 md:grid-cols-3 md:grid-rows-2 gap-7 md:p-7 p-3">
        <?php
        foreach ($cursos as $key => $curso) {
            if ($key == $index) {
                echo '<div class="md:col-start-1 md:col-span-2 row-start-1 row-span-2 text-justify border-2 border-slate-300 p-5 bg-slate-200 shadow-lg flex flex-col justify-evenly gap-3 rounded-xl">';
                echo '<h1 class="font-bold text-2xl col-start-1">' . $curso['nome'] . '</h1>';
                echo '<p class="col-start-1">' . $curso['descricao'] . '</p>';
                echo '<p class="col-start-1">' . $curso['aprendera'] . '</p>';
                echo '<img class="col-start-1 flex" src="../img/arrays/' . $curso['imagem'] . '" alt="Imagem do curso">';
                echo '</div>';
            }
        }
        ?>

        <div class="md:row-start-1 md:col-start-3 row-start-3 col-start-1 w-full h-full bg-slate-200 shadow-lg
        grid grid-rows-5 justify-items-center rounded-xl">
            <span class="row-start-1 font-extrabold text-3xl text-green-600 flex justify-center items-center w-full">GRATIS</span>

            <p class="row-start-2 self-center text-xl">Duração: 30 minutos.</p>
            <p class="row-start-3 pl-4 pr-4 text-justify">Você ganhará um certificado após a conclusão do curso. É necessario acertar 70% das questões para obter o certificado.</p>   

            <?php
                foreach($cursos as $key => $curso) {
                    if ($key == $index) {
                        echo '<a href="./aula.php?index='.$key.'" class="row-start-4 bg-green-600 hover:bg-green-700 transition text-white
            font-bold flex justify-center items-center self-center rounded-xl text-2xl p-2 pr-4 pl-4">Assista a aula!</a>';
                }
            }
            ?>
            
            <?php
                foreach($cursos as $key => $curso) {
                    if ($key == $index) {
                        echo '<a href="./avaliacao.php?index='.$key.'" class="row-start-5 bg-blue-500 hover:bg-blue-600 transition text-white
                        font-bold flex justify-center items-center self-center rounded-xl text-2xl pl-10 pr-10 p-2">Avalie o curso!</a>';
                }
            }
            ?>
        </div>

        <div class="md:row-start-2 md:col-start-3 hidden w-full h-full bg-slate-200 shadow-lg
        md:grid md:grid-rows-5 gap-1 rounded-xl justify-items-center <?php foreach($cursos as $key => $curso) { if ($key == $index) { echo $curso['aula']; } }?>">
        </div>

    </div>

    <div id="footer"></div>

    <script src="../components/header.js"></script>
    <script src="../components/footer.js"></script>
</body>

</html>