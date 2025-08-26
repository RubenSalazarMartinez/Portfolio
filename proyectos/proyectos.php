<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Portfolio/style.css">
    <link rel="stylesheet" href="/Portfolio/proyectos/proyectos.css">
    <link rel="stylesheet" href="/Portfolio/proyectos/reloj/reloj.css">
    <link rel="stylesheet" href="/Portfolio/proyectos/contador/contador.css">
    <link rel="stylesheet" href="/Portfolio/proyectos/generador/generador.css">
    <link rel="stylesheet" href="/Portfolio/proyectos/tresEnRaya/tresEnRaya.css">
    <script src="/Portfolio/proyectos/reloj/reloj.js"></script>
    <script src="/Portfolio/proyectos/contador/contador.js"></script>
    <script src="/Portfolio/proyectos/generador/generador.js"></script>
    <script src="/Portfolio/proyectos/tresEnRaya/tresEnRaya.js"></script>
    <title>Proyectos</title>
</head>
<body>
    <?php include("../header.php"); ?>

    <div class="proyectosFila">
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
    </div>

    <div class="proyectosFila">
        <section class="proyectoZona">
            <h2 class="proyectoTitulo">Tres en Raya</h2>
            <div id="tresEnRayaContenedor">
                <div id="tresEnRayaTablero"></div>
                <div id="tresEnRayaInfo"></div>
                <button id="tresEnRayaReiniciarBtn">Reiniciar</button>
            </div>
        </section>
    </div>
</body>
</html>