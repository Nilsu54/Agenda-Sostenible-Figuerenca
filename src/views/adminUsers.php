<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuaris - Administració ASF</title>
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
                    <img src="<?=$_SESSION["user"]["img"]?>" alt="foto de perfil" class="profile-pic">
                </a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

    <!-- Main Content -->
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
                        <a class="nav-link active" href="">
                            <i class="bi bi-people me-2"></i>Usuaris
                        </a>
                        <a class="nav-link" href="index.php?r=admintips">
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

            <div class="col-md-9 col-lg-10 px-md-4">
                <div class="d-flex justify-content-between pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Gestió d'Usuaris</h1>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nouUsuariModal">
                        <i class="bi bi-person-plus"></i> Nou Usuari
                    </button>
                </div>

                <!-- Filtres -->
                <div class="row mb-3">
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Tots els rols</option>
                            <option value="admin">Administrador</option>
                            <option value="user">Usuari</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Tots els estats</option>
                            <option value="active">Actiu</option>
                            <option value="inactive">Inactiu</option>
                            <option value="blocked">Bloquejat</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cercar usuaris...">
                            <button class="btn btn-outline-secondary">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Taula d'Usuaris -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Data de Creació</th>
                               
                                <th>Accions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user){ ?> 
                            <tr>
                                <td><?=$user["id"] ?></td>
                                <td><?=$user["name"]?></td>
                                <td><?=$user["email"]?></td>
                                <td><span class="badge bg-success"><?=$user["role"]?></span></td>
                                <td><?=$user["creation_date"]?></td>
                               
                                <td>
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editarUsuariModal">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning">
                                        <i class="bi bi-lock"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Nou Usuari -->
    <div class="modal fade admin-modal" id="nouUsuariModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nou Usuari</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="newUserForm" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Nom</label>
                            <input type="text" id="adminname" name="adminname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cognom</label>
                            <input type="text" id="adminsurname" name="adminsurname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nom d'usuari</label>
                            <input type="text" id="adminusername" name="adminusername" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" id="adminemail" name="adminemail" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contrasenya</label>
                            <input type="password" id="adminpassword" name="adminpassword" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rol</label>
                            <select id="adminrol" name="adminrol" class="form-select" required>
                                <option value="user">Usuari</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
                       
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
                    <button type="button" id="saveUser" class="btn btn-primary">Crear Usuari</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar Usuari -->
    <div class="modal fade admin-modal" id="editarUsuariModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Usuari</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" value="Joan Garcia" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" value="joan@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nova Contrasenya (opcional)</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rol</label>
                            <select class="form-select" required>
                                <option value="user">Usuari</option>
                                <option value="admin" selected>Administrador</option>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/perfil.js"></script>
    
</body>
</html> 