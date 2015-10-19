<?php

class Organisme
  {

  public $id;
  public $soort;
  public $kracht;
  public $kolom;
  public $rij;
  public $gameid;

  public function __construct($id, $soort, $kracht, $kolom, $rij, $gameid)
  {
    $this->setId($id);
    $this->setSoort($soort);
    $this->setKracht($kracht);
    $this->setKolom($kolom);
    $this->setRij($rij);
    $this->setGameid($gameid);
  }

  public function setId($id)
  {
    $this->id = intval($id);
    return $this;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setSoort($soort)
  {
    $this->soort = intval($soort);
    return $this;
  }

  public function getSoort()
  {
    return $this->soort;
  }

  public function setKracht($kracht)
  {
    $this->kracht = intval($kracht);
    return $this;
  }

  public function getKracht()
  {
    return $this->kracht;
  }

  public function setKolom($kolom)
  {
    $this->kolom = intval($kolom);
    return $this;
  }

  public function getKolom()
  {
    return $this->kolom;
  }

  public function setRij($rij)
  {
    $this->rij = intval($rij);
    return $this;
  }

  public function getRij()
  {
    return $this->rij;
  }

  public function setGameid($gameid)
  {
    $this->gameid = intval($gameid);
    return $this;
  }

  public function getGameid()
  {
    return $this->gameid;
  }

  }

?>