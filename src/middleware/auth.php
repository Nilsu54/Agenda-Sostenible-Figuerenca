<?php

// Middleware para verificar que el usuario esté autenticado antes de acceder a la siguiente acción.
function auth($request, $response, $container, $next) {
    
    // Verifica si existe una sesión activa con un usuario autenticado.
    if ($request->has("SESSION", "user")) {
        
        // Si el usuario está autenticado, obtiene los datos del usuario desde la sesión.
        $user = $request->get("SESSION", "user", FILTER_REQUIRE_ARRAY);
        
        // Establece los datos del usuario en la respuesta para que puedan ser utilizados en el siguiente controlador.
        $response->set("user", $user);
        
        // Llama al siguiente controlador (acción) en la cadena de ejecución del middleware.
        $response = $next($request, $response, $container);
    } else {
        
        // Si el usuario no está autenticado, redirige a la página de login.
        $response->redirect("location: index.php?r=login");
    }
    
    // Devuelve la respuesta final después de pasar por el middleware.
    return $response;
}
