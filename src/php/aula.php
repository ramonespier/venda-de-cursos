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

    <main class="md:grid md:grid-cols-3 md:grid-rows-4 flex flex-col h-full gap-3 text-black">

        <div class="md:col-start-1 md:col-span-2 md:row-span-3 h-full
        bg-customColor-home md:m-14">
            <?php
            foreach ($cursos as $key => $curso) {
                if ($key == $index) {
                    echo $curso['video'];
                }
            }
            ?>
        </div>

        <div class="row-start-4 col-start-1 col-span-2 flex flex-col justify-center items-center gap-6 m-2 md:ml-10 md:mr-10 text-white">
            <span class="text-3xl">PROGRESSO:</span>
            <div class="h-5 w-full border-green-400 border-2"></div>
        </div>

        <form class="bg-slate-300 md:col-start-3 md:row-start-1 md:row-span-4 flex flex-col md:mr-6 justify-items-center
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

                    <div class="bg-lime-400 rounded-xl">
                        <input type="radio" id="verdadeiro1" value="verdadeiro" name="q1">
                        <label for="verdadeiro1" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso1" value="falso" name="q1">
                        <label for="falso1" class="p-1">Falso</label>
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
                        <input type="radio" id="verdadeiro2" value="verdadeiro" name="q2">
                        <label for="verdadeiro2" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso2" value="falso" name="q2">
                        <label for="falso2" class="p-1">Falso</label>
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
                        <input type="radio" id="verdadeiro3" value="verdadeiro" name="q3">
                        <label for="verdadeiro3" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso3" value="falso" name="q3">
                        <label for="falso3" class="p-1">Falso</label>
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
                        <input type="radio" id="verdadeiro4" value="verdadeiro" name="q4">
                        <label for="verdadeiro4" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso4" value="falso" name="q4">
                        <label for="falso4" class="p-1">Falso</label>
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
                        <input type="radio" id="verdadeiro5" value="verdadeiro" name="q5">
                        <label for="verdadeiro5" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso5" value="falso" name="q5">
                        <label for="falso5" class="p-1">Falso</label>
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
                        <input type="radio" id="verdadeiro6" value="verdadeiro" name="q6">
                        <label for="verdadeiro6" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso6" value="falso" name="q6">
                        <label for="falso6" class="p-1">Falso</label>
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
                        <input type="radio" id="verdadeiro7" value="verdadeiro" name="q7">
                        <label for="verdadeiro7" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso7" value="falso" name="q7">
                        <label for="falso7" class="p-1">Falso</label>
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
                        <input type="radio" id="verdadeiro8" value="verdadeiro" name="q8">
                        <label for="verdadeiro8" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso8" value="falso" name="q8">
                        <label for="falso8" class="p-1">Falso</label>
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
                        <input type="radio" id="verdadeiro9" value="verdadeiro" name="q9">
                        <label for="verdadeiro9" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso9" value="falso" name="q9">
                        <label for="falso9" class="p-1">Falso</label>
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
                        <input type="radio" id="verdadeiro10" value="verdadeiro" name="q10">
                        <label for="verdadeiro10" class="p-1">Verdadeiro</label>
                    </div>
                    <div class="bg-red-400 rounded-xl">
                        <input type="radio" id="falso10" value="falso" name="q10">
                        <label for="falso10" class="p-1">Falso</label>
                    </div>
                </div>
            </div>

            </div>
            <input type="submit" value="Enviar" class="bg-green-300 p-4">

            
        </form>
        


    </main>


    <div id="footer"></div>

    <script src="../components/header.js"></script>
    <script src="../components/footer.js"></script>

</body>

</html>