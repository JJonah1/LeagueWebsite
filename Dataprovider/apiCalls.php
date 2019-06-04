<?php

class apiCalls {
    
    public $apiKey = 'RGAPI-497da90d-2acc-45be-8724-d15cf8f8f4ab';
            
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