<?php
class Liedje{
    private $titel ="";
    private $artiest = "";

    function __construct($titel , $artiest){
        $this->titel = $titel;
        $this->artiest = $artiest;
    }

    /**
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * @return string
     */
    public function getArtiest()
    {
        return $this->artiest;
    }

    /**
     * @param string $artiest
     */
    public function setArtiest($artiest)
    {
        $this->artiest = $artiest;
    }

    /**
     * @param string $titel
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;
    }

    function getProgramma(){
        return array();
    }
}
?>