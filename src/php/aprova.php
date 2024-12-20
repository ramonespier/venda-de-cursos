<?php
session_start();

$nomeReal = isset($_SESSION['nome_real']) ? $_SESSION['nome_real'] : '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $respostas_certas = [
        'q1' => 'verdadeiro',
        'q2' => 'falso',
        'q3' => 'verdadeiro',
        'q4' => "falso",
        'q5' => 'verdadeiro',
        'q6' => 'falso',
        'q7' => 'verdadeiro',
        'q8' => "falso",
        'q9' => 'verdadeiro',
        'q10' => "falso",
    ];

    $acertos = 0;

    foreach ($respostas_certas as $questao => $resposta) {
        if (isset($_POST[$questao]) && $_POST[$questao] === $resposta) {
            $acertos++;
        }
    }
}

// $txt = 'cadastro.txt';
// $nome = trim(file_get_contents($txt));
$conclusao = date('d.m.y');

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
</head>

<body class="w-full h-screen bg-gradient-to-b from-indigo-950 via-indigo-900 to-indigo-950 font-josefin flex flex-col">

    <div id="header"></div>

    <main class="grid grid-rows-6 grid-cols-6 h-screen">
        <div class="certificado row-start-2 row-span-4 col-start-2 col-span-4
        grid grid-rows-6 grid-cols-5 justify-items-center
        border-4 bg-slate-200 border-[#FFD700] p-5">

            <p class="col-start-2 col-span-3 row-start-2 row-span-4 text-2xl self-center <?php if($acertos < 7) { echo 'block'; } else { echo 'hidden'; } ?>">Infelizmente, você não conseguiu acertar 70% das perguntas... Mas não fique triste! Você sempre pode reassistir e tentar novamente responder as questões!</p>

            <div class="col-start-2 col-span-3 row-start-1 text-5xl font-extrabold self-end text-center <?php if($acertos < 7) { echo 'hidden'; } else { echo 'block'; } ?>"> CERTIFICADO</div>
            <div class="row-start-2 col-start-1 col-span-5 text-xl font-bold <?php if($acertos < 7) { echo 'hidden'; } else { echo 'block'; } ?>"><?php foreach ($cursos as $key => $curso) {
                if ($key == $index) {
                    echo $curso['nome'];
                }
            } ?>. </div>
            <div class="row-start-2 col-start-2 col-span-3 text-center text-2xl self-end <?php if($acertos < 7) { echo 'hidden'; } else { echo 'block'; } ?>"> Certificamos que o aluno</div>
            <div class="col-start-2 col-span-3 row-start-3 self-end text-5xl font-extrabold underline text-center <?php if($acertos < 7) { echo 'hidden'; } else { echo 'block'; } ?>"> <?php echo htmlspecialchars($_SESSION['nome_real']); ?></div>
            <div class="row-start-4 col-start-2 col-span-3 text-xl text-center self-end <?php if($acertos < 7) { echo 'hidden'; } else { echo 'block'; } ?>"> Concluiu do curso de <?php foreach ($cursos as $key => $curso) {
                                                                                                                                                                                            if ($key == $index) {
                                                                                                                                                                                                echo $curso['nome'];
                                                                                                                                                                                            }
                                                                                                                                                                                        } ?>. Ministrado por FocusHub, com carga horária de 1h. No dia <?php echo $conclusao ?> </div>
            <div class="row-start-1 text-center font-bold text-lg <?php if($acertos < 7) { echo 'hidden'; } else { echo 'block'; } ?>">
                <img src="../img/FocusHub.png" width="150px" alt="Assinatura">
                <p>FocusHub</p>
            </div>

            <div class="row-start-6 self-center col-start-2 col-span-3 w-full border border-black"></div>                                                                                                                                                                            
            <div class="row-start-6 self-end col-start-3 text-xl text-center w-full">FocusHub</div>                                                                                                                                                                            

            <p class="row-start-6 col-start-5 self-end text-2xl <?php if($acertos < 7) { echo 'hidden'; } else { echo 'block'; } ?>"><?php echo $conclusao ?></p>

        </div>
        <button onclick="gerarPDF()" class="row-start-6 col-start-3 col-span-2 text-3xl bg-[#FFD700] m-6 rounded-xl hover:scale-110 transition font-extrabold <?php if($acertos < 7) { echo 'hidden'; } else { echo 'block'; } ?>">Baixar Certificado!</button>
        <a href="./index.php" class="row-start-6 col-start-3 col-span-2 text-3xl bg-red-500 m-6 rounded-xl hover:scale-110 transition font-extrabold flex justify-center p-2 <?php if($acertos < 7) { echo 'block'; } else { echo 'hidden'; } ?>">Voltar para a Home</a>
    </main>


    <div id="footer"></div>


    <script src="../components/header.js"></script>
    <script src="../components/footer.js"></script>

    <!-- BIBLIOTECA PARA TRANSFORMAR HTML EM PDF (jsPDF e html2canvas) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

    <script>
        function gerarPDF() {
            const {
                jsPDF
            } = window.jspdf; // a funcao acessa a biblioteca jsPDF a partir do objeto window.jspdf
            const doc = new jsPDF({ // um novo objeto jsPDF é criado. este objeto eh utilizado para gerar o PDF
                orientation: 'landscape', // define a orientação do documento. dode ser 'portrait' (retrato) ou 'landscape' (paisagem)
                unit: 'px', // define a unidade de medida para o documento. no meu caso 'mm'
                format: [1300, 840] // tamanho do documento
            });

            // adicionar o conteúdo html ao PDF
            doc.html(document.querySelector('.certificado'), {
                callback: function(doc) { // funcao de 'callback' que eh chamada quando a conversão do HTML para PDF eh concluida.
                    doc.save('<?php foreach ($cursos as $key => $curso) { if ($key == $index) { echo $curso['nome']; } } ?>.pdf'); // qnd baixar o PDF ele terá esse nome
                },
                x: 10,
                y: 10
            });
        }
    </script>


</body>

</html>