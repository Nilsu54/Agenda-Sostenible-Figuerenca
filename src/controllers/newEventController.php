<?php
/****
 * const formData = {
            eventTitle: $("#eventTitle").val(),
            eventDate: $("#eventDate").val(),
            eventHour:$("#eventHour").val(),
            eventDuration: $("#eventDuration").val(),
            eventLat: $("#eventLat").val(),
            eventLong:$("#eventLong").val(),
            eventDesc: $("#eventDesc").val(),
            eventType: $("#eventType").val(),
        }
 * 
 * 
 * 
 * 
 */
function newEventController($request,$response,$container){

    $events = $container->Events();
    print_r($_POST);
    $title= $request->get(INPUT_POST,'eventTitle');
    $date= $request->get(INPUT_POST,'eventDate');
    $starting_hour= $request->get(INPUT_POST,'eventHour');
    $lat= $request->get(INPUT_POST,'eventLat');
    $long= $request->get(INPUT_POST,'eventLong');
    $description= $request->get(INPUT_POST,'eventDesc');
    $type = $request->get(INPUT_POST,'eventType');
    $duration=$request->get(INPUT_POST,'eventDuration');
    $events->add($title,$lat);
    $response->redirect("location:index.php?r=adminevents");
    return $response;
}