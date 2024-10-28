<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Agenda Sostenible Figuerenca</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo">
            <img onclick="window.location.href='index.php'" class="foto-logo" src="img/logoblanco.png" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Consells</a></li>
                <li><a href="#">Anuncis</a></li>
                <li><a href="#">Esdeveniments</a></li>
            </ul>
        </nav>
        <div class="login">
            <button>Login</button>
        </div>
    </header>

    <div class="login-container">
        <div class="login-box">
            <h2>Iniciar Sesión</h2>
            <form action="login_process.php" method="POST">
                <div class="form-group">
                    <label for="username">Usuario</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit">Entrar</button>
                </div>
                <div class="form-links">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                    <a href="registro.php">Registrarse</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

