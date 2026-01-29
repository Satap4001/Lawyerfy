<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lawyerfy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/publicaciones.css" rel="stylesheet">
</head>
<?php 
    session_start();
?>
<body>
    <!-- HEADER -->
    <header>
        <div class="nav">
            <div class="nav-left">
                <div class="logo">Lawyerfy</div>
                <input type="text" placeholder="Buscar abogados, servicios...">
            </div>

            <nav class="nav-links">
                <a href="#">Perfil</a>
                <a href="#">Contactos</a>
                <a href="#" class="logout">Cerrar sesión</a>
            </nav>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="container">
        <!-- FEED -->
        <section class="feed">
            <!-- NEW POST -->
            <div class="new-post">
                <form action="../backend/procesarPubli.php" method="POST" enctype="multipart/form-data">
                    <textarea name = "contenido" rows="3" placeholder="Publica un anuncio o servicio legal..." required></textarea>

                    <div class="post-actions">
                        <label for="file-upload" class="upload-icon" title="Adjuntar archivo">🖼️</label>
                        <input type="file" id="file-upload" name="imagen">
                    </div>

                    <button type="submit" name="publicar">Publicar</button>
                </form>
            </div>

            <!-- POST -->
            <article class="post">
                <div class="post-header">
                    <div>
                        <h4>Estudio Jurídico Gómez & Asociados</h4>
                        <span>Derecho Laboral · Buenos Aires</span>
                    </div>
                </div>
                <p>
                    Ofrecemos asesoramiento integral en despidos, indemnizaciones y conflictos laborales.
                    Atención personalizada para empresas y trabajadores.
                </p>
                <div class="tags">
                    <span class="tag">#DerechoLaboral</span>
                    <span class="tag">#Despidos</span>
                    <span class="tag">#AsesoríaLegal</span>
                </div>
            </article>

            <!-- POST -->
            <article class="post">
                <div class="post-header">
                    <div>
                        <h4>Dr. Martín López</h4>
                        <span>Derecho Penal · Madrid</span>
                    </div>
                </div>
                <p>
                    Defensa penal especializada en delitos económicos y causas complejas.
                    Consultas presenciales y online.
                </p>
                <div class="tags">
                    <span class="tag">#DerechoPenal</span>
                    <span class="tag">#DefensaLegal</span>
                </div>
            </article>

        </section>
    </main>

</body>

</html>