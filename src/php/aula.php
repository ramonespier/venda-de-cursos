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

    <main class="grid md:grid-cols-3 md:grid-rows-4 grid-rows-10 grid-cols-1 h-full gap-3 text-black">

        <div class="md:col-start-1 md:col-span-2 row-start-1 row-span-2 md:row-span-3
        bg-customColor-home md:m-14 m-5">
            <?php
            foreach ($cursos as $key => $curso) {
                if ($key == $index) {
                    echo $curso['video'];
                }
            }
            ?>
        </div>

        <form class="bg-slate-300 md:col-start-3 md:row-start-1 md:row-span-4 flex flex-col ml-5 mr-10 justify-items-center
        overflow-y-scroll" method="POST" action="aprova.php">    
            <div class="border-2 border-b-black
                        grid grid-rows-2 justify-items-center" id="questoes">
                <p class="font-semibold text-lg text-justify p-3 row-start-1 span-2">
                    <?php
                    foreach ($questionario as $key => $questao) {
                        if ($key == $index) {
                            echo $questao['questao1'];
                        }
                    }
                    ?>
                </p>
                <div class="row-start-2 flex self-center gap-3 text-2xl">

                    <div class="bg-lime-400  rounded-xl">
                        <input type="radio" id="verdadeiro" name="vdd">
                        <label for="verdadeiro" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso" name="falso">
                        <label for="falso" class="p-1">Falso</label>
                    </div>
                </div>
            </div>

            <div class="border-2 border-b-black
                        grid grid-rows-2 justify-items-center" id="questoes">
                <p class="font-semibold text-lg text-justify p-3 row-start-1 span-2">
                    <?php
                    foreach ($questionario as $key => $questao) {
                        if ($key == $index) {
                            echo $questao['questao1'];
                        }
                    }
                    ?>
                </p>
                <div class="row-start-2 flex self-center gap-3 text-2xl">

                    <div class="bg-lime-400  rounded-xl">
                        <input type="radio" id="verdadeiro" name="vdd">
                        <label for="verdadeiro" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso" name="falso">
                        <label for="falso" class="p-1">Falso</label>
                    </div>
                </div>
            </div>

            <div class=" border-2 border-b-black
                        grid grid-rows-2 justify-items-center" id="questoes">
                <p class="font-semibold text-lg text-justify p-3 row-start-1 span-2">
                    <?php
                    foreach ($questionario as $key => $questao) {
                        if ($key == $index) {
                            echo $questao['questao1'];
                        }
                    }
                    ?>
                </p>
                <div class="row-start-2 flex self-center gap-3 text-2xl">

                    <div class="bg-lime-400  rounded-xl">
                        <input type="radio" id="verdadeiro" name="vdd">
                        <label for="verdadeiro" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso" name="falso">
                        <label for="falso" class="p-1">Falso</label>
                    </div>
                </div>
            </div>

            <div class="border-2 border-b-black
                        grid grid-rows-2 justify-items-center" id="questoes">
                <p class="font-semibold text-lg text-justify p-3 row-start-1 span-2">
                    <?php
                    foreach ($questionario as $key => $questao) {
                        if ($key == $index) {
                            echo $questao['questao1'];
                        }
                    }
                    ?>
                </p>
                <div class="row-start-2 flex self-center gap-3 text-2xl">

                    <div class="bg-lime-400  rounded-xl">
                        <input type="radio" id="verdadeiro" name="vdd">
                        <label for="verdadeiro" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso" name="falso">
                        <label for="falso" class="p-1">Falso</label>
                    </div>
                </div>
            </div>

            <div class="border-2 border-b-black
                        grid grid-rows-2 justify-items-center" id="questoes">
                <p class="font-semibold text-lg text-justify p-3 row-start-1 span-2">
                    <?php
                    foreach ($questionario as $key => $questao) {
                        if ($key == $index) {
                            echo $questao['questao1'];
                        }
                    }
                    ?>
                </p>
                <div class="row-start-2 flex self-center gap-3 text-2xl">

                    <div class="bg-lime-400  rounded-xl">
                        <input type="radio" id="verdadeiro" name="vdd">
                        <label for="verdadeiro" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso" name="falso">
                        <label for="falso" class="p-1">Falso</label>
                    </div>
                </div>
            </div>

            <div class="border-2 border-b-black
                        grid grid-rows-2 justify-items-center" id="questoes">
                <p class="font-semibold text-lg text-justify p-3 row-start-1 span-2">
                    <?php
                    foreach ($questionario as $key => $questao) {
                        if ($key == $index) {
                            echo $questao['questao1'];
                        }
                    }
                    ?>
                </p>
                <div class="row-start-2 flex self-center gap-3 text-2xl">

                    <div class="bg-lime-400  rounded-xl">
                        <input type="radio" id="verdadeiro" name="vdd">
                        <label for="verdadeiro" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso" name="falso">
                        <label for="falso" class="p-1">Falso</label>
                    </div>
                </div>
            </div>

            <div class="border-2 border-b-black
                        grid grid-rows-2 justify-items-center" id="questoes">
                <p class="font-semibold text-lg text-justify p-3 row-start-1 span-2">
                    <?php
                    foreach ($questionario as $key => $questao) {
                        if ($key == $index) {
                            echo $questao['questao1'];
                        }
                    }
                    ?>
                </p>
                <div class="row-start-2 flex self-center gap-3 text-2xl">

                    <div class="bg-lime-400  rounded-xl">
                        <input type="radio" id="verdadeiro" name="vdd">
                        <label for="verdadeiro" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso" name="falsa">
                        <label for="falso" class="p-1">Falso</label>
                    </div>
                </div>
            </div>

            <div class="border-2 border-b-black
                        grid grid-rows-2 justify-items-center" id="questoes">
                <p class="font-semibold text-lg text-justify p-3 row-start-1 span-2">
                    <?php
                    foreach ($questionario as $key => $questao) {
                        if ($key == $index) {
                            echo $questao['questao1'];
                        }
                    }
                    ?>
                </p>
                <div class="row-start-2 flex self-center gap-3 text-2xl">

                    <div class="bg-lime-400  rounded-xl">
                        <input type="radio" id="verdadeiro" name="questao">
                        <label for="verdadeiro" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso" name="questao">
                        <label for="falso" class="p-1">Falso</label>
                    </div>
                </div>
            </div>

            <div class="border-2 border-b-black
                        grid grid-rows-2 justify-items-center" id="questoes">
                <p class="font-semibold text-lg text-justify p-3 row-start-1 span-2">
                    <?php
                    foreach ($questionario as $key => $questao) {
                        if ($key == $index) {
                            echo $questao['questao1'];
                        }
                    }
                    ?>
                </p>
                <div class="row-start-2 flex self-center gap-3 text-2xl">

                    <div class="bg-lime-400  rounded-xl">
                        <input type="radio" id="verdadeiro" name="questao">
                        <label for="verdadeiro" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso" name="questao">
                        <label for="falso" class="p-1">Falso</label>
                    </div>
                </div>
            </div>

            <div class="border-2 border-b-black
                        grid grid-rows-2 justify-items-center" id="questoes">
                <p class="font-semibold text-lg text-justify p-3 row-start-1 span-2">
                    <?php
                    foreach ($questionario as $key => $questao) {
                        if ($key == $index) {
                            echo $questao['questao1'];
                        }
                    }
                    ?>
                </p>
                <div class="row-start-2 flex self-center gap-3 text-2xl">

                    <div class="bg-lime-400  rounded-xl">
                        <input type="radio" id="verdadeiro" name="questao">
                        <label for="verdadeiro" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso" name="questao">
                        <label for="falso" class="p-1">Falso</label>
                    </div>
                </div>

            </div>
            <input type="submit" value="Enviar" class="bg-green-300 p-4">


        </form>

        <div class="row-start-4 col-start-1 col-span-2 flex flex-col justify-center items-center gap-6 mb-28 ml-10 mr-10 text-white">
            <span class="text-3xl">PROGRESSO:</span>
            <div class="h-5 w-full border-green-400 border-2"></div>
        </div>

    </main>


    <div id="footer"></div>

    <script src="../components/header.js"></script>
    <script src="../components/footer.js"></script>

</body>

</html>