<?php

class Organisme
  {

  public $id;
  public $soort;
  public $kracht;

  public function __construct($id, $soort, $kracht)
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
    public function setKracht($kracht)
  {
    $this->kracht = $kracht;
    return $this;
  }

  public function getKracht()
  {
    return $this->kracht;
  }
  }

?>