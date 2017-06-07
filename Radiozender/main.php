<?php

    include_once('library/programma.php');
    include_once('library/Liedje.php');

    $ditprogramma = new Programma();
    $ditprogramma->setNaam("Mijn eerste programma");
    $ditprogramma->setOmschrijving("Even testen");

    foreach($ditprogramma->getProgramma() as $p){
        //echo $p."<br>";
    }

    $nieuwliedje = new Liedje ("dit is de titel", "rolling stones");


    $ditprogramma->voegLiedjeToe($nieuwliedje);

    foreach($ditprogramma->getLiedjes() as $liedje){
        echo $liedje->getTitel()." - ".$liedje->getArtiest()."<br>";
    }
    ?>



