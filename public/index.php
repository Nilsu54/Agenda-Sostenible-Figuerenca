<?php
// Front Controller: Punto de entrada principal que gestiona las solicitudes y respuestas.

// Incluye archivos de configuración, clases necesarias y middleware para el proyecto.
include "../src/config.php";                      // Archivo de configuración general
include "../src/Emeset/Container.php";            // Contenedor de dependencias
include "../src/Emeset/Request.php";              // Clase para manejar las solicitudes HTTP
include "../src/Emeset/Response.php";             // Clase para gestionar las respuestas HTTP
include "../src/middleware/auth.php";             // Middleware de autenticación básica
include "../src/models/UserPDO.php";              // Modelo de usuario con PDO
include "../src/models/Db.php";                   // Clase de conexión a la base de datos
include "../src/ProjectContainer.php";            // Contenedor específico del proyecto
include "../src/middleware/adminauth.php";        // Middleware de autenticación de administrador

// Instancia los objetos de solicitud, respuesta, contenedor de dependencias y modelo de usuario.
$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new ProjectContainer($config);
$sql = new Db($config);
$users = new UserPDO($sql->get());

// Inicializa la variable de ruta de solicitud (`$r`), verificando si está definida en la solicitud.
$r = '';
if (isset($_REQUEST["r"])) {
    $r = $_REQUEST["r"];
}

// Enrutamiento de la aplicación: verifica la ruta solicitada y ejecuta el controlador correspondiente.
if ($r == "") {
    // Ruta principal (página de inicio).
    include "../src/controllers/indexController.php";
    $response = indexController($request, $response, $container);

} else if ($r == "registerUser") {
    // Ruta para el registro de usuarios.
    include "../src/controllers/registerController.php";
    $response = registerController($request, $response, $container);

} else if ($r == "storeUser") {
    // Ruta para almacenar nuevos usuarios.
    include "../src/controllers/storeUserController.php";
    $response = storeUserController($request, $response, $container);

} elseif ($r == "login") {
    // Ruta para mostrar el formulario de inicio de sesión.
    include "../src/controllers/loginController.php";
    $response = loginController($request, $response, $container);

} else if ($r == "loginProcess") {
    // Ruta para procesar la autenticación de inicio de sesión.
    include "../src/controllers/loginAction.php";
    $response = loginAction($request, $response, $container);

} else if ($r == "dashboard") {
    // Ruta para el panel de administrador, protegido con autenticación de administrador.
    include "../src/controllers/dashboardController.php";
    $response = adminauth($request, $response, $container, "dashboardController");

} else if ($r == "adminUsers") {
    // Ruta para la administración de usuarios, protegida con autenticación de administrador.
    include "../src/controllers/adminUsersController.php";
    $response = adminauth($request, $response, $container, "adminUsersController");

} else if ($r == "logout") {
    // Ruta para cerrar sesión.
    include "../src/controllers/logoutController.php";
    $response = logoutController($request, $response, $container);
}
else if($r=="profile"){
    include "../src/controllers/profileController.php";
    $response=auth($request,$response,$container,"profileController");
}
else if($r=="updateProfile"){
    include "../src/controllers/updateProfileController.php";
    $response=auth($request,$response,$container,"updateProfileController");
}
else if($r=="tips"){
    include "../src/controllers/tipsController.php";
    $response=tipsController($request,$response,$container);
}
$response ->response();