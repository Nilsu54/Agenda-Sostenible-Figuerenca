<?php

function deleteEventController($request,$response,$container){
    $events = $container->Events();
    $id= $request->get(INPUT_POST,"id");
    $events->delete($id);
}