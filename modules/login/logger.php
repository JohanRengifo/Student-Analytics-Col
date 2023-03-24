<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/src/css/login.css" />
    <title>Login | S.A.C - β</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <form action="#" class="sign-in-form">
                    <h2 class="title">Inicia Sección 😁</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                    
                </form>

                <form action="#" class="sign-up-form">
                    <h2 class="title">Registremonos 😎🥳</h2>
                    <h3>
                        Para poder Registrarte te pediremos algunos datos 😉<br>
                        Tu Privacidad Es Importante para Nosotros, Todos tus datos estan Protegidos y son Confidenciales 🤫😌.
                    </h3>
                    <button class="btn"><a class="btn" href="/app/register/register.php">
                        Registrate
                    </a>
                    </button>
                    
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Nuevo Por Aqui?</h3>
                    <p>
                        Vamos a Registrarnos.<br>para asi poder usar la plataforma al 100%😎🤩
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="/src/img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Te diste cuenta que ya tienes una cuenta?</h3>
                    <p>
                        Valla Amigo 😅.<br>
                        Parece que ya estas registrado. Vamos a ingresar con tu cuenta.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="/src/img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="/src/js/login.js"></script>
</body>

</html>