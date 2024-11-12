<?php
// Controlador para gestionar la administración de usuarios.
function adminUsersController($request, $response, $container) {
    
    // Obtiene la instancia del modelo de usuarios desde el contenedor de dependencias.
    $userss = $container->users();
    
    // Llama al método `list` del modelo para obtener la lista de usuarios.
    $users = $userss->list();
    
    // Añade la lista de usuarios al objeto de respuesta para su uso en la vista.
    $response->set("users", $users);
    
    // Establece la plantilla de vista que se utilizará para mostrar los usuarios.
    $response->setTemplate("adminUsers.php");
    
    // Devuelve el objeto de respuesta, que ahora incluye los datos y la plantilla.
    return $response;
}
