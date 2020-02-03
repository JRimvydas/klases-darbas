<?php 

// Pirma uzduotis
$string = 'Šios dienos data - ';
$date = date('yy/m/d') ;
$result = $string . $date;
print $result . "<br>";

// Antra uzduotis
// "2. Sukurti sakini is 5< zodziu.
// po kiekvieno zodzio yra padetas taskas.
// naudojant bazines php funkcijas tuos taskus pakeisti i tarpus."

$sakinys = 'Labas. mano. vardas. yra. Rimvydas';
$sakinys = str_replace(".", " ", $sakinys);
print $sakinys;

 ?>