<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="reloj/reloj.css">
    <link rel="stylesheet" href="contador/contador.css">
    <link rel="stylesheet" href="generador/generador.css">
    <link rel="stylesheet" href="proyectos.css">
    <link rel="stylesheet" href="tresEnRaya/tresEnRaya.css">
    <script src="reloj/reloj.js"></script>
    <script src="contador/contador.js"></script>
    <script src="generador/generador.js"></script>
    <script src="tresEnRaya/tresEnRaya.js"></script>
    <title>Document</title>
</head>
<body onload="mostrarReloj()">
    <?php include '../header.php';?>
    <section class="proyectoZona">
        <h2 class="proyectoTitulo">Reloj</h2>
        <div id="reloj"></div>
    </section>
    <section class="proyectoZona">
        <h2 class="proyectoTitulo">Contador</h2>
        <div id="contadorContenedor">
            <div id="contadorTiempo">00:00:00</div>
            <div id="contadorBotones">
                <button id="iniciarBtn">Iniciar</button>
                <button id="pararBtn">Parar</button>
                <button id="reiniciarBtn">Reiniciar</button>
            </div>
        </div>
    </section>
    <section class="proyectoZona">
        <h2 class="proyectoTitulo">Generador de Contraseñas</h2>
        <div id="generadorContenedor">
            <input type="text" id="contraseñaGenerada" readonly placeholder="Tu contraseña aparecerá aquí">
            <button id="generarBtn">Generar contraseña</button>
        </div>
    </section>
    <section class="proyectoZona">
        <h2 class="proyectoTitulo">Tres en Raya</h2>
        <div id="tresEnRayaContenedor">
            <div id="tresEnRayaTablero"></div>
            <div id="tresEnRayaInfo"></div>
            <button id="tresEnRayaReiniciarBtn">Reiniciar</button>
        </div>
    </section>
</body>
</html>