<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - GP Armor All</title>
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/auth.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>

<body class="auth-page">
    <!-- Header/Nav -->
    <header class="nav-header">
        <div class="header-logo-container">
            <a href="index.php">
                <img src="assets/images/Logo colores blancos.png" alt="Armor All Logo" class="header-logo"
                    oncontextmenu="return false;" draggable="false">
            </a>
        </div>

        <div class="header-menu-container">
            <!-- Hamburger Button for Mobile -->
            <button class="hamburger-btn" aria-label="Abrir menú">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Navigation Links -->
            <div class="nav-wrapper">
                <nav>
                    <a href="index.php">INICIO</a>
                    <a href="index.php#mechanics">MECÁNICA</a>
                    <a href="index.php#prizes">PREMIOS</a>
                    <a href="#" id="terms-link">TÉRMINOS Y CONDICIONES</a>
                    <a href="#" id="privacy-link">AVISO DE PRIVACIDAD</a>
                    <a href="#" id="faq-link">PREGUNTAS FRECUENTES</a>
                </nav>
            </div>
        </div>
    </header>

    <div class="login-container">
        <div class="login-info">
            <h1 class="login-title">DATOS DE USUARIO</h1>
            <p>Coloca los mismos datos que utilizaste para realizar tu registro.</p>
        </div>

        <form action="#" method="POST">
            <div class="form-group">
                <label class="form-label" for="email">NOMBRE DE USUARIO</label>
            </div>

            <div class="form-group">
                <label class="form-label" for="ticket">CONTRASEÑA</label> <input type="password" id="password"
                    name="password" class="form-input" placeholder="">
            </div>

            <button type="submit" class="login-submit">AVANZAR</button> <!-- Image says "AVANZAR" -->

            <div style="text-align: right; margin-top: 10px;">
                <a href="#" style="color: #333; font-size: 0.8rem; text-decoration: none;">¿Aún no estás registrado?
                    <span style="color: #FE6E07; font-weight: bold;">Regístrate</span></a>
            </div>
        </form>


    </div>

    <!-- Modals (Copied from index.php logic, shared) -->
    <!-- Ideally these should be in a separate includes file now -->
    <?php include 'includes/terminos.php'; ?>
    <?php include 'includes/aviso.php'; ?>
    <?php include 'includes/faq.php'; ?>

    <script src="js/script.js?v=<?php echo time(); ?>"></script>
</body>

</html>