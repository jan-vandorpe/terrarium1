<?php
<<<<<<< HEAD

=======
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
require_once("entities/organisme.class.php");
require_once("dbconfig.class.php");

class OrganismeDAO
  {
<<<<<<< HEAD

  public static function createOrganisme($soort, $kracht, $kolom, $rij, $gameid)
=======
  public static function createOrganisme($soort,$kracht,$kolom,$rij,$gameid)
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
  {
    $sql = "insert into organismen (soort,kracht,kolom,rij,gameid) values ('" . $soort . "','" . $kracht . "','" . $kolom . "','" . $rij . "','" . $gameid . "')";
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $id = $dbh->lastInsertId();
    $dbh = null;
    return $id;
  }
<<<<<<< HEAD

  public static function getAllOrganismen($gameid)
  {
    $sql = "select * from organismen where gameid=" . $gameid;
=======
  public static function getAllOrganismen($gameid)
  {
    $sql = "select * from organismen where gameid=".$gameid;
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $arrOrganismen = array();
    foreach ($result as $r)
      {
<<<<<<< HEAD
      $organisme = new Organisme($r['id'], $r['soort'], $r['kracht'], $r['kolom'], $r['rij'], $r['gameid']);
      array_push($arrOrganismen, $organisme);
=======
      $organisme = new Organisme($r['id'],$r['soort'],$r['kracht'],$r['kolom'],$r['rij'],$r['gameid']);
      array_push($arrOrganismen,$organisme);
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
      }
    $dbh = null;
    return $arrOrganismen;
  }
<<<<<<< HEAD

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
=======
  public static function getOrganismeFromPosition($kolom,$rij,$gameid)
  {
    $sql = "select * from organismen where kolom=".$kolom." and rij=".$rij." and gameid=".$gameid;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $organisme = null;
    if(!empty($result))
    {
    foreach ($result as $r)
      {
      $organisme = new Organisme($r['id'],$r['soort'],$r['kracht'],$r['kolom'],$r['rij'],$r['gameid']);
      }
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
    }
    $dbh = null;
    return $organisme;
  }
<<<<<<< HEAD

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
=======
  
  public static function getSoort($id)
  {
    $sql = "select soort from soort where id=".$id;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $soort = null;
    if(!empty($result))
    {
    foreach ($result as $r)
      {
      $soort = $r['soort'];
      }
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
    }
    $dbh = null;
    return $soort;
  }

<<<<<<< HEAD
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
=======
   public static function getImage($id)
  {
    $sql = "select image from soort where id=".$id;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $result = $dbh->query($sql);
    $image = null;
    if(!empty($result))
    {
    foreach ($result as $r)
      {
      $image = $r['image'];
      }
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
    }
    $dbh = null;
    return $image;
  }
<<<<<<< HEAD

  public static function updatePosition($organisme)
  {
    $sql = "update organismen set kracht=" . $organisme->kracht . "kolom=" . $kolom . ", rij=" . $rij . " where id=" . $organisme->id;
=======
    public static function updatePosition($organisme)
  {
    $sql = "update organismen set kracht=". $organisme->kracht ."kolom=".$kolom.", rij=".$rij." where id=".$organisme->id;
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $dbh = null;
  }
<<<<<<< HEAD

  public static function deleteOrganisme($organisme)
  {
    $sql = "delete from organismen where id=" . $organisme->id;
=======
  
  public static function deleteOrganisme($organisme)
  {
    $sql = "delete from organismen where id=".$organisme->id;
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $dbh->exec($sql);
    $dbh = null;
  }

<<<<<<< HEAD
  public static function updateOrganisme($organisme)
  {
    $sql = "update organismen set kracht=" . $organisme->kracht . ", kolom=" . $organisme->kolom . ", rij=" . $organisme->rij . " where id=" . $organisme->id;
    $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $dbh = null;
  }

=======
>>>>>>> ccfceec09458a121cf332cb768b11970da8236d0
  }

?>