<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Sostenible Figuerenca</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <!-- Añadir CSS de Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <header>
        <div class="logo">
            <img class="foto-logo" src="img/logoblanco.png" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="consells.php">Consells</a></li>
                <li><a href="anuncis.php">Anuncis</a></li>
                <li><a href="esdeveniments.php">Esdeveniments</a></li>
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

    <div class="swiper consellsSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-title="Consells" data-link="consells.php">
                <img src="img/lago.jpg" alt="Slider Consells">
            </div>
            <div class="swiper-slide" data-title="Anuncis" data-link="anuncis.php">
                <img src="img/lago2.jpg" alt="Slider Anuncis">
            </div>
            <div class="swiper-slide" data-title="Events" data-link="events.php">
                <img src="img/lago3.jpg" alt="Slider Events">
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="slider-title">
            <div class="title-container">
                <h1>Consells</h1>
            </div>
        </div>
    </div>  
    
    <div class="events-container">
        <h2>Próximos Eventos</h2>
        <ul class="events-list">
            <li>
                <div class="event-date">15</div>
                <div class="event-info">
                    <h4>Taller de Compostatge</h4>
                    <p>Aprèn a fer el teu propi compost casolà i contribueix a reduir els residus orgànics. Taller pràctic amb experts en compostatge.</p>
                </div>
            </li>
            <li>
                <div class="event-date">22</div>
                <div class="event-info">
                    <h4>Neteja del Riu Muga</h4>
                    <p>Jornada de neteja col·lectiva del riu. Junts podem mantenir net el nostre entorn natural. Material de neteja proporcionat.</p>
                </div>
            </li>
            <li>
                <div class="event-date">27</div>
                <div class="event-info">
                    <h4>Mercat d'Intercanvi</h4>
                    <p>Porta objectes que ja no utilitzis i intercanvia'ls. Promovem el consum responsable i la reutilització.</p>
                </div>
            </li>
            <li>
                <div class="event-date">29</div>
                <div class="event-info">
                    <h4>Taller d'Hort Urbà</h4>
                    <p>Descobreix com crear i mantenir el teu propi hort urbà. Aprèn tècniques de cultiu ecològic i sostenible.</p>
                </div>
            </li>
            <li>
                <div class="event-date">03</div>
                <div class="event-info">
                    <h4>Fira de Productes Locals</h4>
                    <p>Mostra i venda de productes ecològics i de proximitat. Coneix els productors locals i dona suport al consum sostenible.</p>
                </div>
            </li>
        </ul>
    </div>

    <!-- Añadir JS de Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.consellsSlider', {
            loop: true,
            autoplay: {
                delay: 3000, // 3 segundos
                disableOnInteraction: false, // Continúa el autoplay después de la interacción del usuario
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>
