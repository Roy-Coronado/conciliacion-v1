<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../CSS/signUpSytle.css">
    <script src="../JS/script.js"></script>

    <title> Registrate </title>
</head>
<body>

    <div class="form">

        <form action="guardar_registro.php" method="POST">

            <div class="principal">
                <img class="logo" src="/imges/logo.png" alt="No carga la puta imagen"> <br>

                <h2 class="loginTitle"> ¡Registrate Ya! Nexus Comunitario </h2> 
    
            </div>

            <div class="form-group">
                <label class="titleUserName" for="username">Usuario</label>
                <input type="text" class="username" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label class="titlePassword" for="password">Contraseña</label>
                <input type="password" class="password" id="password" name="password" required>
            </div>
            <div class="buttons">
                <button class="submit-btn" type="submit" value="Iniciar Sesión">¡Regístrate!</button>
                <a href="paginaPrincipal.html"><button class="cancel-btn" type="button">Cancelar</button></a>
            </div>
        </form>

    </div>
    
</body>
</html>