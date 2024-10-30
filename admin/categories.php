<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Administració ASF</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
</head>
<body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="../index.php">
                <img src="../img/logoblanco.png" height="50" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../consells.php">Consells</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../anuncis.php">Anuncis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../esdeveniments.php">Esdeveniments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Admin</a>
                    </li>
                </ul>
                <button class="btn btn-light" onclick="window.location.href='../login.php'">Login</button>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0 admin-sidebar">
                <div class="d-flex flex-column">
                    <div class="p-3 text-white text-center">
                        <img src="../img/logoblanco.png" height="50" alt="Logo">
                        <h5 class="mt-2">Panel d'Administració</h5>
                    </div>
                    <nav class="nav flex-column">
                        <a class="nav-link" href="adminpanel.php">
                            <i class="bi bi-speedometer2 me-2"></i>Dashboard
                        </a>
                        <a class="nav-link" href="esdeveniments.php">
                            <i class="bi bi-calendar-event me-2"></i>Esdeveniments
                        </a>
                        <a class="nav-link" href="comentaris.php">
                            <i class="bi bi-chat-dots me-2"></i>Comentaris
                        </a>
                        <a class="nav-link" href="usuaris.php">
                            <i class="bi bi-people me-2"></i>Usuaris
                        </a>
                        <a class="nav-link" href="consells.php">
                            <i class="bi bi-lightbulb me-2"></i>Consells
                        </a>
                        <a class="nav-link" href="anuncis.php">
                            <i class="bi bi-megaphone me-2"></i>Anuncis
                        </a>
                        <a class="nav-link active" href="categories.php">
                            <i class="bi bi-folder me-2"></i>Categories
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 px-md-4">
                <div class="d-flex justify-content-between pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Gestió de Categories</h1>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#novaCategoriaModal">
                        <i class="bi bi-plus-circle"></i> Nova Categoria
                    </button>
                </div>

                <!-- Taula de Categories -->
                <div class="table-responsive">
                    <table class="table table-striped admin-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Descripció</th>
                                <th>Elements</th>
                                <th>Estat</th>
                                <th>Accions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Reciclatge</td>
                                <td>Tot sobre reciclatge i gestió de residus</td>
                                <td>15</td>
                                <td><span class="badge bg-success">Activa</span></td>
                                <td>
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editarCategoriaModal">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Nova Categoria -->
    <div class="modal fade admin-modal" id="novaCategoriaModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nova Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descripció</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Color (opcional)</label>
                            <input type="color" class="form-control form-control-color" value="#563d7c">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Icona (opcional)</label>
                            <select class="form-select">
                                <option value="">Selecciona una icona</option>
                                <option value="bi-recycle">♻️ Reciclatge</option>
                                <option value="bi-droplet">💧 Aigua</option>
                                <option value="bi-lightning">⚡ Energia</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
                    <button type="button" class="btn btn-primary">Crear Categoria</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar Categoria -->
    <div class="modal fade admin-modal" id="editarCategoriaModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" value="Reciclatge" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descripció</label>
                            <textarea class="form-control" rows="3">Tot sobre reciclatge i gestió de residus</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Color</label>
                            <input type="color" class="form-control form-control-color" value="#28a745">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Icona</label>
                            <select class="form-select">
                                <option value="">Selecciona una icona</option>
                                <option value="bi-recycle" selected>♻️ Reciclatge</option>
                                <option value="bi-droplet">💧 Aigua</option>
                                <option value="bi-lightning">⚡ Energia</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Estat</label>
                            <select class="form-select">
                                <option value="active" selected>Activa</option>
                                <option value="inactive">Inactiva</option>
                            </select>
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