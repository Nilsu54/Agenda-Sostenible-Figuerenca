<?php
// Front Controller: Main entry point managing requests and responses.

// Include configuration files, necessary classes, and middleware for the project.
include "../src/config.php";                      // General configuration file
include "../src/Emeset/Container.php";            // Dependency container
include "../src/Emeset/Request.php";              // Class to handle HTTP requests
include "../src/Emeset/Response.php";             // Class to handle HTTP responses
include "../src/middleware/auth.php";             // Basic authentication middleware
include "../src/models/UserPDO.php";              // User model using PDO
include "../src/models/Db.php";                   // Database connection class
include "../src/ProjectContainer.php";            // Project-specific container
include "../src/middleware/adminauth.php";        // Administrator authentication middleware

include "../src/models/Events.php";
include "../src/models/Images.php";

// Instantiate request, response, dependency container, and user model objects.
$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new ProjectContainer($config);
$sql = new Db($config);
$users = new UserPDO($sql->get());
$events = new Events($sql->get());
$images = new Images($sql->get());

// Initialize the request route (`$r`) variable, checking if it is set in the request.
$r = '';
if (isset($_REQUEST["r"])) {
    $r = $_REQUEST["r"];
}

// Application routing: checks the requested route and executes the corresponding controller.
if ($r == "") {
    // Main route (home page).
    include "../src/controllers/indexController.php";
    $response = indexController($request, $response, $container);

} else if ($r == "registerUser") {
    // Route for user registration.
    include "../src/controllers/registerController.php";
    $response = registerController($request, $response, $container);

} else if ($r == "storeUser") {
    // Route for storing new users.
    include "../src/controllers/storeUserController.php";
    $response = storeUserController($request, $response, $container);

} elseif ($r == "login") {
    // Route to display the login form.
    include "../src/controllers/loginController.php";
    $response = loginController($request, $response, $container);

} else if ($r == "loginProcess") {
    // Route to process login authentication.
    include "../src/controllers/loginAction.php";
    $response = loginAction($request, $response, $container);

} else if ($r == "dashboard") {
    // Route for the admin dashboard, protected with admin authentication.
    include "../src/controllers/dashboardController.php";
    $response = adminauth($request, $response, $container, "dashboardController");

} else if ($r == "adminusers") {
    // Route for user administration, protected with admin authentication.
    include "../src/controllers/adminUsersController.php";
    $response = adminauth($request, $response, $container, "adminUsersController");

} else if ($r == "logout") {
    // Route to log out
    include "../src/controllers/logoutController.php";
    $response = logoutController($request, $response, $container);
}
else if($r=="profile"){
    // Route for viewing the profile, requiring authentication.
    include "../src/controllers/profileController.php";
    $response=auth($request,$response,$container,"profileController");
}
else if($r=="updateProfile"){
    // Route for updating the profile, requiring authentication.
    include "../src/controllers/updateProfileController.php";
    $response=auth($request,$response,$container,"updateProfileController");
}
else if($r=="tips"){
    // Route for viewing tips content.
    include "../src/controllers/tipsController.php";
    $response=tipsController($request,$response,$container);
}
else if($r=="news"){
    // Route for viewing news content.
    include "../src/controllers/newsController.php";
    $response=newsController($request,$response,$container);
}
else if($r=="events"){
    // Route for viewing events.
    include "../src/controllers/eventsController.php";
    $response=eventsController($request,$response,$container);
}
else if($r=="adminevents"){
    // Route for admin event management.
    include "../src/controllers/admineventsController.php";
    $response=admineventsController($request,$response,$container);
}
else if($r=="adminnews"){
    // Route for admin news management.
    include "../src/controllers/adminnewsController.php";
    $response=adminnewsController($request,$response,$container);
}
else if($r=="admintips"){
    // Route for admin tips management.
    include "../src/controllers/admintipsController.php";
    $response=admintipsController($request,$response,$container);
}
else if($r=="admincategory"){
    // Route for admin category management.
    include "../src/controllers/admincategoryController.php";
    $response=admincategoryController($request,$response,$container);
}
else if($r=="admincoments"){
    // Route for admin comments management.
    include "../src/controllers/admincomentsController.php";
    $response=admincomentsController($request,$response,$container);
}
else if($r=="contrasenya"){
    // Route for password-related actions.
    include "../src/controllers/contrasenyaController.php";
    $response=contrasenyaController($request,$response,$container);
}

else if($r=="deleteEvent"){
    include "../src/controllers/deleteEventController.php";
    $response=adminauth($request,$response,$container,"deleteEventController");
}
else if($r=="addEvent"){
    include "../src/controllers/newEventController.php";
    $response=adminauth($request, $response, $container, "newEventController");
}   
else if($r=="editEvent"){
    include "../src/controllers/editEventController.php";
    $response=adminauth($request,$response,$container,"editEventController");
}
else if($r=="showEvent"){
    include "../src/controllers/showEventController.php";
    $response=showEventController($request,$response,$container);
}

// Send the final response to the client.
$response->response();
