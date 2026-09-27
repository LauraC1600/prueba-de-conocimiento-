<?php

require_once __DIR__ .'\\planta.php';

class Flor extends Planta {
    private string $colorPetalos;
    private int $cantidadPetalos;
    private string $colorPistilo;
    private string $variedad;
    private string $estacionFlorece;


    public function __construct(string $colorPetalos, int $cantidadPetalos, string $colorPistilo, string $variedad, string $estacionFlorece,string $nombre, int $altura, bool $tieneHojas, string $climaIdeal){

        parent::__construct( $nombre,  $altura,  $tieneHojas,  $climaIdeal);

        $this->colorPetalos = $colorPetalos;
        $this->cantidadPetalos = $cantidadPetalos;
        $this->colorPistilo = $colorPistilo;
        $this->variedad = $variedad;
        $this->estacionFlorece = $estacionFlorece;
    }


    public function getColorPetalos(){
        return $this->colorPetalos = $colorPetalos;
    }
    public function getCantidadPetalos(){
        return $this->cantidadPetalos = $cantidadPetalos;
    }
    public function getColorPistilo(){
        return $this->colorPistilo = $colorPistilo;
    }
    public function getVariedad(){
        return $this->variedad = $variedad;
    }
    public function getEstacionFlorece(){
        return $this->estacionFlorece = $estacionFlorece;
    }


    public function setColorPetalos($colorPetalos){
        $this->colorPetalos = $colorPetalos;
    }
    public function setCantidadPetalos($cantidadPetalos){
        $this->cantidadPetalos = $cantidadPetalos;
    }
    public function setColorPistilo($colorPistilo){
        $this->colorPistilo = $colorPistilo;
    }
    public function setVariedad($variedad){
        $this->variedad = $variedad;
    }
    public function setEstacionFlorece($estacionFlorece){
        $this->estacionFlorece = $estacionFlorece;
    }


      public function mensaje(){
        return  "Hola, soy una flor";
    }
}