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
        <input type="text" style="width: 50px" id="summonerName">
        <button id="searchSummonerName" onclick="LoadSummonerTemplate()">Search</button>
    </body>
</html>
