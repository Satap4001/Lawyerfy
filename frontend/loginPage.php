<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyerfy | Inicio de Sesión</title>
    <link rel="stylesheet" href="CSS/loginStyle.css">
   
</head>
<body>
    <div class="background-container">
    </div>

    <div class="app-interface">
        <div class="login-center">
            <div class="login-box">
                <h1>INICIO DE SESION</h1>

                <!--Mensaje de error si el Log in es falso-->
                <?php if (isset($_GET['error'])): ?>
                    <p style="color:red; text-align:center; margin-bottom:10px;">
                        Usuario o contraseña incorrectos
                    </p>
                <?php endif; ?>
                <form action = "../backend/comprobarLogin.php" method = "post" id="loginForm">
                    <label for="usuario">USUARIO</label>
                    <input type="text" id="usuario" name="usuario" required>

                    <label for="contrasena">CONTRASEÑA</label>
                    <input type="password" id="contrasena" name="contrasena" required>

                    <button type="submit" class="login-button">INICIAR SESIÓN</button>
                </form>

                <div class="links-container">
                    <a href="#" class="forgot-password">¿Has olvidado la contraseña?</a>
                    <a href="registrarse.php" class="register-link">¿No has iniciado sesión? Registrarse</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>