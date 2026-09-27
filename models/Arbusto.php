<?php

require_once __DIR__ .'\\planta.php';

class Arbusto extends Planta {
    private int $ancho;
    private bool $domestico;
    private string $variedad;
    private string $colorHojas;
    private bool $podar;

    public function __construct(int $ancho, bool $domestico, string $variedad, string $colorHojas, bool $podar,string $nombre, int $altura, bool $tieneHojas, string $climaIdeal){
        parent::__construct( $nombre,  $altura,  $tieneHojas,  $climaIdeal);

        $this->ancho = $ancho;
        $this->domestico = $domestico;
        $this->variedad = $variedad;
        $this->colorHojas = $colorHojas;
        $this->podar = $podar;
    }

    public function getAncho(){
        return $this->ancho = $ancho;
    }
    public function getDomestico(){
        return $this->domestico = $domestico;
    }
    public function getVariedad(){
        return $this->variedad = $variedad;
    }
    public function getColorHojas(){
        return $this->colorHojas = $colorHojas;
    }
    public function getPodar(){
        return $this->podar = $podar;
    }


    public function setAncho($ancho){
        $this->ancho = $ancho;
    }
    public function setDomestico($domestico){
        $this->domestico = $domestico;
    }
    public function setVariedad($variedad){
        $this->variedad = $variedad;
    }
    public function setColorHojas($colorHojas){
        $this->colorHojas = $colorHojas;
    }
    public function setPodar($podar){
        $this->podar = $podar;
    }


          public function mensaje(){
        return  "Hola, soy un arbusto";
    }



}