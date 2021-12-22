<?php
use OpenApi\Annotations as OA;
class Locazione{
  private $nomeVia;
  private $numCivico;
  private $citofono;
  private $linkMaps;

  public function __construct($nomeVia, $numCivico, $citofono, $linkMaps)
  {
    $this->nomeVia = $nomeVia;
    $this->numCivico = $numCivico;
    $this->citofono = $citofono;
    $this->linkMaps = $linkMaps;
  }

  public function getNomeVia()
  {
    return $this->nomeVia;
  }

  public function getNumCivico()
  {
    return $this->numCivico;
  }

  public function getCitofono()
  {
    return $this->citofono;
  }
  
  public function getLinkMaps()
  {
    return $this->linkMaps;
  }

}
/**
 * @OA\Info(title="Annuncio class",version="0.1")
 */
class Annuncio{
  public $locatore;
  public $costoMensile;
  public $costoUtenze;
  public $caparra;
  public $speseAgenzia;
  public $locazione;
  public $ninquilini;
  public $tipoContratto;
  public $durataPerMinima;
  public $tipoPerMinima;
  public $metratura;
  public $classEnergetica;
  public $speseCond;
  public $garage;
  public $animali;
  public $mezzi;
  public $servizi;
  public $note;

  public function __construct($locatore, $costoMensile, $costoUtenze, $caparra, $speseAgenzia,
      $locazione, $ninquilini, $tipoContratto, $durataPerMinima, $tipoPerMinima, 
      $metratura, $classEnergetica, $speseCond, $garage, $animali, $mezzi, $servizi,
      $note)
  {
    $this->locatore = $locatore;
    $this->costoMensile = $costoMensile;
    $this->costoUtenze = $costoUtenze;
    $this->caparra = $caparra;
    $this->speseAgenzia = $speseAgenzia;
    $this->locazione = $locazione;
    $this->ninquilini = $ninquilini;
    $this->tipoContratto = $tipoContratto;
    $this->durataPerMinima = $durataPerMinima;
    $this->tipoPerMinima = $tipoPerMinima;
    $this->metratura = $metratura;
    $this->classEnergetica = $classEnergetica;
    $this->speseCond = $speseCond;
    $this->garage = $garage;
    $this->animali = $animali;
    $this->mezzi = $mezzi;
    $this->servizi = $servizi;
    $this->note = $note;
  }

}