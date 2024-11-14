<?php
/***
 *  formData.append("EeventTitle", $("#EeventTitle").val());
        formData.append("EeventDate", $("#EeventDate").val());
        formData.append("EeventHour", $("#EeventHour").val());
        formData.append("EeventDuration", $("#EeventDuration").val());
        formData.append("EeventDesc", $("#EeventDesc").val());
 * 
 * 
 * 
 * 
 */
function editEventController($request,$response,$container){
    $events = $container->Events();
    $title= $request->get(INPUT_POST,'EeventTitle');
    $starting_date= $request->get(INPUT_POST,'EeventDate');
    $starting_hour= $request->get(INPUT_POST,'EeventHour');
    $description= $request->get(INPUT_POST,'EeventDesc');
    $duration=$request->get(INPUT_POST,'EeventDuration');
    $id=$request->get(INPUT_POST,"id");
    $events->edit($id,$title,$starting_date,$starting_hour,$duration,$description);

}
