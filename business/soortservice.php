<?php

class soortService 
  {
  public static function getSoort($soortid)
  {
    $soort = SoortDAO::getSoort($soortid);
    return $soort;
  }
  }