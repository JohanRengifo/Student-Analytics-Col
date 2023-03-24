<?php
session_start();

header('Content-Type: text/html; charset=UTF-8');

include_once 'modules/conexion.php';
include_once 'modules/cookie.php';


if (!empty($_SESSION['authenticate']) == 'go-' . !empty($_SESSION['usuario'])) {
	header('Location: home');
	exit();
}
?>
<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Analytics Col - β</title>
    <link rel="stylesheet" href="/src/css/landingpage.css" />
    <link rel="shortcut icon" href="/src/img/logos/icon.png" type="image/x-icon">
</head>

<body>
    <main>
        <div class="big-wrapper light">
            <img src="/src/img/shape.png" alt="" class="shape" />

            <header>
                <div class="container">
                    <div class="logo">
                        <h3>Students Analytics Col</h3>
                    </div>

                    <div class="links">
                        <ul> 
                            <li><a href="#"><b>JR Enterprise</b></a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="/modules/login/logger.php" class="btn">Sign up</a></li>
                        </ul>
                    </div>

                    <div class="overlay"></div>

                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </div>
            </header>

            <div class="showcase-area">
                <div class="container">
                    <div class="left">
                        <div class="big-title">
                            <h1>Control Estudiantil</h1>
                            <h1>Moderno y Seguro</h1>
                        </div>
                        <p class="text">
                            Plataforma de gestión Estuiantil y/o Universitaria Moderna, Multifuncional y Segura.
                        </p>
                        <div class="cta">
                            <a href="/modules/register/register.php" class="btn">Empezemos...</a>
                        </div>
                    </div>

                    <div class="right">
                        <img src="/src/img/person.png" alt="Person Image" class="person" />
                    </div>
                </div>
            </div>

            <div class="bottom-area">
                <div class="container">
                    <button class="toggle-btn">
                        <i class="far fa-moon"></i>
                        <i class="far fa-sun"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="/src/js/landingpage.js"></script>
</body>

</html>