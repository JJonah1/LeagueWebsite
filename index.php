<?php
include('Classes/controller.php');  
include('Dataprovider/apiCalls.php');  
include('Classes/view.php');  
  
// $_GET und $_POST zusammenfasen  
$request = array_merge($_GET, $_POST);  
// Controller erstellen  
$controller = new Controller($request);  
// Inhalt der Webanwendung ausgeben.  
echo $controller->display(); 