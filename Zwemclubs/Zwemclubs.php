
<?php
    $Zwemclubs = array (
        array("naam" => "De Spartelkuikens ", "Zwemmers" => 25),
        array("naam" => "De Waterbuffels ", "Zwemmers" => 32),
        array("naam" => "Plonsmderin ", "Zwemmers" => 11),
        array("naam" => "Bommetje ", "Zwemmers" => 23),
    );
    foreach($Zwemclubs as $Zwemmers){
        echo $Zwemmers["naam"];
        echo $Zwemmers["Zwemmers"];
        echo "<br>";
    }

