<?php

require_once __DIR__ .'\\planta.php';

class Arbol extends Planta {
    private string $variedad;
    private string $tipoTronco;
    private int $radioTronco;
    private string $color;
    private string $tipoHojas;

    public function __construct(string $variedad, string $tipoTronco, int $radioTroco, string $color, string $tipoHojas,string $nombre, int $altura, bool $tieneHojas, string $climaIdeal){

    parent::__construct( $nombre,  $altura,  $tieneHojas,  $climaIdeal);

    $this->variedad = $variedad;
    $this->tipoTronco = $tipoTronco;
    $this->radioTronco = $radioTroco;
    $this->color = $color;
    $this->tipoHojas = $tipoHojas;

    }


    public function getVariedad(){
        return $this->variedad;
    }

    public function getTipoTronco(){
        return $this->tipoTronco;
    }
    public function getRadioTroco(){
        return $this->radioTroco;
    }
    public function getColor(){
        return $this->color;
    }
    public function getTipoHojas(){
        return $this->tipoHojas;
    }


    public function setVariedad($variedad){
        $this->variedad = $variedad;
    }
    public function setTipoTronco($tipoTronco){
        $this->tipoTronco = $tipoTronco;
    }
    public function setRadioTroco($radioTroco){
        $this->radioTroco = $radioTroco;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function setTipoHojas($tipoHojas){
        $this->tipoHojas = $tipoHojas;
    }
    

    public function mensaje(){
        return  "Hola, soy un árbol";
    }

}