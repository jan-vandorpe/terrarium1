<?php

require_once("data/soortDAO.php");

class soortService {
    
    public static function getSoort($soortid) {
        $soort = SoortDAO::getSoort($soortid);
        return $soort;
    }
    public static function getAllSoorten() {
        $arrSoorten = SoortDAO::getAllSoorten();
        return $arrSoorten;
    }
  
}
?>