<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Agenda Sostenible Figuerenca</title>
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
            <button onclick="window.location.href='login.php'">Login</button>
        </div>
    </header>

    <div class="register-container">
        <div class="register-box">
            <h2>Registre</h2>
            <form action="registro_process.php" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group">
                        <label for="nombre">Nom</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Cognoms</label>
                        <input type="text" id="apellidos" name="apellidos" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="username">Nom d'usuari</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="password">Contrasenya</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirma la contrasenya</label>
                        <input type="password" id="confirm_password" name="confirm_password" required>
                    </div>
                </div>

                <div class="form-group file-group">
                    <label for="profile_image">Imatge de perfil</label>
                    <input type="file" id="profile_image" name="profile_image" accept="image/*">
                    <div class="file-preview"></div>
                </div>

                <div class="form-group">
                    <button type="submit">Registrar-se</button>
                </div>
                <div class="form-links">
                    <a href="login.php">Ja tens compte? Inicia sessió</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
