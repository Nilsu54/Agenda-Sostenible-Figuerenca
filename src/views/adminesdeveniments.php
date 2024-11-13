<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esdeveniments - Administració ASF</title>
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
                        <a class="nav-link" href="index.php?r=dashboard">
                            <i class="bi bi-speedometer2 me-2"></i>Dashboard
                        </a>
                        <a class="nav-link active" href="">
                            <i class="bi bi-calendar-event me-2"></i>Esdeveniments
                        </a>
                        <a class="nav-link" href="index.php?r=admincoments">
                            <i class="bi bi-chat-dots me-2"></i>Comentaris
                        </a>
                        <a class="nav-link" href="index.php?r=adminusers">
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

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 px-md-4">
                <h1 class="h2">Esdeveniments</h1>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nouEsdevenimentModal">Nou Esdeveniment</button>
                <div class="table-responsive mt-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Títol</th>
                                <th>Data</th>
                                <th>Categoria</th>
                                <th>Estat</th>
                                <th>Accions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($events as $event) { ?>
                                <?php
                                    $type="";
                                    // <option>Selecciona una categoria</option>
                                    // <option value="interior">Interior</option>
                                    // <option value="outside">Aire lliure</option>
                                    // <option value="talk">Xerrada</option>
                                    // <option value="days">Jornada</option>
                                    switch($event["event_type"]){
                                        case "interior": $type="Interior";
                                        break;
                                        case "outside": $type="Aire lliure";
                                        break;
                                        case "talk": $type="Xerrada";
                                        break;
                                        case "days": $type="Jornada";
                                    }
                                ?>
                            <tr id="event"<?=$event["id"]?>>
                                <td id="eventIDAdmin"><?=$event["id"]?></td> 
                                <td id="eventName"><?=$event["title"]?></td> 
                                <td><?=$event["starting_date"]?></td> 
                                <td><?=$type?></td>
                                <td><span class="badge bg-success">Actiu</span></td>
                                <td>
                                    <button data-bs-toggle="modal" data-bs-target="#editarEsdeventimentModal" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-danger" id="esborraEvent"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Nou Esdeveniment Modal -->
    <div class="modal fade" id="nouEsdevenimentModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></i>Nou Esdeveniment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="nouEsdevenimentForm" enctype="multipart/form-data">
                    <div class="mb-3">
                            <label class="form-label">Títol</label>
                            <input type="text" id="eventTitle" name="eventTitle" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Data</label>
                            <input type="date" id="eventDate" name="eventDate" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Hora</label>
                            <input type="time" id="eventHour" name="eventHour" class="form-control" requiered>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Duració (en hores)</label>
                            <input type="number" id="eventDuration" name="eventDuration" class="form-control" step="0.5" min="0.5" required placeholder="Exemple: 1.5 per 1 hora i 30 minuts">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Imatges</label>
                            <input type="file" id="eventImages" name="eventImages" class="form-control" accept="image/*" multiple requiered>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Coordenades</label>
                            <input type="number" id="eventLat" name="eventLat" class="form-control" requiered placeholder="Latitud"></br>
                            <input type="number" id="eventLong" name="eventLong" class="form-control" requiered>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descripció</label>
                            <textarea class="form-control" id ="eventDesc" name="evenDesc" rows="3" required></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Categoria</label>
                            <select class="form-select" id="eventType" name="eventType" required>
                                <option value="interior">Interior</option>
                                <option value="outside">Aire lliure</option>
                                <option value="talk">Xerrada</option>
                                <option value="days">Jornada</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
                    <input type="submit" id ="saveEvent"class="btn btn-primary" data-bs-dismiss="modal">
                </div>
            </div>
        </div>
    </div>
     <!-- Editar Esdeveniment Modal -->
     <div class="modal fade" id="editarEsdeventimentModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nou Esdeveniment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editarEsdevenimentForm" >
                    <div class="mb-3">
                            <label class="form-label">Títol</label>
                            <input type="text" id="eventTitle" name="eventTitle" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Data</label>
                            <input type="date" id="eventDate" name="eventDate" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Hora</label>
                            <input type="time" id="eventHour" name="eventHour" class="form-control" requiered>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Duració (en hores)</label>
                            <input type="number" id="eventDuration" name="eventDuration" class="form-control" step="0.5" min="0.5" required placeholder="Exemple: 1.5 per 1 hora i 30 minuts">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Imatges</label>
                            <input type="file" id="eventImages" name="eventImages" class="form-control" accept="image/*" multiple requiered>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Coordenades</label>
                            <input type="number" id="eventLat" name="eventLat" class="form-control" requiered placeholder="Latitud"></br>
                            <input type="number" id="eventLong" name="eventLong" class="form-control" requiered>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descripció</label>
                            <textarea class="form-control" id ="eventDesc" name="evenDesc" rows="3" required></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Categoria</label>
                            <select class="form-select" id="eventType" name="eventType" required>
                                <option>Selecciona una categoria</option>
                                <option value="interior">Interior</option>
                                <option value="outside">Aire lliure</option>
                                <option value="talk">Xerrada</option>
                                <option value="days">Jornada</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
                    <input type="submit" id ="saveEvent"class="btn btn-primary" data-bs-dismiss="modal">
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