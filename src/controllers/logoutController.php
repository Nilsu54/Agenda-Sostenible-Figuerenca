<?php 

// Controlador para gestionar el cierre de sesión del usuario.
function logoutController($request, $response, $container) {
    
    // Verifica si existe una sesión activa de usuario.
    if (isset($_SESSION["user"])) {
        
        // Si existe, elimina la sesión del usuario.
        $response->unsetSession("user");
        
        // Redirige al usuario a la página de inicio después de cerrar sesión.
        $response->redirect("location:index.php");
    }
    
    // Si no hay sesión activa, redirige igualmente al inicio.
    $response->redirect("location:index.php");
    
    // Devuelve la respuesta final.
    return $response;
}
