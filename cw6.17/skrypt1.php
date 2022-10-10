<!DOCTYPE html>
<?php
$czas = date("y-m-d g:i:s");
setcookie("wizyta", $czas, time()+3600);
?>
<html>
    <body>
        <?php
        if (isset ($_COOKIE['wizyta'])) {
            $ostatnia = $_COOKIE['wizyta'];
        echo "Witamy ponownie! <br> Ostatni raz odwiedziłeś nas: " . $ostatnia;
        } else {
            echo "Witamy na naszej stronie!";
        }
        ?>
        <p><strong>Uwaga:</strong> Potrzebne może być odświerzenie strony.</p>
    </body>
    </html>