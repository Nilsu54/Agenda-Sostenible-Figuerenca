<?php
function addAnunciController($request,$response,$container){
    $anuncios = $container->News();
    
    $anuncios->createAnunci($request->get(INPUT_POST, "titol"), $request->get(INPUT_POST, "descripcio"), $request->get(INPUT_POST, "categoria"));
    return $response;
}
?>
