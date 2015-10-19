<?php

require_once("entities/organisme.class.php");
require_once("dbconfig.class.php");

class OrganismeDAO
  {

  public static function createOrganisme($soort, $kracht, $kolom, $rij, $gameid)
  {
    $sql = "insert into organismen (soort,kracht,kolom,rij,gameid) values ('" . $soort . "','" . $kracht . "','" . $kolom . "','" . $rij . "','" . $gameid . "')";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $id = $dbh->lastInsertId();
    $dbh = null;
    return $id;
  }

  public static function getAllOrganismen($gameid)
  {
    $sql = "select * from organismen where gameid=" . $gameid;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $arrOrganismen = array();
    foreach ($result as $r)
      {
      $organisme = new Organisme($r['id'], $r['soort'], $r['kracht'], $r['kolom'], $r['rij'], $r['gameid']);
      array_push($arrOrganismen, $organisme);
      }
    $dbh = null;
    return $arrOrganismen;
  }

  public static function getOrganismeFromPosition($kolom, $rij, $gameid)
  {
    $sql = "select * from organismen where kolom=" . $kolom . " and rij=" . $rij . " and gameid=" . $gameid;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $organisme = null;
    if (!empty($result))
    {
      foreach ($result as $r)
        {
        $organisme = new Organisme($r['id'], $r['soort'], $r['kracht'], $r['kolom'], $r['rij'], $r['gameid']);
        }
    }
    $dbh = null;
    return $organisme;
  }

  public static function getSoort($id)
  {
    $sql = "select soort from soort where id=" . $id;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $soort = null;
    if (!empty($result))
    {
      foreach ($result as $r)
        {
        $soort = $r['soort'];
        }
    }
    $dbh = null;
    return $soort;
  }

  public static function getImage($id)
  {
    $sql = "select image from soort where id=" . $id;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $image = null;
    if (!empty($result))
    {
      foreach ($result as $r)
        {
        $image = $r['image'];
        }
    }
    $dbh = null;
    return $image;
  }

  public static function updatePosition($organisme)
  {
    $sql = "update organismen set kracht=" . $organisme->kracht . "kolom=" . $kolom . ", rij=" . $rij . " where id=" . $organisme->id;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $dbh = null;
  }

  public static function deleteOrganisme($organisme)
  {
    $sql = "delete from organismen where id=" . $organisme->id;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $dbh->exec($sql);
    $dbh = null;
  }

  public static function updateOrganisme($organisme)
  {
    $sql = "update organismen set kracht=" . $organisme->kracht . ", kolom=" . $organisme->kolom . ", rij=" . $organisme->rij . " where id=" . $organisme->id;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $dbh = null;
  }

  }

?>