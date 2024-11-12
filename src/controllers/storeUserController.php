<?php

// Controller to store a new user in the database.
function storeUserController($request, $response, $container) {
    
    // Get the user model from the dependency container.
    $users = $container->Users();

    // Retrieve registration form data sent via POST.
    $name = $request->get(INPUT_POST, "name");
    $surname = $request->get(INPUT_POST, "surname");
    $username = $request->get(INPUT_POST, "username");
    $email = $request->get(INPUT_POST, "email");
    
    // Encrypt the password using the BCRYPT algorithm.
    $password = password_hash($request->get(INPUT_POST, "password"), PASSWORD_BCRYPT);

    // Variable for the image (not used here, but could be extended to support image uploads).
    $img = "";

    // For debugging: Print the value of the "username" variable (this should probably be removed in production).
    print_r("username");

    // Call the method to add a new user to the database with the received data.
    $users->add($username, $password, $email, $img, $name, $surname);

    // Redirect the user to the login page with an "ok" parameter to indicate successful registration.
    $response->redirect("location:index.php?r=login&ok=1");

    // Return the final response.
    return $response;
}
