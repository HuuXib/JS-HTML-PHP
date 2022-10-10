<?php
$oceny = array (
    "Przedmiot" => "Ocena",
    "J.polski" => "2",
    "Matematyka" => "4",
    "Geografia" => "3",
    "Historia" => "5",
    "J.angielski" => "5"
    
);
foreach ($oceny as $kl => $x) {
    echo '<tr><td>' . $kl . '</td><td>' . $x . '<td></tr>';
}
?>