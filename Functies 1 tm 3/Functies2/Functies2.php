
<?php
$a = 9;
$b = 3;

checkgedeeld(13,3);

function checkgedeeld($a, $b)
{
    if ($a % $b == 0) {
        $c = $a / $b;
        echo "$c";
    } else {
        echo "Dit getal kan niet door 3 gedeeld worden";

    }

}