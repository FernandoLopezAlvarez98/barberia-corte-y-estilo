<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corte y Estilo</title>
    <!-- Font Awesome para los iconos de redes sociales -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="css/index_styles.css">
    <link rel="stylesheet" href="css/agendar_cita.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" alt="Logo Barbería"></a>
            <span>Corte y Estilo</span>
        </div>
        <nav>
        <div class="search">
                <input type="text" placeholder="Buscar...">
            </div>
            <a href="#quienes-somos">QUIÉNES SOMOS</a>
            <a href="#servicios">SERVICIOS</a>
            <a href="#galeria">GALERÍA</a>
            <a href="Home/agendarCita.php">RESERVAR CITA</a>
            <div>
                <a href="../iniciarSesion.php" class="btn-iniciar-sesion btns" style="color: #fff; font-size: 14px;">Iniciar sesión</a>
                <a href="../registrarse.php" class="btn-registrarse btns" style="color: #fff; font-size: 14px; width: 50px;">Registrarse</a>
            </div>
        </nav>
    </header>

    <section class="main-banner">
        <h1>Siéntete renovado, luce impecable y deja que nos encarguemos del resto.</h1>
        <p class="small-text">Nuestra misión es combinar técnicas tradicionales con tendencias modernas para que cada visita sea una experiencia.</p>
    </section>

    <div class="section-box" id="quienes-somos">
        <h2>¿Quiénes somos?</h2>
    </div>

    <div class="section-box">
        <div class="flex-container">
            <div>
                <img src="images_assets/5-1.webp" alt="Imagen equipo" style="border-radius: 5px; height: 300px; width: 800;">
            </div>
            <div>
                <h3>Tu Barbería de confianza 2024</h3>
                <p style="text-align: justify;">En nuestra barbería, combinamos tradición y modernidad para ofrecerte una experiencia única. Nuestro equipo de barberos expertos está dedicado a ayudarte a lucir y sentirte mejor, cuidando cada detalle en un ambiente.
                Desde cortes clásicos hasta los estilos más modernos, tratamientos de barba y mucho más, aquí encontrarás el servicio perfecto para ti. Déjanos ser parte de tu rutina y transformamos juntos tu imagen.</p>
                <h5>Reserva tu cita y vive la experiencia</h5>
            </div>
        </div>
    </div>

    <div class="section-box">
        <div class="flex-container">
            <div>
                <img src="images/barbero.png" alt="Servicio 1">
                <h4>Corte de pelo</h4>
                <p>Cualquier corte a tu gusto.</p>
            </div>
            <div>
                <img src="images/team.jpg" alt="Servicio 2">
                <h4>Afeitado barba</h4>
                <p>Cualquier corte a tu gusto.</p>
            </div>
            <div>
                <img src="images/team.jpg" alt="Servicio 3">
                <h4>Estilismo</h4>
                <p>Cualquier corte a tu gusto.</p>
            </div>
        </div>
    </div>

    <!-- Nueva Sección: Nuestros Barberos -->
    <section class="barber-section" id="nuestros-barberos">
        <h2>Nuestros Barberos</h2>
        
        <div class="barber-team">
            <div class="barber">
                <img src="images/barbero.png" alt="Barbero 1">
                <h3>Juan Pérez</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="barber">
                <img src="images/barbero.png" alt="Barbero 2">
                <h3>Pedro Gómez</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="barber">
                <img src="images/barbero.png" alt="Barbero 3">
                <h3>Lucas Martínez</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-title">
            <h2>Cresemos por Ti</h2>
            <h3>Contamos con una trayectoria de más de 5 años embelleciendo el aspecto interno y externo de nuestros clientes</h3>
        </div>
        <div class="footer-content">
            <!--Logo-->
            <div class="footer-section">
                <img src="images/logo.png" alt="">
            </div>

            <!-- Enlaces útiles -->
            <div class="footer-section">
                <h3>Enlaces útiles</h3>
                <ul>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Galería</a></li>
                    <li><a href="Home/agendarCita.php">Reservar Cita</a></li>
                </ul>
            </div>
            <!-- Ubicación -->
            <div class="footer-section">
                <h3>Ubícanos</h3>
                <p>Nacajuca, #86220 Simón Bolívar</p>
                <p>📞 914 132 3908</p>
            </div>
        </div>
        <!-- Derechos reservados -->
        <div class="footer-bottom">
            <p>&copy; 2024. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>
