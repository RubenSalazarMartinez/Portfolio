let segundos = 0;
let intervalo = null;

function actualizarContador() {
    const horas = String(Math.floor(segundos / 3600)).padStart(2, '0');
    const minutos = String(Math.floor((segundos % 3600) / 60)).padStart(2, '0');
    const segs = String(segundos % 60).padStart(2, '0');
    document.getElementById('contador').textContent = `${horas}:${minutos}:${segs}`;
}

function iniciarContador() {
    if (!intervalo) {
        intervalo = setInterval(() => {
            segundos++;
            actualizarContador();
        }, 1000);
    }
}

function pararContador() {
    clearInterval(intervalo);
    intervalo = null;
}

function reiniciarContador() {
    pararContador();
    segundos = 0;
    actualizarContador();
}

document.addEventListener('DOMContentLoaded', function() {
    actualizarContador();
    document.getElementById('start-btn').onclick = iniciarContador;
    document.getElementById('stop-btn').onclick = pararContador;
    document.getElementById('reset-btn').onclick = reiniciarContador;
});