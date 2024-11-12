<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel d'Administració - ASF</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="/img/logo.png" type="image/x-icon">
</head>
<body>
    <!-- Navbar --> 
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="index.php">
                <img src="/img/logoblanco.png" height="50" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?r=tips">Consells</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?r=news">Anuncis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?r=events">Esdeveniments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">Admin</a>
                    </li>
                </ul>
                <a href="index.php?r=profile" class="image-cropper">
                    <img src="/img/Dan Franklin.jpg" alt="foto de perfil" class="profile-pic">
                </a>
             </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0 admin-sidebar">
                <div class="d-flex flex-column">
                    <div class="p-3 text-white text-center">
                        <img src="/img/logoblanco.png" height="50" alt="Logo">
                        <h5 class="mt-2">Panel d'Administració</h5>
                    </div>
                    <nav class="nav flex-column">
                        <a class="nav-link active" href="">
                            <i class="bi bi-speedometer2 me-2"></i>Dashboard
                        </a>
                        <a class="nav-link" href="index.php?r=adminevents">
                            <i class="bi bi-calendar-event me-2"></i>Esdeveniments
                        </a>
                        <a class="nav-link" href="comentaris.php">
                            <i class="bi bi-chat-dots me-2"></i>Comentaris
                        </a>
                        <a class="nav-link" href="index.php?r=adminUsers">
                            <i class="bi bi-people me-2"></i>Usuaris
                        </a>
                        <a class="nav-link" href="index.php?r=admintips">
                            <i class="bi bi-lightbulb me-2"></i>Consells
                        </a>
                        <a class="nav-link" href="index.php?r=adminnews">
                            <i class="bi bi-megaphone me-2"></i>Anuncis
                        </a>
                        <a class="nav-link" href="categories.php">
                            <i class="bi bi-folder me-2"></i>Categories
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card text-white bg-primary">
                            <div class="card-body">
                                <h5 class="card-title">Esdeveniments</h5>
                                <p class="card-text display-6">150</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <h5 class="card-title">Usuaris</h5>
                                <p class="card-text display-6">1.2k</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-warning">
                            <div class="card-body">
                                <h5 class="card-title">Comentaris</h5>
                                <p class="card-text display-6">324</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-info">
                            <div class="card-body">
                                <h5 class="card-title">Anuncis</h5>
                                <p class="card-text display-6">89</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Events Table -->
                <h3>Esdeveniments més vistos</h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Títol</th>
                                <th>Data</th>
                                <th>Visualitzacions</th>
                                <th>Estat</th>
                                <th>Accions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Taller de Compostatge</td>
                                <td>15/03/2024</td>
                                <td>1,234</td>
                                <td><span class="badge bg-success">Actiu</span></td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <!-- More rows... -->
                        </tbody>
                    </table>
                </div>

                <!-- Recent Comments -->
                <h3>Comentaris pendents de moderació</h3>
                <div class="list-group mb-4">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Usuari123</h5>
                            <small>Fa 3 dies</small>
                        </div>
                        <p class="mb-1">Gran esdeveniment! Molt recomanable per aprendre sobre sostenibilitat.</p>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-success">Aprovar</button>
                            <button class="btn btn-sm btn-warning">Editar</button>
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>