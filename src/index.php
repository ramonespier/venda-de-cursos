<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FocusHub</title>
    <link href="./output.css" rel="stylesheet">
    <link rel="stylesheet" href="scrollbar.css">
</head>

<body class="w-full bg-slate-100 font-josefin">


    <main class="flex flex-col h-full justify-between">
        <div id="header"></div> 
        <img src="./img/slide1.png" class="md:hidden block" alt="">
        <img src="./img/slide1mb.png" class="hidden md:block" alt="">

        <section class="grid md:grid-cols-4 md:grid-rows-3 md:gap-8 md:m-14 md:h-auto
                                    grid-cols-1 grid-rows-12 gap-4 m-10
                                    md:text-base text-sm">

            <div class=" md:h-72 h-64 bg-customColor-logoCor rounded-2xl md:col-start-1 md:row-start-1
                            row-start-1 
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="./img/cursos/design.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Curso de Design Gráfico</h2>
                <p class="row-start-6 row-span-3 text-justify mr-4 ml-4">Criação visual e design de marcas.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="#">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-customColor-logoCor rounded-2xl md:col-start-2 md:row-start-1
                            row-start-2
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="./img/cursos/gastronomia.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Curso de Gastronomia</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Aprenda as melhores técnicas culinárias.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="#">Inscrever-se!</a>
            </div>


            <div class=" md:h-72 h-64 bg-customColor-logoCor rounded-2xl md:col-start-3 md:row-start-1
                            row-start-3
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="./img/cursos/bem-estar-fisico.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Curso de Bem-Estar</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Cuide do seu corpo e da sua mente.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="#">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-customColor-logoCor rounded-2xl md:col-start-4 md:row-start-1
                            row-start-4
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="./img/cursos/criativo.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Curso de Escrita Criativa</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Desenvolva seu estilo e narrativa.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="#">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-customColor-logoCor rounded-2xl md:col-start-1 md:row-start-2
                            row-start-5
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="./img/cursos/ioga.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Curso de Yoga</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Equilíbrio entre corpo e mente.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="#">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-customColor-logoCor rounded-2xl md:col-start-2 md:row-start-2
                            row-start-6
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="./img/cursos/marketing.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Curso de Marketing</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Aprenda estratégias de marketing digital.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="#">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-customColor-logoCor rounded-2xl md:col-start-3 md:row-start-2
                            row-start-7
                           grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="./img/cursos/programacao.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Curso de Programação</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Domine linguagens de programação.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="#">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-customColor-logoCor rounded-2xl md:col-start-4 md:row-start-2
                            row-start-8
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="./img/cursos/tecnologia.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Curso de Tecnologia</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Domine as principais ferramentas de tecnologia.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="#">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-customColor-logoCor rounded-2xl md:col-start-1 md:row-start-3
                            row-start-9
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="./img/cursos/vendas.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Curso de Design Gráfico</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Criação visual e design de marcas.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="#">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-customColor-logoCor rounded-2xl md:col-start-2 md:row-start-3
                            row-start-10
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="./img/cursos/fotografo.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Curso de Fotografia</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Aprenda técnicas e composição.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="#">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-customColor-logoCor rounded-2xl md:col-start-3 md:row-start-3
                            row-start-11
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="./img/cursos/fitness.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Curso de Fitness</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Melhore sua saúde e condicionamento.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="#">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 bg-customColor-logoCor rounded-2xl md:col-start-4 md:row-start-3
                            row-start-12
                            grid grid-rows-12 grid-cols-1 justify-items-center shadow-xl">
                <div class="row-start-1 row-end-4 flex justify-center items-center h-full w-full">
                    <img class="h-16 w-16" src="./img/cursos/vozdiccao.png" alt="#">
                </div>
                <h2 class="row-start-4 flex justify-center text-center font-bold text-xl">Curso de Voz e Dicção</h2>
                <p class="row-start-6 row-span-4 text-justify mr-4 ml-4">Aprimore a comunicação verbal.</p>
                <a class="row-start-11 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="#">Inscrever-se!</a>
            </div>


        </section>


        <div id="footer"></div>
    </main>


    <script src="./components/header.js"></script>
    <script src="./components/footer.js"></script>

</body>

</html>