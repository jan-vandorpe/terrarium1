<?php
require_once("entities/organisme.class.php");
require_once("dbconfig.class.php");

class OrganismeDAO
  {
  public static function createOrganisme($soort,$kracht,$kolom,$rij)
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
    $sql = "select * from organismen";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $arrOrganismen = array();
    foreach ($result as $r)
      {
      $organisme = new Organisme($r['id'],$r['soort'],$r['kracht'],$r['kolom'],$r['rij']);
      array_push($arrOrganismen,$organisme);
      }
    $dbh = null;
    return $arrOrganismen;
  }
  public static function getOrganismeFromPosition($kolom,$rij)
  {
    $sql = "select * from organismen where kolom=".$kolom." and rij=".$rij;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $organisme = null;
    if(!empty($result))
    {
    foreach ($result as $r)
      {
      $organisme = new Organisme($r['id'],$r['soort'],$r['kracht'],$r['kolom'],$r['rij']);
      }
    }
    $dbh = null;
    return $organisme;
  }
  }
?>