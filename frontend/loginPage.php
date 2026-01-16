<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="CSS/loginStyle.css">
   
</head>
<body>
    <div class="background-container">
    </div>

    <div class="app-interface">
        <div class="login-center">
            <div class="login-box">
                <h1>INICIO DE SESION</h1>

                <form id="loginForm">
                    <label for="usuario">USUARIO</label>
                    <input type="text" id="usuario" name="usuario" required>

                    <label for="contrasena">CONTRASEÑA</label>
                    <input type="password" id="contrasena" name="contrasena" required>

                    <button type="submit" class="login-button">INICIAR SESIÓN</button>
                </form>

                <div class="links-container">
                    <a href="#" class="forgot-password">¿Has olvidado la contraseña?</a>
                    <a href="#" class="register-link">¿No has iniciado sesión? Registrarse</a>
                </div>
            </div>
        </div>
    </div>

    <script>
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
    </script>
</body>
</html>