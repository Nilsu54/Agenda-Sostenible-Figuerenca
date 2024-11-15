<?php

function addCommentController($request,$response,$container){
    $comments = $container->Comments();
    $content=$request->get(INPUT_POST,"comment");
    $userId=$request->get(INPUT_POST,"userIdC");
    $eventId=$request->get(INPUT_POST,"eventIdC");
    $comments->add($content,$eventId,$userId);
}