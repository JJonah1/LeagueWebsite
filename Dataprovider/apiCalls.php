<?php

class apiCalls {
    
    public $apiKey = 'RGAPI-b4465b5a-9277-4b2b-bceb-a36b148e8847';
            
    public function getSummonderDataByName($summonerName, $region) {
        $apiUrl = 'https://'.$region.'.api.riotgames.com/lol/summoner/v4/summoners/by-name/'.$summonerName.'?api_key='.$this->apiKey;
        $dataJson = file_get_contents($apiUrl);
        $dataArray = json_decode($dataJson, true);
        return $dataArray;  
    }
    
    public function getSummonderRankBySummonerID($summonerID, $region) {
        $apiUrl = 'https://'.$region.'api.riotgames.com/lol/league/v4/entries/by-summoner/'.$summonerID.'?api_key='.$this->apiKey;
        $dataJson = file_get_contents($apiUrl);
        $dataArray = json_decode($dataJson, true);
        return $dataArray;  
    }
}