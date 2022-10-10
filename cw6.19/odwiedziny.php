<?php
if (!isset($_COOKIE ['odpowiedz'])) {
    $odw =1;
} else {
    $odw = intval($_COOKIE['odpowiedz']) + 1;
}
setcookie("odpowiedz", $odw, time(+60*60*24*365))
?>
<?php
if ($odw == 1) {
    $wyraz = "raz";
} else {
    $wyraz = "razy";
}
echo "W ciągu ostatniego roku odwiedziłeś naszą strone $odw $wyraz.<br>";

?>