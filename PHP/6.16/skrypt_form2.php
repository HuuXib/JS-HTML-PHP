<?php
echo "Dziękujemy! Rejestracja przebiegła pomyślnie.<br>";
echo "Wprowadzone dane:<br>";
echo "Nazwisko: " . trim($_POST['nazw']) . "<br>";
echo "Imię: " . trim($_POST['im']) . "<br>";
echo "Numer Telefonu: " . trim($_POST['zaw']) . "<br>";
echo "Adres e-mail: " . trim($_POST['adr']) . "<br>";
echo "Poprzednia szkoła: " . trim($_POST['szkoł']) . "<br>";
if (!isset($_POST['wykszt'])) {
} else {
  echo "Szkoła" . trim($_POST['wykszt']) . "<br>";
}
echo "<p>Wybrany zawód</p>";
if (!empty($_POST['tel'])) {
  echo "<ul>";
  foreach ($_POST['zawod'] as $wartosc) {
    echo "<li>$wartosc</li>";
  }
  echo "</ul>";
} else {
  echo "<p>".$_POST['nazw']." nie wybrał żadnego zawodu</p>";
}
?>
