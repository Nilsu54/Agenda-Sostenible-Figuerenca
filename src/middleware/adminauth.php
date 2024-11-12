<?php

// Middleware to verify that the user has an admin role before accessing the next action.
function adminauth($request, $response, $container, $next) {
    
    // Check if there is a user session and if the user's role is "admin".
    if ($request->has("SESSION", "user") && $_SESSION["user"]["role"] == "admin") {
        
        // If the user is an admin, get user data from the session.
        $user = $request->get("SESSION", "user", FILTER_REQUIRE_ARRAY);
        
        // Set user data in the response to be available for the next controller.
        $response->set("user", $user);
        
        // Call the next controller (action) in the middleware execution chain.
        $response = $next($request, $response, $container);
    } else {
        
        // If the user is not an admin, redirect to the homepage (index.php).
        $response->redirect("location: index.php");
    }
    
    // Return the final response after passing through the middleware.
    return $response;
}
