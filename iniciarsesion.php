<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="externo/estilos.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>
        Rapibnb
    </title>
</head>

<header>
    <nav>
        <div class="grid-container">
            <div class="grid-item" style="text-align: left;">
                <div class="grid-item" style="text-align: left;">

                    <a href="index.php"> <img alt="logo" src="img/logo1.png" style="width: 7em; "></a>
                </div>

            </div>
            <div class="grid-item" style="text-align: center; padding: 20px;">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <p></p>
                    <a class="nav-link active" aria-current="page" href="#">
                        <button type="button" class="btn btn-outline-danger" style="background-color: #1D2C49; ">
                            Buscar
                        </button></a>
                </form>
            </div>
            <div class="grid-item" style="text-align: right; padding: 20px; align-content: center;">
                <div class="hamburger">
                    <div class="_layer -top"></div>
                    <div class="_layer -mid"></div>
                    <div class="_layer -bottom"></div>
                </div>
                <nav class="menuppal">
                    <ul>
                        <li><a href="iniciarsesion.php">Iniciar Sesión</a></li>
                        <li><a href="registrarse.php">Registrarse</a></li>
                        <li><a href="formalojamiento.php">Registrar tu alojamiento</a></li>
                        <li><a href="editarPerfil.php">Editar Perfil</a></li>
                    </ul>
                </nav>
                <style>
                    .hamburger {
                        position: fixed;
                        background-color: transparent;
                        top: 10;
                        height: 30px;
                        width: 30px;
                        padding: 20px 20px;
                        -webkit-transform: translate3d(0, 0, 0);
                        transform: translate3d(0, 0, 0);
                        -webkit-transition: -webkit-transform 0.25s cubic-bezier(0.05, 1.04, 0.72, 0.98);
                        transition: transform 0.25s cubic-bezier(0.05, 1.04, 0.72, 0.98);
                        z-index: 1002;
                        cursor: pointer;
                        -webkit-user-select: none;
                        -moz-user-select: none;
                        -ms-user-select: none;
                        user-select: none;
                    }

                    .hamburger.is-active {
                        background-color: none;
                    }

                    ._layer {
                        background: #1D2C49;
                        margin-bottom: 4px;
                        border-radius: 2px;
                        width: 28px;
                        height: 4px;
                        opacity: 10;
                        -webkit-transform: translate3d(0, 0, 0);
                        transform: translate3d(0, 0, 0);
                        -webkit-transition: all 0.25s cubic-bezier(0.05, 1.04, 0.72, 0.98);
                        transition: all 0.25s cubic-bezier(0.05, 1.04, 0.72, 0.98);
                    }

                    .hamburger:hover .-top {
                        -webkit-transform: translateY(-100%);
                        -ms-transform: translateY(-100%);
                        transform: translateY(-100%);
                    }

                    .hamburger:hover .-bottom {
                        -webkit-transform: translateY(50%);
                        -ms-transform: translateY(100%);
                        transform: translateY(100%);
                    }

                    .hamburger.is-active .-top {
                        -webkit-transform: translateY(200%) rotate(45deg) !important;
                        -ms-transform: translateY(200%) rotate(45deg) !important;
                        transform: translateY(200%) rotate(45deg) !important;
                    }

                    .hamburger.is-active .-mid {
                        opacity: 0;
                    }

                    .hamburger.is-active .-bottom {
                        -webkit-transform: translateY(-200%) rotate(135deg) !important;
                        -ms-transform: translateY(-200%) rotate(135deg) !important;
                        transform: translateY(-200%) rotate(135deg) !important;
                    }

                    .menuppal.is_active {
                        transform: translate3d(0px, 0px, 0px);
                    }

                    .menuppal {
                        background-color: rgba(255, 255, 255, 0.95);
                        bottom: 0;
                        height: 100%;
                        left: 0;
                        overflow-y: scroll;
                        position: fixed;
                        top: 0;
                        transform: translate3d(0px, -100%, 0px);
                        transition: transform 0.35s cubic-bezier(0.05, 1.04, 0.72, 0.98) 0s;
                        width: 100%;
                        z-index: 1001;
                    }

                    .menuppal ul {
                        margin: 0;
                        padding: 0;
                    }

                    .menuppal ul li {
                        list-style: none;
                        text-align: center;
                        font-family: Verdadna, Arial, Helvetica;
                        color: #1D2C49;
                        font-size: 1.5rem;
                        line-height: 3em;
                        height: 3em;
                        color: #1D2C49;
                        text-transform: none;
                        font-weight: bold;
                    }

                    .menuppal ul li a {
                        text-decoration: none;
                        color: #1D2C49;
                    }

                    .menuppal ul li a:hover {
                        text-decoration: none;
                        color: #1D2C49;
                    }
                </style>
                <script>
                    // selector
                    var menu = document.querySelector('.hamburger');

                    // method
                    function toggleMenu(event) {
                        this.classList.toggle('is-active');
                        document.querySelector(".menuppal").classList.toggle("is_active");
                        event.preventDefault();
                    }

                    // event
                    menu.addEventListener('click', toggleMenu, false);
                </script>

            </div>
        </div>
</header>
    <body class="text-center" >
        <main class="form-signin" >
            <form action="login.php" method="post">
                <h1 class="h3 mb-3 fw-normal">inciar sesión</h1>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label >Correo</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="contraseña">
                    <label>Contraseña</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" style= "background-color: #1D2C49 ">Ingresar</button>
               
            </form>
        </main>
    </body>
    <style>
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            

        }

        .form-signin .checkbox {
            font-weight: 400;

        }

       
        .form-floating{
            position: static !important;
        }
    </style>


</html>