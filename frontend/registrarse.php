<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lawyerfy - Registro</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    body {
      background: #f4f6f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      width: 100%;
      max-width: 450px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .tipoCuenta {
      display: flex;
      gap: 10px;
      margin-bottom: 20px;
    }

    .tipoCuenta button {
      flex: 1;
      padding: 10px;
      border: none;
      cursor: pointer;
      border-radius: 6px;
      background: #e0e0e0;
      font-weight: bold;
    }

    .tipoCuenta button.active {
      background: #007bff;
      color: white;
    }

    form {
      display: none;
    }

    form.active {
      display: block;
    }

    label {
      display: block;
      margin-top: 12px;
      font-weight: bold;
    }

    input, select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .submit-btn {
      margin-top: 20px;
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 6px;
      background: #28a745;
      color: white;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Crear cuenta</h2>

    <div class="tipoCuenta">
      <button id="btnCliente" class="active">Cliente</button>
      <button id="btnAbogado">Abogado</button>
    </div>

    <!-- FORMULARIO CLIENTE -->
    <form id="cliente" class="active" action = "registrarseBack.php" method="post">
      <label>Nombre *</label>
      <input type="text" required>

      <label>Apellido *</label>
      <input type="text" required>

      <label>Email *</label>
      <input type="email" required>

      <label>Teléfono</label>
      <input type="tel">

      <label>Género</label>
      <select>
        <option value="">Prefiero no decirlo</option>
        <option>Masculino</option>
        <option>Femenino</option>
        <option>Otro</option>
      </select>

      <label>Localidad</label>
      <input type="text">

      <button class="submit-btn">Registrarse como Cliente</button>
    </form>

    <!-- FORMULARIO ABOGADO -->
    <form id="abogado" action = "registrarseBack.php" method="post">
      <label>Nombre *</label>
      <input type="text" required>

      <label>Apellido *</label>
      <input type="text" required>

      <label>Email *</label>
      <input type="email" required>

      <label>Nacionalidad *</label>
      <input type="text" required>

      <label>Especialización *</label>
      <select required>
            <option value="">Seleccione una opción</option>
            <option value="civil">Derecho Civil</option>
            <option value="penal">Derecho Penal</option>
            <option value="laboral">Derecho Laboral</option>
            <option value="mercantil">Derecho Mercantil</option>
      </select>

      <label>Teléfono</label>
      <input type="tel">

      <label>Género</label>
      <select>
        <option value="">Prefiero no decirlo</option>
        <option>Masculino</option>
        <option>Femenino</option>
        <option>Otro</option>
      </select>

      <label>Localidad</label>
      <input type="text">

      <button class="submit-btn">Registrarse como Abogado</button>
    </form>
  </div>

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
