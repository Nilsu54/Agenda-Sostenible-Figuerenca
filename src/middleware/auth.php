<?php

// Middleware to verify that the user is authenticated before accessing the next action.
function auth($request, $response, $container, $next) {
    
    // Check if there is an active session with an authenticated user.
    if ($request->has("SESSION", "user")) {
        
        // If the user is authenticated, get user data from the session.
        $user = $request->get("SESSION", "user", FILTER_REQUIRE_ARRAY);
        
        // Set user data in the response so it can be used in the next controller.
        $response->set("user", $user);
        
        // Call the next controller (action) in the middleware execution chain.
        $response = $next($request, $response, $container);
    } else {
        
        // If the user is not authenticated, redirect to the login page.
        $response->redirect("location: index.php?r=login");
    }
    
    // Return the final response after passing through the middleware.
    return $response;
}
