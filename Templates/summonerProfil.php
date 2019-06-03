<?php
$apiCalls = new apiCalls(); 
$summonerName = "JJonah";
$region = "EUW1";
$summonderData = $apiCalls->getSummonderDataByName($summonerName, $region);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $summonderData['id'];
        ?>
    </body>
</html>
