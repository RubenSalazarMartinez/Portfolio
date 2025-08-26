function generarContraseña(longitud = 12) {
    const caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+-=';
    let contraseña = '';
    for (let i = 0; i < longitud; i++) {
        const indice = Math.floor(Math.random() * caracteres.length);
        contraseña += caracteres[indice];
    }
    return contraseña;
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('generarBtn').onclick = function() {
        document.getElementById('contraseñaGenerada').value = generarContraseña();
    };
});