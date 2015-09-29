<?php
require_once("entities/organisme.class.php");
require_once("dbconfig.class.php");

class OrganismeDAO
  {
  public static function createOrganisme($soort,$kracht,$rij,$kolom)
  {
    $sql = "insert into organismen (soort,kracht,kolom,rij) values ('" . $soort . "','" . $kracht . "','" . $kolom . "','" . $rij . "')";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $id = $dbh->lastInsertId();
    $dbh = null;
    return $id;
  }
  public static function getAllOrganismen()
  {
    $arrOrganismen = array();
    $sql = "select * from organismen";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    foreach ($result as $rij)
      {
      $organisme = new Organisme($rij['id'],$rij['soort'],$rij['kracht'],$rij['kolom'],$rij['rij']);
      array_push($arrOrganismen,$organisme);
      }
    $dbh = null;
    return $arrOrganismen;
  }
  }
?>