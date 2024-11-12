<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentaris - Administració ASF</title>
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
                        <a class="nav-link" href="/src/views/consells.php">Consells</a>
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
                        <a class="nav-link" href="index.php?r=dashboard">
                            <i class="bi bi-speedometer2 me-2"></i>Dashboard
                        </a>
                        <a class="nav-link" href="index.php?r=events">
                            <i class="bi bi-calendar-event me-2"></i>Esdeveniments
                        </a>
                        <a class="nav-link active" href="comentaris.php">
                            <i class="bi bi-chat-dots me-2"></i>Comentaris
                        </a>
                        <a class="nav-link" href="usuaris.php">
                            <i class="bi bi-people me-2"></i>Usuaris
                        </a>
                        <a class="nav-link" href="index.php?r=tips">
                            <i class="bi bi-lightbulb me-2"></i>Consells
                        </a>
                        <a class="nav-link" href="index.php?r=news">
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
                <div class="d-flex justify-content-between pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Gestió de Comentaris</h1>
                    <div class="btn-group">
                        <button class="btn btn-outline-secondary active">Tots</button>
                        <button class="btn btn-outline-warning btn-filter-warning">Pendents</button>
                        <button class="btn btn-outline-success btn-filter-success">Aprovats</button>
                        <button class="btn btn-outline-danger btn-filter-danger">Rebutjats</button>
                    </div>
                </div>

                <!-- Taula de Comentaris -->
                <div class="table-responsive">
                    <table class="table table-striped admin-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Usuari</th>
                                <th>Contingut</th>
                                <th>Element</th>
                                <th>Data</th>
                                <th>Estat</th>
                                <th>Accions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Usuari123</td>
                                <td>Gran esdeveniment! Molt recomanable...</td>
                                <td>Taller de Compostatge</td>
                                <td>15/03/2024</td>
                                <td><span class="badge bg-warning">Pendent</span></td>
                                <td>
                                    <button class="btn btn-sm btn-success" title="Aprovar">
                                        <i class="bi bi-check-lg"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" title="Editar" data-bs-toggle="modal" data-bs-target="#editarComentariModal">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" title="Eliminar">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <!-- Más comentarios... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar Comentari -->
    <div class="modal fade admin-modal" id="editarComentariModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Comentari</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Contingut</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Estat</label>
                            <select class="form-select">
                                <option value="pending">Pendent</option>
                                <option value="approved">Aprovat</option>
                                <option value="rejected">Rebutjat</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Motiu de moderació (opcional)</label>
                            <textarea class="form-control" rows="2" placeholder="Explica el motiu de la moderació..."></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
                    <button type="button" class="btn btn-primary">Guardar Canvis</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 