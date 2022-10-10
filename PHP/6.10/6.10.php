<?php
$dzien = date('l');


$dzien_pl = array(
    'Monday' => 'Poniedziałek',
    'Tuesday' => 'Wtorek',
    'Wednesday' => 'Środa',
    'Thursday' => 'Czwartek',
    'Friday' => 'Piątek',
    'Saturday' => 'Sobota',
    'Sunday' => 'Niedziela');

   
echo "Dzisiaj jest " .$dzien_pl[$dzien];
?>