<?php
function adminauth($request,$response,$container,$next){
    
    if($request->has("SESSION", "user")&& $_SESSION["user"]["role"]=="admin"){
        $user = $request->get("SESSION", "user", FILTER_REQUIRE_ARRAY);
        $response->set("user", $user);
        $response = $next($request, $response, $container);
    } else {
        $response->redirect("location: index.php");
    }
   return $response;
}