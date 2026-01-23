<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Abogado | Red Legal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1a2a40; /* Azul marino institucional */
            --secondary-color: #c5a059; /* Dorado/Bronce para acentos */
            --bg-color: #f4f7f6;
            --text-dark: #333;
            --text-light: #666;
            --white: #ffffff;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            margin: 0;
            color: var(--text-dark);
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }

        /* --- CABECERA --- */
        .profile-header {
            grid-column: 1 / -1;
            background: var(--primary-color);
            color: var(--white);
            padding: 40px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .profile-img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            border: 5px solid var(--secondary-color);
            object-fit: cover;
        }

        .header-info h1 {
            margin: 0;
            font-size: 2.2rem;
        }

        .header-info .specialty {
            color: var(--secondary-color);
            font-size: 1.2rem;
            font-weight: bold;
            margin: 5px 0;
        }

        .badge-verified {
            background: #27ae60;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            display: inline-block;
            margin-top: 10px;
        }

        /* --- COLUMNA PRINCIPAL --- */
        .main-content section {
            background: var(--white);
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        h2 {
            border-left: 5px solid var(--secondary-color);
            padding-left: 15px;
            font-size: 1.4rem;
            color: var(--primary-color);
        }

        .tags span {
            display: inline-block;
            background: #eee;
            padding: 8px 15px;
            border-radius: 5px;
            margin: 5px;
            font-size: 0.9rem;
        }

        /* --- COLUMNA LATERAL (Sticky) --- */
        .sidebar {
            position: sticky;
            top: 20px;
            height: fit-content;
        }

        .action-card {
            background: var(--white);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            text-align: center;
        }

        .price-tag {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            display: block;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 15px;
            margin-bottom: 12px;
            border-radius: 8px;
            border: none;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
        }

        .btn-primary {
            background: var(--secondary-color);
            color: white;
        }

        .btn-primary:hover { background: #b08d4a; }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }

        .stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-top: 20px;
        }

        .stat-item {
            background: #f9f9f9;
            padding: 10px;
            border-radius: 8px;
        }

        .stat-item i { color: var(--secondary-color); }

        /* Responsive */
        @media (max-width: 768px) {
            .container { grid-template-columns: 1fr; }
            .profile-header { flex-direction: column; text-align: center; }
        }
    </style>
</head>
<body>

<div class="container">
    <header class="profile-header">
        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=250&q=80" alt="Foto de perfil" class="profile-img">
        <div class="header-info">
            <h1>Lic. Alejandro Martínez</h1>
            <p class="specialty">Especialista en Derecho Mercantil y Civil</p>
            <p><i class="fa-solid fa-location-dot"></i> Madrid, España | Colegiado Nº 45.122</p>
            <span class="badge-verified"><i class="fa-solid fa-check-circle"></i> Abogado Verificado</span>
        </div>
    </header>

    <main class="main-content">
        <section>
            <h2>Sobre mí</h2>
            <p>Con más de 12 años de experiencia, me especializo en asesoramiento integral a empresas y defensa en litigios civiles. Mi enfoque se basa en la transparencia y la resolución eficiente de conflictos, priorizando siempre la mediación antes de la vía judicial.</p>
        </section>

        <section>
            <h2>Áreas de Práctica</h2>
            <div class="tags">
                <span>Derecho Societario</span>
                <span>Contratos Mercantiles</span>
                <span>Propiedad Intelectual</span>
                <span>Fusiones y Adquisiciones</span>
            </div>
        </section>

        <section>
            <h2>Formación y Logros</h2>
            <ul style="list-style: none; padding: 0;">
                <li style="margin-bottom: 10px;">
                    <i class="fa-solid fa-graduation-cap" style="color: var(--secondary-color);"></i> 
                    <strong>Máster en Derecho de Empresa</strong> - Universidad Complutense
                </li>
                <li>
                    <i class="fa-solid fa-award" style="color: var(--secondary-color);"></i> 
                    Premio a la Excelencia Jurídica 2023
                </li>
            </ul>
        </section>
    </main>

    <aside class="sidebar">
        <div class="action-card">
            <span class="price-tag">80€ <small style="font-size: 0.8rem; font-weight: normal;">/ Consulta inicial</small></span>
            
            <a href="#" class="btn btn-primary">RE