<?php
$txt = 'usuario.txt';
$nome = trim(file_get_contents($txt));
$conclusao = date('d.m.y');


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

    <style>
        body {
            font-family: 'Arial', sans-serif;

            
            background-color: #f3f3f3;
            margin: 0;
        }

        .certificado {
            width: 800px;
            height: 600px;
            border: 10px solid #000;
            padding: 30px;
            background-color: #fff;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .topo {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            width: 100px;
            height: auto;
        }

        .titulo {
            font-size: 2.5em;
            font-weight: bold;
            margin: 0;
            text-transform: uppercase;
        }

        .texto {
            font-size: 1.2em;
            margin: 20px 0;
        }

        .nome {
            font-size: 1.5em;
            font-weight: bold;
            margin: 30px 0;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .rodape {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            bottom: 30px;
            left: 30px;
            right: 30px;
        }

        .assinatura img {
            width: 150px;
            height: auto;
        }

        .assinatura p {
            margin: 5px 0;
        }

        .data {
            text-align: right;
            font-size: 1em;
        }
    </style>
</head>

<body class="w-full bg-gradient-to-b from-indigo-950 via-indigo-900 to-indigo-950 font-josefin flex flex-col">

    <div id="header"></div>

    <div class="certificado">
        <div class="topo">
            <div class="titulo"> Certificado de Participação </div>
        </div>
        <div class="texto"> Este certificado é concedido a </div>
        <div class="nome"> <?php echo htmlspecialchars($nome); ?> </div>
        <div class="texto"> em reconhecimento à sua participação. </div>
        <div class="rodape">
            <div class="assinatura"> <img src="../img/FocusHub.png" alt="Assinatura">
                <p>FocusHub</p>
            </div>
            <div class="data">
                <p>Data: <?php echo $conclusao ?></p>
            </div>
        </div>
    </div>


    <div id="footer"></div>


    <script src="../components/header.js"></script>
    <script src="../components/footer.js"></script>
</body>

</html>