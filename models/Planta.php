<?php

class Planta {
    private string $nombre;
    private int $altura;
    private bool $tieneHojas;
    private string $climaIdeal;

    public function __construct(string $nombre, int $altura, bool $tieneHojas, string $climaIdeal) {

        $this->nombre = $nombre;
        $this->altura = $altura;
        $this->tieneHojas = $tieneHojas;
        $this->climaIdeal = $climaIdeal;
    }


    //geters
    public function getNombre(){
        return $this->nombre;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getTieneHojas(){
        return $this->tieneHojas;
    }

    public function getClimaIdeal(){
        return $this->climaIdeal;
    }

    //seters

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setaltura($altura){
        $this->altura = $altura;
    }

    public function settieneHojas($tieneHojas){
        $this->tieneHojas = $tieneHojas;
    }

    public function setclimaIdeal($climaIdeal){
        $this->climaIdeal = $climaIdeal;
    }


}