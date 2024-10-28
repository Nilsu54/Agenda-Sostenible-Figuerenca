<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Sostenible Figuerenca</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo">
            <img href="index.php" class="foto-logo" src="img/logoblanco.png" alt="Logo">
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
    
    <div class="subheader">
        <div class="filters">
            <select>
                <option>Filtro 1</option>
                <option>Filtro 2</option>
                <option>Filtro 3</option>
            </select>
            <select>
                <option>Categoría 1</option>
                <option>Categoría 2</option>
                <option>Categoría 3</option>
            </select>
        </div>
        <div class="search">
            <input type="text" placeholder="Buscar...">
            <button>Buscar</button>
        </div>
    </div>

    <div class="banner-image">
    </div>
    
    <div class="events-container">
        <h2>Agenda Ambiental 2024</h2>
        <div class="month-events">
            <h3>Abril</h3>
            <ul class="events-list">
                <li>
                    <div class="event-date">22</div>
                    <div class="event-info">
                        <h4>Día de la Tierra</h4>
                        <p>Desde 1970 se celebra el Día Internacional de la Madre Tierra</p>
                    </div>
                </li>
                <li>
                    <div class="event-date">24</div>
                    <div class="event-info">
                        <h4>Día Mundial para la Concienciación del Ruido</h4>
                    </div>
                </li>
                <li>
                    <div class="event-date">27</div>
                    <div class="event-info">
                        <h4>Día Internacional para la Conservación de los Anfibios</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
</body>
</html>
