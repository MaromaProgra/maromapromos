    <?php include 'includes/terminos.php'; ?>
    <?php include 'includes/aviso.php'; ?>
    <?php include 'includes/faq.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArmorAll - Racing Performance</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;700;900&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--favicon-->
    <link rel="icon" href="assets/images/Rectángulo 101 favicon.png">
    <!-- Styles -->
    <link rel="stylesheet" href="css/variables.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <!--Open Graph-->
    <!--Facebook-->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tu-dominio-del-concurso.com/">
    <meta property="og:title" content="GP Armor All - ¡Participa por grandes premios!">
    <meta property="og:description" content="Compra, registra y gana productos oficiales de Oracle Red Bull Racing firmados por tus pilotos favoritos.">
    <meta property="og:image" content="assets/images/Logo colores naranja.png">
    <!--Twitter-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://tu-dominio-del-concurso.com/">
    <meta property="twitter:title" content="GP Armor All - ¡Participa por grandes premios!">
    <meta property="twitter:description" content="Compra, registra y gana productos oficiales de Oracle Red Bull Racing firmados por tus pilotos favoritos.">
    <meta property="twitter:image" content="assets/images/Logo colores naranja.png">
    <!--Meta Tags-->
    <meta name="description" content="Participa en el GP Armor All y gana grandes premios, incluyendo artículos firmados por Max Verstappen y Yuki Tsunoda. ¡Registra tu ticket ahora!">
    <meta name="keywords" content="Armor All, concurso, GP Armor All, Max Verstappen, Yuki Tsunoda, Red Bull Racing, automovilismo, premios">
    <meta name="author" content="Armor All">
    <meta name="robots" content="index, follow">
    <meta http-equiv="cache-control" content="no-cache">
    
</head>
<body>

    <main>
        <!-- NAVIGATION HEADER: Always Fixed on Top -->
        <header class="nav-header">
            <div class="header-logo-container">
                <img src="assets/images/Logo colores naranja.png" alt="ArmorAll Logo" class="header-logo" oncontextmenu="return false;" draggable="false">
            </div>
            
            <div class="header-menu-container">
                <button class="hamburger-btn" aria-label="Menú">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="nav-wrapper">
                    <nav>
                        <a href="#">INICIO</a>
                        <a href="#">PARTICIPA</a>
                        <a href="#" id="terms-link">TÉRMINOS Y CONDICIONES</a>
                        <a href="#" id="privacy-link">AVISO DE PRIVACIDAD</a>
                        <a href="#" id="faq-link">PREGUNTAS FRECUENTES</a>
                        <a href="#">¿NECESITAS<br>AYUDA?</a>
                    </nav>
                    <div class="login-btn-wrapper">
                        <a href="#" class="btn-outline">INICIAR SESIÓN</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- FIXED CTA BUTTON: Like Header, stays on top -->
        <button class="cta-btn-parallelogram hero-btn">
            <span class="btn-text">PARTICIPA Y GANA</span>
            <span class="material-symbols-outlined btn-arrow">arrow_forward_ios</span>
        </button>

        <!-- PINNED CONTAINER: Holds both Video (Layer 0) and Curtains (Layer 1) -->
        <div id="pinned-container">

            <!-- LAYER 1: Video Hero (Background) -->
            <section class="video-hero">
                <video autoplay muted loop playsinline class="bg-video" oncontextmenu="return false;">
                    <source src="assets/video/Video de Fondo.mp4" type="video/mp4">
                </video>
                <div class="video-overlay" oncontextmenu="return false;" ondragstart="return false;"></div>

                <div class="video-content">
                    <div class="video-text-group">
                        <div class="gp-branding">
                            <span class="gp-text">GP</span>
                            <span class="armor-text">ARMOR ALL</span>
                        </div>

                        <div class="promo-info">
                            <p class="promo-lead">PARTICIPA POR UNO DE LOS <span class="highlight">+80 PREMIOS</span></p>
                            <p class="promo-sub">¡Tú puedes ser el próximo ganador!</p>
                        </div>
                    </div>

                </div>

                <img src="assets/images/Logo colores blancos.png" alt="ArmorAll Podium Series" class="section-logo-bottom" oncontextmenu="return false;" draggable="false">
            </section>

            <!-- LAYER 1B: Curtain Reveal (Section 1b) - Overlays Video -->
            <section id="hero" class="hero-section">
                <!-- No background div needed here, styling handles columns -->
                
                <div class="hero-container">
                    <!-- Left Curtain -->
                    <div class="hero-column left-column">
                        
                        <div class="main-visual">
                            <div class="visual-group-wrapper">
                                <img src="assets/images/Rueda sin fondo.png" alt="Neumático Brillante" class="hero-wheel" oncontextmenu="return false;" draggable="false">
                                <img src="assets/images/articulos Sin rueda.png" alt="Premios ArmorAll" class="hero-prizes" oncontextmenu="return false;" draggable="false">
                            </div>
                        </div>
                    </div>

                    <!-- Right Curtain -->
                    <div class="hero-column right-column">
                        <div class="steps-grid-container">
                            <!-- Step 1 -->
                            <div class="step-item">
                                <span class="material-symbols-outlined step-icon">shopping_cart</span>
                                <div class="step-content">
                                    <h3 class="step-title">COMPRA</h3>
                                    <p class="step-desc">productos Armor All</p>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="step-item">
                                <span class="material-symbols-outlined step-icon">receipt_long</span>
                                <div class="step-content">
                                    <h3 class="step-title">REGISTRA</h3>
                                    <p class="step-desc">Tu ticket y participa</p>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="step-item">
                                <span class="material-symbols-outlined step-icon">timer</span>
                                <div class="step-content">
                                    <h3 class="step-title">PARTICIPA</h3>
                                    <p class="step-desc">para obtener el mejor tiempo</p>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="step-item">
                                <span class="material-symbols-outlined step-icon">sports_score</span>
                                <div class="step-content">
                                    <h3 class="step-title">GANA</h3>
                                    <p class="step-desc">puntos y acumúlalos<br>para ser el primero</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Scroll Spacer: Creates height for the user to scroll through the animation -->
        <div class="scroll-spacer" style="height: 150vh;"></div>

        <!-- SECTION 2: PRODUCT CAROUSEL (Cyclic) -->
        <section class="carousel-section">
            <div class="carousel-track">
                <!-- SET 1 -->
                <!-- Card 1: Suit -->
                <div class="product-card">
                    <div class="product-content">
                        <img src="assets/images/Traje de Yuki.png" alt="Traje Yuki Tsunoda" class="product-img suit-img" oncontextmenu="return false;" draggable="false">
                        <div class="product-info-box">
                            <h3 class="p-title">TRAJE OFICIAL FIRMADO</h3>
                            <p class="p-subtitle">YUKI TSUNODA</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2: Gloves -->
                <div class="product-card">
                    <div class="product-content">
                        <img src="assets/images/Guante.png" alt="Guantes Red Bull" class="product-img glove-img" oncontextmenu="return false;" draggable="false">
                        <div class="product-info-box">
                            <h3 class="p-title">PRODUCTO OFICIAL DE</h3>
                            <p class="p-subtitle">ORACLE RED BULL RACING</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3: Cap -->
                <div class="product-card">
                    <div class="product-content">
                        <img src="assets/images/Gorra.png" alt="Gorra Max Verstappen" class="product-img cap-img" oncontextmenu="return false;" draggable="false">
                        <div class="product-info-box">
                            <h3 class="p-title">GORRA FIRMADA</h3>
                            <p class="p-subtitle">POR MAX VERSTAPPEN</p>
                        </div>
                    </div>
                </div>

                <!-- SET 2 (Duplicate for Loop) -->
                <div class="product-card">
                    <div class="product-content">
                        <img src="assets/images/Traje de Yuki.png" alt="Traje Yuki Tsunoda" class="product-img suit-img" oncontextmenu="return false;" draggable="false">
                        <div class="product-info-box">
                            <h3 class="p-title">TRAJE OFICIAL FIRMADO</h3>
                            <p class="p-subtitle">YUKI TSUNODA</p>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-content">
                        <img src="assets/images/Guante.png" alt="Guantes Red Bull" class="product-img glove-img" oncontextmenu="return false;" draggable="false">
                        <div class="product-info-box">
                            <h3 class="p-title">PRODUCTO OFICIAL DE</h3>
                            <p class="p-subtitle">ORACLE RED BULL RACING</p>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-content">
                        <img src="assets/images/Gorra.png" alt="Gorra Max Verstappen" class="product-img cap-img" oncontextmenu="return false;" draggable="false">
                        <div class="product-info-box">
                            <h3 class="p-title">GORRA FIRMADA</h3>
                            <p class="p-subtitle">POR MAX VERSTAPPEN</p>
                        </div>
                    </div>
                </div>

                <!-- SET 3 (Duplicate for Loop) -->
                <div class="product-card">
                    <div class="product-content">
                        <img src="assets/images/Traje de Yuki.png" alt="Traje Yuki Tsunoda" class="product-img suit-img" oncontextmenu="return false;" draggable="false">
                        <div class="product-info-box">
                            <h3 class="p-title">TRAJE OFICIAL FIRMADO</h3>
                            <p class="p-subtitle">YUKI TSUNODA</p>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-content">
                        <img src="assets/images/Guante.png" alt="Guantes Red Bull" class="product-img glove-img" oncontextmenu="return false;" draggable="false">
                        <div class="product-info-box">
                            <h3 class="p-title">PRODUCTO OFICIAL DE</h3>
                            <p class="p-subtitle">ORACLE RED BULL RACING</p>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-content">
                        <img src="assets/images/Gorra.png" alt="Gorra Max Verstappen" class="product-img cap-img" oncontextmenu="return false;" draggable="false">
                        <div class="product-info-box">
                            <h3 class="p-title">GORRA FIRMADA</h3>
                            <p class="p-subtitle">POR MAX VERSTAPPEN</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- TERMS AND CONDITIONS MODAL -->
    <div id="terms-modal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-body">
                <?php include 'includes/terminos.php'; ?>
            </div>
        </div>
    </div>

    <!-- PRIVACY NOTICE MODAL -->
    <div id="privacy-modal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-body">
                <?php include 'includes/aviso.php'; ?>
            </div>
        </div>
    </div>

    <!-- FAQ MODAL -->
    <div id="faq-modal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-body">
                <?php include 'includes/faq.php'; ?>
            </div>
        </div>
    </div>

    <!-- TRANSITION VIDEO OVERLAY -->
    <div id="transition-overlay" oncontextmenu="return false;" ondragstart="return false;">
        <video id="transition-video" playsinline oncontextmenu="return false;">
            <source src="assets/video/YTDown.com_YouTube_Tienes-una-para-cada-lugar-cada-mancha-y_Media_cTVWBAI9VlU_001_1080p.mp4" type="video/mp4">
        </video>
    </div>

    <script src="js/script.js?v=<?php echo time(); ?>"></script>
</body>
</html>
