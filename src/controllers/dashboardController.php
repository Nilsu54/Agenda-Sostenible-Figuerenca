<?php
// Controlador para gestionar el panel de administración.
function dashboardController($request, $response, $container) {
    
    // Código comentado que podría usarse para obtener y listar usuarios.
    // $users = $container->users();
    // $users->list();
    // $response->set("users", $users);

    // Establece la plantilla de vista que se utilizará para el panel de administración.
    $response->setTemplate("adminpanel.php");
    
    // Devuelve el objeto de respuesta, que ahora incluye la plantilla del panel de administración.
    return $response;
}
