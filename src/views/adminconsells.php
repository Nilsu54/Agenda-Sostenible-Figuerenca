<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consells - Administració ASF</title>
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
                    <?php if (isset($_SESSION["user"])){?>  
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?r=favorits">Favorits</a>
                    </li>
                    <?php } ?>
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
                        <a class="nav-link" href="index.php?r=dashboard">
                            <i class="bi bi-speedometer2 me-2"></i>Dashboard
                        </a>
                        <a class="nav-link" href="index.php?r=adminevents">
                            <i class="bi bi-calendar-event me-2"></i>Esdeveniments
                        </a>
                        <a class="nav-link" href="index.php?r=admincoments">
                            <i class="bi bi-chat-dots me-2"></i>Comentaris
                        </a>
                        <a class="nav-link" href="index.php?r=adminusers">
                            <i class="bi bi-people me-2"></i>Usuaris
                        </a>
                        <a class="nav-link active" href="index.php?r=admintips">
                            <i class="bi bi-lightbulb me-2"></i>Consells
                        </a>
                        <a class="nav-link" href="index.php?r=adminnews">
                            <i class="bi bi-megaphone me-2"></i>Anuncis
                        </a>
                        <a class="nav-link" href="index.php?r=admincategory">
                            <i class="bi bi-folder me-2"></i>Categories
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 px-md-4">
                <h1 class="h2">Consells</h1>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nouConsellModal">Nou Consell</button>
                <div class="table-responsive mt-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Títol</th>
                                <th>Data</th>
                                <th>Etiquetes</th>
                                <th>Estat</th>
                                <th>Accions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Estalvi d'Aigua</td>
                                <td>15/03/2024</td>
                                <td>
                                    <span class="badge bg-primary">#EstalviAigua</span>
                                    <span class="badge bg-info">#Sostenibilitat</span>
                                </td>
                                <td><span class="badge bg-success">Publicat</span></td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <!-- Más consells... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Nou Consell -->
    <div class="modal fade" id="nouConsellModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nou Consell</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Títol</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descripció Breu</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contingut (Markdown)</label>
                            <textarea class="form-control" rows="10" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Categoria</label>
                                    <select class="form-select" required>
                                        <option value="">Selecciona una categoria</option>
                                        <option>Recursos Naturals</option>
                                        <option>Energia</option>
                                        <option>Reciclatge</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Etiquetes</label>
                                    <input type="text" class="form-control" placeholder="Separades per comes">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Imatge</label>
                            <input type="file" class="form-control" accept="image/*">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
                    <button type="button" class="btn btn-primary">Publicar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>