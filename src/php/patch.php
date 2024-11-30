<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FocusHub</title>
    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="../scrollbar.css">
    <style>
        ::-webkit-scrollbar-track {
            border-top-right-radius: 16px ;
            border-bottom-right-radius:16px ;
        }
        ::-webkit-scrollbar-thumb {
            border-top-right-radius: 16px ;
            border-bottom-right-radius:16px ;
        }
    </style>
</head>

<body class="w-full h-screen bg-slate-100 font-josefin flex flex-col justify-between">

    <div id="header"></div>

    <div class="grid grid-cols-2 grid-rows-1 h-[600px]">
        <div class="col-start-1 border-2 border-slate-400 m-8 rounded-xl overflow-y-scroll">
            <h2 class="font-bold text-center p-4 text-3xl bg-slate-200 border-b-2 border-black">Notas da versão 0.01 (BETA)</h2>
            <p class="p-2 text-lg">Página Home não tem temas determinados.</p>
            <p class="p-2 text-lg">Cabeçalho e rodapé não tem um formato fixo.</p>
            <p class="p-2 text-lg">Cadastro e login são apenas visuais.</p>
            <p class="p-2 text-lg">Página de avaliação não tem opções de avaliação.</p>
            <p class="p-2 text-lg">Pagina de suporte não leva a lugar algum.</p>
            <p class="p-2 text-lg">Não existe notas de atualização.</p>
            <p class="p-2 text-lg">Contéudo do curso está sendo escritos e videos estão sendo gerados.</p>
        </div>

        <div class="col-start-2 border-2 border-slate-400 m-8 rounded-xl overflow-y-scroll">
            
        </div>

    </div>

    <div id="footer"></div>
    <script src="../components/header.js"></script>
    <script src="../components/footer.js"></script>
</body>

</html>