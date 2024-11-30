<?php
$txt = 'usuario.txt';
$nome = trim(file_get_contents($txt));
$conclusao = date('d.m.y');

require_once 'arrays-cursos.php';
$index = $_GET['index'];


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

    if ($acertos >= 7) {
        echo "Parabéns, você passou na prova!";
    } else {
        echo "Infelizmente, você não passou na prova... Mas você pode tentar novamente!";
    }
}
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
        border-4 bg-white border-[#FFD700] p-5">
            <div class="col-start-2 col-span-3 row-start-1 text-3xl font-extrabold self-center"> Certificado de conclusão de curso</div>
            <div class="row-start-3 col-start-2 col-span-3 text-center text-lg self-center"> Este certificado é concedido a </div>
            <div class="row-start-4 col-start-3 text-center text-2xl font-bold"> <?php echo htmlspecialchars($nome); ?> </div>
            <div class="row-start-5 col-start-1 col-span-5 text-xl"> em reconhecimento à sua participação no curso de <?php foreach ($cursos as $key => $curso) {
                                                                                                                            if ($key == $index) {
                                                                                                                                echo $curso['nome'];
                                                                                                                            }
                                                                                                                        } ?>. </div>
            <div class="row-start-1 text-center font-bold text-lg">
                <img src="../img/FocusHub.png" width="100px" alt="Assinatura">
                <p>FocusHub</p>
            </div>
            <p class="row-start-6 col-start-5 self-end text-lg">Data: <?php echo $conclusao ?></p>

        </div>
        <button onclick="gerarPDF()" class="row-start-6 col-start-3 col-span-2 text-3xl bg-[#FFD700] m-10 rounded-xl hover:scale-110 transition font-extrabold">Baixar Certificado!</button>
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