<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FocusHub</title>
    <link href="../output.css" rel="stylesheet">
    <link rel="stylesheet" href="../scrollbar.css">
    <link rel="shortcut icon" href="../img/FocusHub.png" type="image/x-icon">
</head>

<body class="w-full bg-gradient-to-b from-indigo-950 via-indigo-900 to-indigo-950 font-josefin">


    <main class="flex flex-col h-full justify-between">
        <div id="header"></div> 
        <!-- <img src="../img/slide1.png" class="md:hidden block" alt="">
        <img src="../img/slide1mb.png" class="hidden md:block" alt=""> -->

        <section class="grid md:grid-cols-4 md:grid-rows-3 md:gap-8 md:m-14 md:h-auto
                                    grid-cols-1 grid-rows-12 gap-4 m-10
                                    md:text-base text-sm">

            <div class=" md:h-72 h-64 bg-slate-200 rounded-2xl md:col-start-1 md:row-start-1
                            row-start-1 
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">

                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="../img/cursos/design.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Desenvolvimento Web</h2>
                <p class="row-start-6 row-span-3 text-justify mr-4 ml-4">Aprenda os príncipios da programação</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=dev">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-slate-200 rounded-2xl md:col-start-2 md:row-start-1
                            row-start-2
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="../img/cursos/gastronomia.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Gastronomia</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Aprenda as melhores técnicas culinárias.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=gastronomia">Inscrever-se!</a>
            </div>


            <div class=" md:h-72 h-64 bg-slate-200 rounded-2xl md:col-start-3 md:row-start-1
                            row-start-3
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="../img/cursos/bem-estar-fisico.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl"></h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-slate-200 rounded-2xl md:col-start-4 md:row-start-1
                            row-start-4
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="../img/cursos/criativo.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl"></h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4"></p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-slate-200 rounded-2xl md:col-start-1 md:row-start-2
                            row-start-5
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="../img/cursos/ioga.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Transformação digital e o futuro do trabalho</h2>
                <p class="row-start-7 row-span-3 text-justify mr-4 ml-4">Invista de forma inteligente!</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=transformacao">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-slate-200 rounded-2xl md:col-start-2 md:row-start-2
                            row-start-6
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="../img/cursos/marketing.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl"></h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4"></p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-slate-200 rounded-2xl md:col-start-3 md:row-start-2
                            row-start-7
                           grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="../img/cursos/programacao.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Programação em Python</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Domine Python e suas utilidades.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=python">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-slate-200 rounded-2xl md:col-start-4 md:row-start-2
                            row-start-8
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="../img/cursos/tecnologia.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl"></h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4"></p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-slate-200 rounded-2xl md:col-start-1 md:row-start-3
                            row-start-9
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="../img/cursos/vendas.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl"></h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4"></p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-slate-200 rounded-2xl md:col-start-2 md:row-start-3
                            row-start-10
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="../img/cursos/fotografo.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Fotografia</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Aprenda técnicas e composição.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=fotografia">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-slate-200 rounded-2xl md:col-start-3 md:row-start-3
                            row-start-11
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="../img/cursos/fitness.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl"></h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4"></p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-slate-200 rounded-2xl md:col-start-4 md:row-start-3
                            row-start-12
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="../img/cursos/vozdiccao.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Música</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Aprenda a desenvolver e apreciar suas músicas.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=musica">Inscrever-se!</a>
            </div>


        </section>


        <div id="footer"></div>
    </main>


    <script src="../components/header.js"></script>
    <script src="../components/footer.js"></script>

</body>

</html>