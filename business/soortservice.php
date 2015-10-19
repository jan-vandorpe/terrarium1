<<<<<<< HEAD
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
=======
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
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
?>