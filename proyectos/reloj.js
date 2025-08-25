function mostrarReloj() {
    const ahora = new Date();
    const horas = String(ahora.getHours()).padStart(2, '0');
    const minutos = String(ahora.getMinutes()).padStart(2, '0');
    const segundos = String(ahora.getSeconds()).padStart(2, '0');
    console.clear();
    console.log(`${horas}:${minutos}:${segundos}`);
}

setInterval(mostrarReloj, 1000);