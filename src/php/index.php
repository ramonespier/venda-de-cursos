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

            <a href="./cursos.php?index=dev" class=" md:h-72 h-64 rounded-xl md:col-start-1 md:row-start-1
                            row-start-1 
                            grid grid-rows-9 grid-cols-1 hover:scale-105 transition z-10 shadow-xl gap-2 card-dev">
                <h2 class="row-start-1 row-span-2 h-full flex justify-center items-center text-center font-bold text-xl bg-customColor-fundoTransparente w-full rounded-t-xl">Desenvolvimento Web</h2>
            </a>

            <a href="./cursos.php?index=gastronomia" class=" md:h-72 h-64 rounded-xl md:col-start-2 md:row-start-1
                            row-start-2 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl gap-2 card-gastro">
                <p class="row-start-1 row-span-2 h-full flex justify-center items-center text-center font-bold text-xl bg-customColor-fundoTransparente w-full rounded-t-xl">Gastronomia</p>
            </a>


            <a href="./cursos.php?index=designgrafico" class=" md:h-72 h-64 rounded-xl md:col-start-3 md:row-start-1
                            row-start-3 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl gap-2 card-design">
                <h2 class="row-start-1 row-span-2 h-full flex justify-center items-center text-center font-bold text-xl bg-customColor-fundoTransparente w-full rounded-t-xl">Design Gráfico</h2>
            </a>

            <a href="./cursos.php?index=marketing" class=" md:h-72 h-64 rounded-xl md:col-start-4 md:row-start-1
                            row-start-4 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl gap-2 card-marketing">
                <h2 class="row-start-1 row-span-2 h-full flex justify-center items-center text-center font-bold text-xl bg-customColor-fundoTransparente w-full rounded-t-xl">Marketing Digital</h2>
            </a>

            <a href="./cursos.php?index=transformacao" class=" md:h-72 h-64 rounded-xl md:col-start-1 md:row-start-2 hover:scale-105 transition
                            row-start-5 
                            grid grid-rows-9 grid-cols-1 justify-items-center shadow-xl  gap-2 card-transformacao">
                <h2 class="row-start-1 row-span-2 h-full flex justify-center items-center text-center font-bold text-xl bg-customColor-fundoTransparente w-full rounded-t-xl">Transformação digital e o futuro do trabalho</h2>
            </a>

            <a href="./cursos.php?index=escrita" class=" md:h-72 h-64 rounded-xl md:col-start-2 md:row-start-2
                            row-start-6 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl gap-2 card-escrita">
                <h2 class="row-start-1 row-span-2 h-full flex justify-center items-center text-center font-bold text-xl bg-customColor-fundoTransparente w-full rounded-t-xl">Escrita Criativa</h2>
            </a>

            <a href="./cursos.php?index=python" class=" md:h-72 h-64 rounded-xl md:col-start-3 md:row-start-2
                            row-start-7 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl gap-2 card-python">
                <h2 class="row-start-1 row-span-2 h-full flex justify-center items-center text-center font-bold text-xl bg-customColor-fundoTransparente w-full rounded-t-xl">Programação em Python</h2>
            </a>

            <a href="./cursos.php?index=vida" class=" md:h-72 h-64 rounded-xl md:col-start-4 md:row-start-2
                            row-start-8
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl gap-2 card-vida">
                <h2 class="row-start-1 row-span-2 h-full flex justify-center items-center text-center font-bold text-xl bg-customColor-fundoTransparente w-full rounded-t-xl">Vida Saudável</h2>
            </a>

            <a href="./cursos.php?index=jornada" class=" md:h-72 h-64 rounded-xl md:col-start-1 md:row-start-3
                            row-start-9 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl gap-2 card-jornada">
                <h2 class="row-start-1 row-span-2 h-full flex justify-center items-center text-center font-bold text-xl bg-customColor-fundoTransparente w-full rounded-t-xl">Jornada da Pintura</h2>
            </a>

            <a href="./cursos.php?index=fotografia" class=" md:h-72 h-64 rounded-xl md:col-start-2 md:row-start-3
                            row-start-10
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl gap-2 card-foto">
                <h2 class="row-start-1 row-span-2 h-full flex justify-center items-center text-center font-bold text-xl bg-customColor-fundoTransparente w-full rounded-t-xl">Fotografia</h2>
            </a>

            <a href="./cursos.php?index=financas" class=" md:h-72 h-64 rounded-xl md:col-start-3 md:row-start-3
                            row-start-11
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl gap-2 card-financas">
                <h2 class="row-start-1 row-span-2 h-full flex justify-center items-center text-center font-bold text-xl bg-customColor-fundoTransparente w-full rounded-t-xl">Finanças Pessoais</h2>
            </a>

            <a  href="./cursos.php?index=musica" class=" md:h-72 h-64 rounded-xl md:col-start-4 md:row-start-3
                            row-start-12 
                            grid grid-rows-9 grid-cols-1 justify-items-center hover:scale-105 transition z-10 shadow-xl gap-2 card-musica">
                <h2 class="row-start-1 row-span-2 h-full flex justify-center items-center text-center font-bold text-xl bg-customColor-fundoTransparente w-full rounded-t-xl">Música</h2>
            </a>


        </section>


        <div id="footer"></div>
    </main>


    <script src="../components/header.js"></script>
    <script src="../components/footer.js"></script>

</body>

</html>