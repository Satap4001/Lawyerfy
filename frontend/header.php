<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        :root {
            --primary: #1a2b48; 
            --accent: #c5a059;  
            --text: #333;
            --bg: #ffffff;
        }

        body { margin: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }

        .lawyerfy-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 5%;
            background: var(--bg);
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            letter-spacing: -1px;
        }

        .search-container {
            flex-grow: 0.4;
            position: relative;
        }
        .search-container input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            border: 1px solid #e0e0e0;
            border-radius: 25px;
            background: #f8f9fa;
            transition: all 0.3s;
        }
        .search-container input:focus {
            outline: none;
            border-color: var(--accent);
            background: #fff;
            box-shadow: 0 0 8px rgba(197, 160, 89, 0.2);
        }

        .user-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .profile-link {
            text-decoration: none;
            color: var(--text);
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .profile-link:hover { color: var(--accent); }

        .btn-logout {
            background: var(--primary);
            color: white;
            border: none;
            padding: 8px 18px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: opacity 0.3s;
        }

        .btn-logout:hover { opacity: 0.9; }

    </style>
</head>
<body>

<header class="lawyerfy-header">
    <a href="#" class="brand">Lawyerfy</a>

    <div class="search-container">
        <input type="text" placeholder="Buscar expedientes o normativas...">
    </div>

    <nav class="user-actions">
        <a href="#perfil" class="profile-link">
            <span>Mi Perfil</span>
        </a>
        <button class="btn-logout">Cerrar Sesión</button>
    </nav>
</header>

</body>
</html>