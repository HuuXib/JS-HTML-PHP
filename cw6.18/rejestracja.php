<?php
if (!isset($_COOKIE['dane']) && !isset($_POST['nazw'])) {
    ?>
    <?php
} else {
    if (isset($_POST['nazw'])) {
        setcookie('dane', $_POST['nazw'], time()+60*60*24*365);
        echo "<p>Dziękujemy za wprowadzenie danych.</p>";
    } else {
        echo "<p>Witamy po raz kolejny! " . $_COOKIE['dane'] . "</p>";
    }
    }
?>