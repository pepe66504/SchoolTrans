<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <title>School Transport</title>
</head>
<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navegacion">
            <a href="#">Inicio</a>
            <a href="#">Contactanos</a>
            <button class="btn-login">Login</button>
        </nav>
    </header>


    <div class='console-container'><span></span><ion-icon name="bus"></ion-icon></span><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>

    <div class="contenedor">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label for="">Correo electronico</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label for="">Contraseña</label>
                </div>
                <div class="remember-forgot">
                    <label for=""><input type="checkbox">Recuerdame</label>
                    <a href="#">Olvidaste tu Contraseña?</a>
                </div>
                <button type="submit" class="btn">Iniciar Seccion</button>
                <div class="login-register">
                    <p>No tienes cuenta? <a href="#" class="register-link">Registrate</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registro</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-add"></ion-icon></span>
                    <input type="text" required>
                    <label for="">Nombre de usuario</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label for="">Correo electronico</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label for="">Contraseña</label>
                </div>
                <div class="remember-forgot">
                    <label for=""><input type="checkbox">Aceptar terminos & condiciones</label>
                </div>
                <button type="submit" class="btn">Registrarse</button>
                <div class="login-register">
                    <p>Ya tienes cuenta? <a href="#" class="login-link">Iniciar Seccion</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="/js/login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
