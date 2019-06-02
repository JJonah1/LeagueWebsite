<?php

class apiCalls {
    
    public $apiKey = 'RGAPI-b4465b5a-9277-4b2b-bceb-a36b148e8847';
            
    public function getSummonderDataByName($summonerName) {
        $apiUrl = 'https://EUW1.api.riotgames.com/lol/summoner/v4/summoners/by-name/'.$summonerName.'?api_key='.$this->apiKey;
        $dataJson = file_get_contents($apiUrl);
        $dataArray = json_decode($dataJson, true);
        return $dataArray;  
    }
}



