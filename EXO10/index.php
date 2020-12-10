<?php $country= array(
    80 => "Somme" ,
    60 => "L'Oise",
    02 => "L'Aisne",
    59 => "Nord",
    62 => "Pas De Calais",
); foreach($country as $number => $department){
    echo "<p> Le département  ". $department . " a le numéro ".$number. "</p>";
}