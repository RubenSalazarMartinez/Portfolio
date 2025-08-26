<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="reloj/reloj.css">
    <link rel="stylesheet" href="contador/contador.css">
    <script src="reloj/reloj.js"></script>
    <script src="contador/contador.js"></script>
    <title>Document</title>
</head>
<body onload="mostrarReloj()">
    <?php include '../header.php';?>
    <div id="reloj"></div>
    <div id="contador-container">
        <div id="contador">00:00:00</div>
        <div id="contador-buttons">
            <button id="start-btn">Iniciar</button>
            <button id="stop-btn">Parar</button>
            <button id="reset-btn">Reiniciar</button>
        </div>
    </div>
</body>
</html>