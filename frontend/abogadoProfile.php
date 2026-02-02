<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Profesional | Lawyerfy</title>
    <link href="CSS/aboProfilecss.css" rel="stylesheet">
</head>
<?php 
    session_start();
?>
<body>

<?php 
    include 'header.php'; 
    include_once('../backend/bd.php');

    echo "ID en sesion: " . $_SESSION['id_abogado']; 
    $abogado = getDatosAbo($_SESSION['id_abogado']);

    if (!$abogado) {
        die("Abogado no encontrado");
    }
    //
?>

<div class="container">
    <div class="profile-card">
        <div class="profile-cover"></div>
        <div class="profile-header-content">
            <div class="profile-img-container">
                <img src="Images/gabriel_abo.jpg" alt="Abogado" class="profile-img">
                <div class="verified-icon"><i class="fa-solid fa-check"></i></div>
            </div>
            <div class="header-text">
                <h1>Abog. <?= $abogado['nombre']." ". $abogado['apellido']?></h1>
                <p>Especialista en <?= $abogado['especialidad']?></p>
                <div style="margin-top: 10px;">
                    <span class="stars"><i class="fa-solid fa-star"></i> 4.9</span>
                    <span style="color: #94a3b8; margin-left: 10px;">(128 opiniones profesionales)</span>
                </div>
            </div>
        </div>
    </div>

    <div class="main-column">
        <div class="tabs-container">
            <div class="tabs-header">
                <button class="tab-btn active" onclick="openTab(event, 'bio')">Biografía</button>
                <button class="tab-btn" onclick="openTab(event, 'reviews')">Opiniones</button>
                <button class="tab-btn" onclick="openTab(event, 'exp')">Experiencia</button>
                <button class="tab-btn" onclick="openTab(event, 'publicaciones')">Publicaciones</button>
            </div>

            <div id="bio" class="tab-content active">
                <h3>Sobre el profesional</h3>
                <p>Abogado con más de 15 años de trayectoria en el sector legal. Ex-magistrado adjunto y socio fundador de "De la Vega & Asociados". Mi compromiso es ofrecer una defensa técnica impecable combinada con un trato cercano y humano.</p>
                <h4>Nacionalidad</h4>
                <p><i class="fa-solid fa-globe"></i><?= $abogado['nacionalidad'] ?></p>
            </div>

            <div id="reviews" class="tab-content">
                <h3>Lo que dicen los clientes</h3>
                <div class="review">
                    <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p><strong>"Excelente profesional"</strong> - Logró resolver mi divorcio en tiempo récord. Muy recomendable.</p>
                    <small>Publicado hace 2 semanas</small>
                </div>
                <div class="review">
                    <div class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p><strong>"Transparencia total"</strong> - Desde el primer día me explicó los costes y posibilidades reales.</p>
                    <small>Publicado hace 1 mes</small>
                </div>
            </div>

            <div id="exp" class="tab-content">
                <h3>Trayectoria</h3>
                <ul>
                    <li>Socio Senior en De la Vega Abogados (2015 - Presente)</li>
                    <li>Asesor Jurídico en Banco Central (2010 - 2015)</li>
                    <li>Grado en Derecho - Universidad de Madrid</li>
                </ul>
            </div>

            <div id="publicaciones" class="tab-content">
                <h3>Publicaciones</h3>
                <?php 
                    $publicaciones = getPublicacionesByAbogado($_SESSION['id_abogado']);
                    foreach ($publicaciones as $publi) {
                        echo "
                        <article class='post'>
                            <div class='post-header'>
                                <div>
                                    <h4>" . htmlspecialchars($publi['titulo']) . "</h4>
                                </div>
                            </div>
                            
                            <p>" . nl2br(htmlspecialchars($publi['descripcion'])) . "</p>";

                            // Mostrar imagen si existe
                            if (!empty($publi['codigoImagen'])) {
                                echo "<img src='../uploads/" . htmlspecialchars($publi['codigoImagen']) . "' alt='Imagen publicación'>";
                            }

                        echo "</article>";
                    }
                ?>
            </div>
        </div>
    </div>

    <aside>
        <div class="sidebar-card">
            <div class="availability">
                <div class="pulse"></div> Disponible para consultas
            </div>
            <div style="font-size: 0.9rem; color: #64748b; margin-bottom: 5px;">Precio por consulta desde:</div>
            <div style="font-size: 2rem; font-weight: 800; margin-bottom: 20px;">95€ <span style="font-size: 1rem; color: #94a3b8;">/sesión</span></div>
            
            <a href="#" class="btn-booking">RESERVAR CITA</a>
            
            <div style="margin-top: 25px; border-top: 1px solid #f1f5f9; padding-top: 20px;">
                <p style="font-size: 0.9rem;"><i class="fa-solid fa-shield-halved"></i> <strong>Cita Garantizada:</strong> Reembolso si el abogado no asiste.</p>
                <p style="font-size: 0.9rem;"><i class="fa-solid fa-video"></i> Videollamada o Presencial</p>
                <p style="font-size: 0.9rem;"><i class="fa-solid fa-video"></i><b>Teléfono: </b><?= $abogado['telefono'] != "" ? $abogado['telefono'] : "No disponible"?></p>
            </div>
        </div>
    </aside>
</div>
<?php 
    include 'footer.php'; 
?>

<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
            tabcontent[i].classList.remove("active");
        }
        tablinks = document.getElementsByClassName("tab-btn");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
</body>
</html>