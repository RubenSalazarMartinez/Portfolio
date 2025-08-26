let tablero = ["", "", "", "", "", "", "", "", ""];
let turno = "X";
let juegoActivo = true;

function mostrarTablero() {
    const tableroDiv = document.getElementById("tresEnRayaTablero");
    tableroDiv.innerHTML = "";
    tablero.forEach((valor, i) => {
        const celda = document.createElement("div");
        celda.className = "tresEnRayaCelda";
        celda.textContent = valor;
        celda.onclick = () => manejarClick(i);
        tableroDiv.appendChild(celda);
    });
}

function manejarClick(indice) {
    if (!juegoActivo || tablero[indice] !== "") return;
    tablero[indice] = turno;
    mostrarTablero();
    if (comprobarGanador()) {
        document.getElementById("tresEnRayaInfo").textContent = `¡Ganó ${turno}!`;
        juegoActivo = false;
    } else if (tablero.every(c => c !== "")) {
        document.getElementById("tresEnRayaInfo").textContent = "¡Empate!";
        juegoActivo = false;
    } else {
        turno = turno === "X" ? "O" : "X";
        document.getElementById("tresEnRayaInfo").textContent = `Turno de ${turno}`;
    }
}

function comprobarGanador() {
    const combinaciones = [
        [0,1,2],[3,4,5],[6,7,8], // filas
        [0,3,6],[1,4,7],[2,5,8], // columnas
        [0,4,8],[2,4,6]          // diagonales
    ];
    return combinaciones.some(comb =>
        comb.every(i => tablero[i] === turno)
    );
}

function reiniciarJuego() {
    tablero = ["", "", "", "", "", "", "", "", ""];
    turno = "X";
    juegoActivo = true;
    document.getElementById("tresEnRayaInfo").textContent = `Turno de ${turno}`;
    mostrarTablero();
}

document.addEventListener("DOMContentLoaded", () => {
    mostrarTablero();
    document.getElementById("tresEnRayaInfo").textContent = `Turno de ${turno}`;
    document.getElementById("tresEnRayaReiniciarBtn").onclick = reiniciarJuego;
});