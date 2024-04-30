<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/Pagina/ESTILOS/loginStyle.css">
    <script src="/Pagina/FUNCIONES/ValidarLogin.js"></script>

    <title>Inicio de Sesion</title>
</head>

<body>

    <div class="form">

        <form action="/login" method="POST">

            <div class="principal">
                <img class="logo" src="/imges/logo.png" alt="No carga la puta imagen"> <br>

                <h2 class="loginTitle"> ¡Bienvenido! </h2> 
    
            </div>

            <div class="form-group">
                <label class="titleUserName" for="username">Usuario</label>
                <input type="text" class="username" id="username" required>
            </div>
        
            <div class="form-group">
                <label class="titlePassword" for="password">Contraseña</label>
                <input type="password" class="password" id="password" required>
            </div>

            <div class=vinculo>
                <p> ¿No tienes cuenta? <a href="signUp.html"> Registrate Aquí </a> </p>
            </div>

            <div class="buttons">
                <button class="submit-btn" type="button" value="Iniciar Sesión" onclick="login()" > Iniciar Sesion </button> 

                <button class="cancel-btn" type="button" > Cancelar </button>

            </div> 

        </form>

    </div>
    
</body>
</html>