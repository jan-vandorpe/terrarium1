<?php

require_once("dbconfig.class.php");
require_once("entities/soort.class.php");

class SoortDAO {
  public static function getSoort($soortid) {
    $sql = "select * from soort where id=".$soortid;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    foreach ($result as $r) {
      $soort = new Soort($r['id'], $r["soort"], $r["image"]);
    }
    $dbh = null;
    return $soort;
  }
  
  public static function getAllSoorten() {
    $sql = "select * from soort";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $arrSoorten = array();
    foreach ($result as $r) {
      $soort = new Soort($r['id'], $r["soort"], $r["image"]);
      array_push($arrSoorten, $soort);
    }
    $dbh = NULL;
    return $arrSoorten;
  }
}