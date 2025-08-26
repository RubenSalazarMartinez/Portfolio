let segundos = 0;
let intervalo = null;

function actualizarContador() {
    const horas = String(Math.floor(segundos / 3600)).padStart(2, '0');
    const minutos = String(Math.floor((segundos % 3600) / 60)).padStart(2, '0');
    const segs = String(segundos % 60).padStart(2, '0');
    document.getElementById('contadorTiempo').textContent = `${horas}:${minutos}:${segs}`;
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
    document.getElementById('iniciarBtn').onclick = iniciarContador;
    document.getElementById('pararBtn').onclick = pararContador;
    document.getElementById('reiniciarBtn').onclick = reiniciarContador;
});