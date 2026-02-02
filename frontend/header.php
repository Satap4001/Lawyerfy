<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lawyerfy</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
:root {
    --primary: #1a2b48;
    --accent: #c5a059;
    --text: #0f172a;
    --muted: #64748b;
    --border: #e5e7eb;
    --bg-soft: #f8fafc;
}

body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background: #ffffff;
}

/* HEADER */
.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 64px;
    padding: 0 4%;
    border-bottom: 1px solid var(--border);
    background: #fff;
}

/* LOGO */
.logo {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--primary);
    text-decoration: none;
    letter-spacing: -0.3px;
}

/* SEARCH */
.search {
    width: 320px;
    position: relative;
}

.search input {
    width: 100%;
    padding: 8px 12px 8px 36px;
    border: 1px solid var(--border);
    border-radius: 6px;
    font-size: 0.85rem;
    background: #fff;
}

.search i {
    position: absolute;
    top: 50%;
    left: 12px;
    transform: translateY(-50%);
    font-size: 0.85rem;
    color: var(--muted);
}

.search input:focus {
    outline: none;
    border-color: var(--primary);
}

/* USER NAV */
.user-area {
    display: flex;
    align-items: center;
    gap: 20px;
}

/* PROFILE */
.profile {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: var(--text);
    font-size: 0.85rem;
    font-weight: 500;
}

.avatar {
    width: 34px;
    height: 34px;
    background: var(--primary);
    color: #fff;
    border-radius: 50%;
    font-size: 0.75rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* LOGOUT */
.logout {
    background: none;
    border: none;
    font-size: 0.85rem;
    color: var(--muted);
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 6px;
}

.logout:hover {
    color: #b91c1c;
}

/* MOBILE */
@media (max-width: 768px) {
    .search { display: none; }
    .profile span { display: none; }
}
</style>
</head>

<body>

<header class="header">
    <a href="pagePublicaciones.php" class="logo">Lawyerfy</a>

    <div class="search">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Buscar">
    </div>

    <div class="user-area">
        <a href="perfil-cliente-nuevo.php" class="profile">
            <div class="avatar">AU</div>
            <span>Mi perfil</span>
        </a>

        <form action="../backend/logout.php" method="post">
            <button type="submit" name="logout" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                Salir
            </button>
        </form>
    </div>
</header>

</body>
</html>
