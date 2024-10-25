<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multicines Cinestar</title>
    <link rel="stylesheet" href="{{ asset('css/estilos2.css') }}">
</head>

<body>
    <header>
        <img class="logo" src="{{ asset('img/estilazos/logo4.png') }}" alt="Logo">
        <nav class="navigation">
            <button class="btnLogin-popup">Acceder</button>
        </nav>
    </header>
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <h2>Acceso</h2>
            <form method="POST" action="{{ route('procesarAcceso') }}">
            @csrf
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Correo</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Contraseña</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Recordarme</label>
                    <a href="{{ url('resetcontra') }}">Recuperar contraseña?</a>
                </div>
                <button type="submit" class="btn">Acceder</button>
                <div class="login-register">
                    <p>No tienes una cuenta? <a href="#" class="register-link">Registrar</a></p>
                </div>
            </form>
        </div>

        <div id="firebaseui-auth-container"></div>
        <div class="form-box register">
            <h2>Registro</h2>
            <form id="register-form" method="POST" action="{{ route('registrarUsuario') }}">
            @csrf
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" id="username" name="username" required>
                    <label>Nombre de Usuario</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="email" name="email" required>
                    <label>Correo</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="password" name="password" required>
                    <label>Contraseña</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" required>Acepto los términos y condiciones</label>
                </div>
                <button type="submit" class="btn">Registrar</button>
                <div class="login-register">
                    <p>Ya tienes una cuenta? <a href="#" class="login-link">Acceder</a></p>
                </div>
            </form>
        </div>
    </div>

    <script type="module" src="https://www.gstatic.com/firebasejs/10.13.2/firebase-app.js"></script>
    <script type="module" src="https://www.gstatic.com/firebasejs/10.13.2/firebase-auth.js"></script>
    <script type="module" src="https://www.gstatic.com/firebasejs/10.13.2/firebase-database.js"></script>
    
    <script type="module" src="{{ asset('js/script.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script type="module" src="https://www.gstatic.com/firebasejs/ui/6.0.0/firebase-ui-auth.js"></script>
    <link rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/6.0.0/firebase-ui-auth.css" />

</body>
</html>