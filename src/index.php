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

<body class="w-screen">

    <main class="h-screen flex flex-col justify-between">

        <div id="header"></div>
        <div id="footer"></div>

    </main>

    <script src="./components/header.js"></script> 
    <script src="./components/footer.js"></script>
</body>

</html>