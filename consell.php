<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Com Reduir el Consum d'Aigua - Agenda Sostenible Figuerenca</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="index.php">
                <img src="img/logoblanco.png" height="50" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="consells.php">Consells</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="anuncis.php">Anuncis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="esdeveniments.php">Esdeveniments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/adminpanel.php">Admin</a>
                    </li>
                </ul>
                <button class="btn btn-light" onclick="window.location.href='login.php'">Login</button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="consell-container">
        <div class="container">
            <div class="bg-white rounded-4 shadow p-4">
                <!-- Consell Header -->
                <div class="mb-4">
                    <h1 class="text-primary mb-3">Com Reduir el Consum d'Aigua</h1>
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <span class="badge bg-primary">#EstalviAigua</span>
                        <span class="badge bg-info">#Sostenibilitat</span>
                        <span class="badge bg-success">#RecursosNaturals</span>
                    </div>
                    <p class="lead">Descobreix com pots reduir el teu consum d'aigua diari amb aquests consells pràctics i efectius.</p>
                </div>

                   <!-- Sección de Consejos para Estalviar Aigua -->
<div class="mb-4">
    <div class="content-markdown">
        <h2>Per què és important estalviar aigua?</h2>
        <p>L'aigua és un recurs essencial i limitat, i cada gota compta per a la preservació del nostre medi ambient. Amb petits canvis en els hàbits diaris, podem fer una gran diferència en la sostenibilitat del planeta.</p>

        <h3>Consells Pràctics per Estalviar Aigua</h3>
        <ul>
            <li><b>Instal·la airejadors a les aixetes i a la dutxa:</b> Aquests dispositius redueixen el flux d’aigua sense afectar la pressió, estalviant litres d’aigua cada dia.</li>
            <li><b>Repara les fuites d'aigua a casa:</b> Una aixeta que degota pot malgastar fins a 30 litres d'aigua al dia. Revisa periòdicament aixetes, cisternes i tubs per detectar possibles fuites i repáralas immediatament.</li>
            <li><b>Recull l'aigua de pluja per regar plantes i netejar:</b> Instal·la un sistema de recollida d'aigua de pluja, com un dipòsit o contenidor a l'exterior. Aquesta aigua es pot utilitzar per a regar el jardí, netejar els patis i altres tasques de neteja.</li>
            <li><b>Optimitza l'ús de l’aigua a la cuina i la bugaderia:</b> Utilitza el rentavaixelles i la rentadora només quan estiguin plens i tria programes curts o ecològics. També pots reutilitzar l'aigua de rentar vegetals per regar plantes d'interior.</li>
        </ul>

        <h3>Principals Beneficis</h3>
        <ol>
            <li>Reducció de la factura d'aigua gràcies a un consum més eficient.</li>
            <li>Minimització de l'impacte ambiental en ecosistemes locals.</li>
            <li>Conservació a llarg termini dels recursos hídrics per a futures generacions.</li>
        </ol>
    </div>
</div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'cookie_banner.php'; ?>
</body>
</html>
