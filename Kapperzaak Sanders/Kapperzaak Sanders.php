
<?php
$kappersagenda =["09.15" => "Mevr.Pietersen" , "09.30" => "Mevr.Willems" , "09.45"=> "" ,"10.00" => "Paul van den Broek" , "10.15" =>
                              "Karel de Meeuw", "10.30" => ""];


    print("De volgende momenten zijn nog beschikbaar:<ul>");
    foreach($kappersagenda as $tijd => $klant) {
        if ($klant == "") {
            print("<li>" . $tijd . "</li>");
            print("</ul>");
    }
}




