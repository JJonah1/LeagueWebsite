<?php 
include 'Dataprovider\apiCalls.php';
$name = "JJonah";
$apiCalls = new apiCalls();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>League Website</title>
    </head>
    <body>
        <?php echo $apiCalls->getSummonderDataByName($name)['id'] ?>
    </body>
</html>