<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil | Cliente</title>
    <link rel="stylesheet" href="CSS/publicacionesCliente.css">
    <link rel="stylesheet" href="CSS/clienteProfileStyle.css">
    <link rel="stylesheet" href="CSS/cliente-estilos.css"> 
</head>
<body>
    
<?php 
    include 'header.php'; 
?>
   

    <div class="container">
        <div class="profile-card">
            <div class="profile-cover"></div>
            <div class="profile-header-content">
                <div class="profile-img-container">
                    <img src="" alt="Foto de Perfil" class="profile-img">
                </div>
                <div class="header-text">
                    <h1>Juan Pérez</h1>
                    <p>Cliente Miembro desde Enero 2024</p>
                    <div class="tags">
                        <span class="tag">Usuario Verificado</span>
                    </div>
                </div>
            </div>
        </div>

        <main class="feed">
            <div class="tabs-container">
                <div class="tabs-header">
                    <button class="tab-btn active">Mis Publicaciones</button>
                    <button class="tab-btn">Información</button>
                    <button class="tab-btn">Fotos</button>
                </div>
            </div>

            <div class="post">
                <div class="post-header">
                    <img src="" alt="Avatar">
                    <div>
                        <h4>Juan Pérez</h4>
                        <span>Publicado hace 2 horas</span>
                    </div>
                </div>
                <p>Buscando asesoría legal para un nuevo emprendimiento tecnológico. ¡Cualquier recomendación es bienvenida!</p>
                <div class="tags">
                    <span class="tag">#Emprendimiento</span>
                    <span class="tag">#Ayuda</span>
                </div>
            </div>
        </main>

        <aside class="sidebar-cliente">
            <div class="sidebar-card">
                <h3>Información Personal</h3>
                <div class="info-item">
                    <strong>Ubicación:</strong> Madrid, España
                </div>
                <div class="info-item">
                    <strong>Intereses:</strong> Derecho Civil, Tecnología
                </div>
                <hr>
                <a href="#" class="btn-booking" style="background-color: var(--accent); color: white;">Editar Perfil</a>
            </div>
        </aside>
    </div>
        <?php 
        include 'footer.php'; 
    ?>

</body>
</html>