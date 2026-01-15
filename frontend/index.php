<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario PRO</title>
    <style>
        /* Estilos CSS Integrados */
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --background-color: #f4f7f6;
            --card-background: #ffffff;
            --text-color: #333;
            --border-radius: 8px;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--background-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: var(--text-color);
        }

        .register-container {
            background-color: var(--card-background);
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: var(--primary-color);
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 0.95em;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Asegura que el padding no cambie el ancho total */
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input:focus, select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25);
            outline: none;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }

        .checkbox-group input[type="checkbox"] {
            margin-right: 10px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.1s;
        }

        button:hover {
            background-color: #0056b3;
        }

        button:active {
            transform: translateY(1px);
        }

        /* Mensaje de éxito/error */
        #message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            display: none; /* Oculto por defecto */
        }
        .success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>🚀 Registro de Cuenta PRO</h2>
        <form id="registrationForm">
            <div class="form-group">
                <label for="fullName">Nombre Completo *</label>
                <input type="text" id="fullName" name="fullName" placeholder="Tu nombre y apellido" required>
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico *</label>
                <input type="email" id="email" name="email" placeholder="ejemplo@dominio.com" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña *</label>
                <input type="password" id="password" name="password" placeholder="Mínimo 8 caracteres" required minlength="8">
            </div>

            <div class="form-group">
                <label for="role">Tu Rol/Sector</label>
                <select id="role" name="role">
                    <option value="">Selecciona una opción...</option>
                    <option value="dev">Desarrollador/a</option>
                    <option value="designer">Diseñador/a</option>
                    <option value="manager">Gerente/Líder</option>
                    <option value="student">Estudiante</option>
                    <option value="other">Otro</option>
                </select>
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">Acepto los <a href="#" style="color: var(--primary-color); text-decoration: none;">Términos y Condiciones</a> *</label>
            </div>

            <button type="submit">Crear Cuenta</button>

            <div id="message"></div>
        </form>
    </div>

    <script>
        // Pequeño script para simular el envío
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Detiene el envío del formulario (para simular)

            const messageDiv = document.getElementById('message');
            
            // Si el formulario es válido (validación nativa de HTML5)
            if (this.checkValidity()) {
                // Simulación de envío exitoso
                messageDiv.className = 'success';
                messageDiv.innerHTML = '✅ ¡Registro exitoso! Te hemos enviado un correo de confirmación.';
                messageDiv.style.display = 'block';
                // Opcional: limpiar los campos del formulario
                // this.reset();
            } else {
                // Esto generalmente lo maneja el navegador con los mensajes de error de HTML5 'required'
                messageDiv.style.display = 'none';
            }
        });
    </script>
</body>
</html>