<?php 

// Controller to handle user logout.
function logoutController($request, $response, $container) {
    
    // Check if a user session is active.
    if (isset($_SESSION["user"])) {
        
        // If it exists, delete the user session.
        $response->unsetSession("user");
        
        // Redirect the user to the homepage after logging out.
        $response->redirect("location:index.php");
    }
    
    // If no active session, still redirect to the homepage.
    $response->redirect("location:index.php");
    
    // Return the final response.
    return $response;
}
