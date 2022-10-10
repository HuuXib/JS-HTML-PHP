<?php
if (isset($_POST['komenatrz'])) {
    $tekst = substr($_POST['komentarz'], 0, 255);
    $tekst = strip_taga($tekst) . "\n";

    if (!$op = fopen('opinie.txt', 'a')) {
      echo "Błąd!. Nie można otworzyć pliku opinie.txt";  
} else {
    if (fwrite($op, $tekst) === false) {
        echo "Dodawanie komentarza nie powiodło się";
    }
}
}

?>
<?php
$opinie = '';
if (file_exists('./opinie.txt')) {
 $opinie = file_get_contents('./opinie.txt');
 $opinie = nl2br($opinie);
}
if ($opinie != '') {
    echo $opinie;
   } else {
    echo "Brak opinii na temat zmian klimatu.";
   }
   ?>