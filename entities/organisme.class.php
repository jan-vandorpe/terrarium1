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
    public function setKolom($kolom)
  {
    $this->kracht = $kolom;
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