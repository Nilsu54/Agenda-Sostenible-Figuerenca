<?php

// Function that handles the user authentication process.
function loginAction($request, $response, $container) {
    
    // Get the user model from the dependency container.
    $users = $container->users();
    
    // Get the login form input data.
    $username = $request->get(INPUT_POST, "username");
    $password = $request->get(INPUT_POST, "password");

    // Retrieve user data from the database using the username.
    $currentUser = $users->getUser($username);

    // Check if the provided password matches the stored password in the database.
    $passwordequal = password_verify($password, $currentUser["password"]);

    // If the user is an admin, set necessary sessions and redirect to the dashboard.
    if ($currentUser["role"] == "admin") {
        $response->setSession("user", $currentUser);
        $response->setSession("isLogged", true);
        $response->setSession("isAdmin", true);
        $response->redirect("location:index.php");
    
    // If the user is valid and the password is correct, set sessions and redirect to the homepage.
    } else if ($currentUser && $passwordequal) {
        $response->setSession("user", $currentUser);
        $response->setSession("isLogged", true);
        $response->redirect("location:index.php");
    
    // If authentication fails, redirect back to the login form with a GET parameter indicating an error.
    } else {
        /**
         * If the session is not successfully started, redirect to login and display an error message.
         */
        $response->redirect("location:index.php?r=login&logged=1");
    }

    // Return the final response.
    return $response;
}
