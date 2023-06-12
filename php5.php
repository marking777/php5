<?php
//opdracht1
$tijd = date("H:i");

if ($tijd < "12:00"){
   echo "Goedemorgen";
} elseif ($tijd < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}

//opdracht2
function berekenen($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo $gemiddelde;
}
berekenen(875, 9834);

//opdracht3

function berekendagen() {
    $huidigeDatum = date('Y-m-d');
    $einde = date('Y-12-31');
    $nog = date_diff(date_create($huidigeDatum)
    , date_create($einde))->format('%a');
    return $nog;
}
$dagen = berekendagen();
echo "Er zijn $dagen dagen nog";




function lengte($strings) {
    $totaal = 0;
    
    foreach ($strings as $string) {
        $totaal += strlen($string);
    }
    
    return $totaal;
}
$array = array("yo", "yoo", "yoooo", "yoooooooooooooooo");
$lengte = lengte($array);
echo "De totale lengte is $lengte";

?>