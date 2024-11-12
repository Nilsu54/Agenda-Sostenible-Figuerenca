<?php

// Middleware para verificar que el usuario tenga rol de administrador antes de acceder a la siguiente acción.
function adminauth($request, $response, $container, $next) {
    
    // Verifica si existe una sesión de usuario y si el rol del usuario es "admin".
    if ($request->has("SESSION", "user") && $_SESSION["user"]["role"] == "admin") {
        
        // Si el usuario es un administrador, obtiene los datos del usuario desde la sesión.
        $user = $request->get("SESSION", "user", FILTER_REQUIRE_ARRAY);
        
        // Establece los datos del usuario en la respuesta para poder utilizarlos en el siguiente controlador.
        $response->set("user", $user);
        
        // Llama al siguiente controlador (acción) en la cadena de ejecución del middleware.
        $response = $next($request, $response, $container);
    } else {
        
        // Si el usuario no es un administrador, redirige a la página principal (index.php).
        $response->redirect("location: index.php");
    }
    
    // Devuelve la respuesta final después de pasar por el middleware.
    return $response;
}
