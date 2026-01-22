<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lawyerfy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/publicaciones.css" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="nav">
            <div class="nav-left">
                <div class="logo">Lawyerfy</div>
                <input type="text" placeholder="Buscar abogados, servicios...">
            </div>

            <nav class="nav-links">
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
                <form action="" method="POST">
                    <textarea name="contenido" rows="3" placeholder="Publica un anuncio o servicio legal..." required></textarea>

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
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2" alt="">
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
                    <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12" alt="">
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