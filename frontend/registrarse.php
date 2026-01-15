<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lawyerfy - Registro</title>
  <link rel="stylesheet" href="CSS/registrarseStyle.css">
</head>
<body>
  <div class="container">
      

    <h2>Crear cuenta</h2>

    <div class="tipoCuenta">
      <button id="btnCliente" class="active">Cliente</button>
      <button id="btnAbogado">Abogado</button>
    </div>

    <!-- FORMULARIO CLIENTE --> 
    <?php //PARA MOSTRAR MENSAJE SI RECIBE UN ERROR
    session_start();
    if (isset($_SESSION['error'])) {
        echo "<div class='error'>".$_SESSION['error']."</div>";
        unset($_SESSION['error']); // para que el mensaje desaparezca después de mostrarlo
    }
    ?>
    <form id="cliente" class="active" action = "../backend/registrarseBack.php" method="post">
      <label>Nombre *</label>
      <input type="text" name = "nombre" required>

      <label>Apellido *</label>
      <input type="text" name = "apellido" required>

      <label>Email *</label>
      <input type="email" name = "email" required>

      <label>Contraseña *</label>
      <input type="contraseña" name = "contraseña" required>

      <label>Teléfono</label>
      <input type="tel" name = "telefono">

      <label>Género</label>
      <select name = "genero">
        <option value="">Prefiero no decirlo</option>
        <option>Masculino</option>
        <option>Femenino</option>
        <option>Otro</option>
      </select>

      <label>Localidad</label>
      <input type="text" name = "localidad">

      <button class="submit-btn">Registrarse como Cliente</button>
    </form>

    <!-- FORMULARIO ABOGADO -->
    <form id="abogado" action = "../backend/registrarseBack.php" method="post">
      <label>Nombre *</label>
      <input type="text" name = "nombre" required>

      <label>Apellido *</label>
      <input type="text" name = "apellido" required>

      <label>Email *</label>
      <input type="email" name = "email" required>

      <label>Contraseña *</label>
      <input type="contraseña" name = "contraseña" required>

      <label>Nacionalidad *</label>
      <input type="text" name = "nacionalidad" required>

      <label>Especialización *</label>
      <select name = "especializacion" required>
            <option value="">Seleccione una opción</option>
            <option value="Derecho civil">Derecho Civil</option>
            <option value="Derecho penal">Derecho Penal</option>
            <option value="Derecho laboral">Derecho Laboral</option>
            <option value="Derecho mercantil">Derecho Mercantil</option>
      </select>

      <label>Teléfono</label>
      <input type="tel" name = "telefono">

      <label>Género</label>
      <select name = "genero">
        <option value="">Prefiero no decirlo</option>
        <option>Masculino</option>
        <option>Femenino</option>
        <option>Otro</option>
      </select>

      <label>Localidad</label>
      <input type="text" name = "localidad">

      <button class="submit-btn">Registrarse como Abogado</button>
    </form>
  </div>

  <!--SE ENCARGA DE CAMBIAR AL FORMULARIO QUE SE DESEA-->
  <script>
    const btnCliente = document.getElementById('btnCliente');
    const btnAbogado = document.getElementById('btnAbogado');
    const cliente = document.getElementById('cliente');
    const abogado = document.getElementById('abogado');

    //ACTIVA EL FORMULARIO CLIENTE
    btnCliente.addEventListener('click', () => {
      btnCliente.classList.add('active');
      btnAbogado.classList.remove('active');
      cliente.classList.add('active');
      abogado.classList.remove('active');
    });

    //ACTIVA EL FORMULARIO ABOGADO
    btnAbogado.addEventListener('click', () => {
      btnAbogado.classList.add('active');
      btnCliente.classList.remove('active');
      abogado.classList.add('active');
      cliente.classList.remove('active');
    });
  </script>
</body>
</html>
