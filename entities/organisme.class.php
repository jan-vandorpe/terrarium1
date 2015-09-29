<?php

class Organisme
  {

  public $id;
  public $soort;
  public $kracht;
  public $kolom;
  public $rij;

  public function __construct($id, $soort, $kracht, $kolom, $rij)
  {
    $this->setId($id);
    $this->setSoort($soort);
    $this->setKracht($kracht);
    $this->setKolom($kolom);
    $this->setRij($rij);
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setSoort($soort)
  {
    $this->soort = $soort;
    return $this;
  }

  public function getSoort()
  {
    return $this->soort;
  }

  public function setKracht($kracht)
  {
    $this->kracht = $kracht;
    return $this;
  }

  public function getKracht()
  {
    return $this->kracht;
  }

  public function setKolom($kolom)
  {
    $this->kolom = $kolom;
    return $this;
  }

  public function getKolom()
  {
    return $this->kolom;
  }

  public function setRij($rij)
  {
    $this->rij = $rij;
    return $this;
  }

  public function getRij()
  {
    return $this->rij;
  }

  }

?>