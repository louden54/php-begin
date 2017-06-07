<?php
class Programma{
    private $naam ="";
    private $omschrijving = "";
    private $liedjes = array();

    public function voegLiedjeToe($liedje){
        $this->liedjes[] = $liedje;
    }
    public function getLiedjes(){
        return $this->liedjes;
    }
    /**
     * Geeft programma informatie terug
     * @return mixed
     */
    function getProgramma(){
        return array("naam" => $this->naam,
            "omschrijving" => $this->omschrijving
        );
    }

    /**
     * Geeft het programma een naam
     * @param de naam als string
     */
    function setNaam($n){
        if(strlen($n)>=2) {
            $this->naam = $n;
        }
    }
    /**
     * Geeft het programma een omschrijving
     * @param de omschrijving als string
     */
    function setOmschrijving($omschrijving){
        $this->omschrijving = $omschrijving;

    }

    /**
     * geeft de naam van het programma
     * @return string
     */
    function getNaam(){
        return $this->naam;
    }
    /**
     * geeft de omschrijving van het programma
     * @return string
     */
    function getOmschrijving(){
        return $this->omschrijving;
    }
}
?>