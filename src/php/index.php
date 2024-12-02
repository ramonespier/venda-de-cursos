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
    <link rel="stylesheet" href="../card.css">
</head>

<body class="w-full bg-gradient-to-b from-indigo-950 via-indigo-900 to-indigo-950 font-josefin">


    <main class="flex flex-col h-full justify-between">
        <div id="header"></div> 

        <section class="grid md:grid-cols-4 md:grid-rows-3 md:gap-8 md:m-14 md:h-auto
                                    grid-cols-1 grid-rows-12 gap-4 m-10
                                    md:text-base text-sm text-white">

            <div class=" md:h-72 h-64 rounded-xl md:col-start-1 md:row-start-1
                            row-start-1 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl p-3 gap-2 card-dev">
                <h2 class="row-start-1 flex justify-center text-center font-bold text-xl bg-customColor-fundoTransparente p-2 self-center">Desenvolvimento Web</h2>
                <a class="row-start-8 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=dev">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 rounded-xl md:col-start-2 md:row-start-1
                            row-start-2 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl p-3 gap-2 card-gastro">

                <p class="row-start-1 row-span-2 self-center p-2 text-justify mr-4 ml-4 bg-customColor-fundoTransparente">Aprenda as melhores técnicas e incentivos culinários.</p>
                <a class="row-start-8 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=gastronomia">Inscrever-se!</a>
            </div>


            <div class=" md:h-72 h-64 rounded-xl md:col-start-3 md:row-start-1
                            row-start-3 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl p-3 gap-2 card-design">
                <h2 class="row-start-1 flex justify-center p-2 self-center text-center font-bold text-xl bg-customColor-fundoLer">Design Gráfico</h2>
                <p class="row-start-2 row-span-2 self-center p-2 text-justify mr-4 ml-4 bg-customColor-fundoLer">Crie conteúdos visuais impactantes!</p>
                <a class="row-start-8 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=designgrafico">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 rounded-xl md:col-start-4 md:row-start-1
                            row-start-4 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl p-3 gap-2 card-marketing">
                <h2 class="row-start-1 flex justify-center text-center font-bold text-xl self-center p-2 bg-customColor-fundoLer">Marketing Digital</h2>
                <p class="row-start-3 row-span-2 text-justify mr-4 ml-4 self-center p-2 bg-customColor-fundoLer">Aprenda as melhores estratégias de Marketing!</p>
                <a class="row-start-8 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=marketing">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 rounded-xl md:col-start-1 md:row-start-2 hover:scale-105 transition
                            row-start-5 
                            grid grid-rows-9 grid-cols-1 justify-items-center shadow-xl p-3 gap-2 card-transformacao">
                <h2 class="row-start-1 row-span-2 flex justify-center text-center font-bold text-xl bg-customColor-fundoTransparente self-center p-2">Transformação digital e o futuro do trabalho</h2>
                <p class="row-start-3 row-span-2 self-center p-2 text-justify mr-4 ml-4 bg-customColor-fundoTransparente">Invista de forma inteligente!</p>
                <a class="row-start-8 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=transformacao">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 rounded-xl md:col-start-2 md:row-start-2
                            row-start-6 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl p-3 gap-2 card-escrita">
                <h2 class="row-start-1 flex justify-center text-center font-bold text-xl bg-customColor-fundoTransparente p-2 self-center">Escrita Criativa</h2>
                <!-- <p class="row-start-2 row-span-2 text-justify mr-4 ml-4"></p> -->
                <a class="row-start-8 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=escrita">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 rounded-xl md:col-start-3 md:row-start-2
                            row-start-7 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl p-3 gap-2 card-python">
                <h2 class="row-start-1 row-span-2 self-center p-2 flex justify-center text-center font-bold text-xl bg-customColor-fundoTransparente">Programação em Python</h2>
                <a class="row-start-8 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=python">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 rounded-xl md:col-start-4 md:row-start-2
                            row-start-8
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl p-3 gap-2 card-vida">
                <h2 class="row-start-1 flex justify-center text-center font-bold text-xl bg-customColor-fundoTransparente p-2 self-center">Vida Saudável</h2>
                <!-- <p class="row-start-2 row-span-2 text-justify mr-4 ml-4"></p> -->
                <a class="row-start-8 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=vida">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 rounded-xl md:col-start-1 md:row-start-3
                            row-start-9 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl p-3 gap-2 card-jornada">
                <h2 class="row-start-1 flex justify-center text-center font-bold text-xl bg-customColor-fundoTransparente p-2 self-center">Jornada da Pintura</h2>
                <p class="row-start-2 row-span-2 text-justify mr-4 ml-4 bg-customColor-fundoTransparente p-2 self-center">Desperte sua criatividade</p>
                <a class="row-start-8 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=jornada">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 rounded-xl md:col-start-2 md:row-start-3
                            row-start-10
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl p-3 gap-2 card-foto">
                <h2 class="row-start-1 self-center p-2 flex justify-center text-center font-bold text-xl bg-customColor-fundoLer">Fotografia</h2>
                <p class="row-start-2 row-span-2 self-center p-2 text-justify mr-4 ml-4 bg-customColor-fundoLer">Aprenda técnicas e composição.</p>
                <a class="row-start-8 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=fotografia">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 rounded-xl md:col-start-3 md:row-start-3
                            row-start-11
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl p-3 gap-2 card-financas">
                <h2 class="row-start-1 flex justify-center text-center font-bold text-xl bg-customColor-fundoTransparente p-2 self-center">Finanças Pessoais</h2>
                <p class="row-start-2 row-span-2 text-justify mr-4 ml-4"></p>
                <a class="row-start-8 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=financas">Inscrever-se!</a>
            </div>

            <div class=" md:h-72 h-64 rounded-xl md:col-start-4 md:row-start-3
                            row-start-12 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl p-3 gap-2 card-musica">
                <h2 class="row-start-1 p-2 self-center flex justify-center text-center font-bold text-xl bg-customColor-fundoLer">Música</h2>
                <p class="row-start-2 p-2 self-center row-span-2 text-justify mr-4 ml-4 bg-customColor-fundoLer">Aprenda a criar e apreciar suas músicas.</p>
                <a class="row-start-8 flex justify-center items-center bg-customColor-home
                p-4 rounded text-white font-bold transition hover:scale-105" href="./cursos.php?index=musica">Inscrever-se!</a>
            </div>


        </section>


        <div id="footer"></div>
    </main>


    <script src="../components/header.js"></script>
    <script src="../components/footer.js"></script>

</body>

</html>