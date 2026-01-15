document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('loginForm');
    
    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const usuarioInput = document.getElementById('usuario').value;
        const contrasenaInput = document.getElementById('contrasena').value;
        
        const USUARIO_CORRECTO = 'dawuser';
        const CONTRASENA_CORRECTA = '123456';
        
        if (usuarioInput === USUARIO_CORRECTO && contrasenaInput === CONTRASENA_CORRECTA) {
            alert('Inicio de sesión exitoso. Bienvenido/a.');
            loginForm.reset(); 
        } else {
            alert('Error de inicio de sesión: Usuario o contraseña incorrectos.');
        }
    });

    const backButton = document.querySelector('.back-button');
    backButton.addEventListener('click', (e) => {
        e.preventDefault();
        if (confirm('¿Estás seguro que deseas salir?')) {
            alert('Simulación de salida.');
        }
    });
});