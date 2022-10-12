<!DOCTYPE HTML>
<html>
<head>
<title>Formularz rejestracyjny</title>
<meta charset="UTF-8">
<style>
#fo {
  font-weight: bold;
  font-size: 14pt;
}
p.wyk {
  font-weight: bold;
  font-size: 11pt;
}
</style>
</head>
<body>
<form action="skrypt_form2.php" method="post">
<p id="fo">Formularz Rejestracyny w naszej szkole</p>
Nazwisko:<br>
<input type="text" name="nazw" value=" " size="30"><br>
Imię:<br>
<input type="text" name="im" value=" " size="30"><br>
Numer Telefonu<br>
<input type="text" name="tel" value=" " size="30"><br>
Adres e-mail:<br>
<input type="text" name="adr" value=" " size="30"><br>
Miejsce zamieszkania:<br>
<input type="text" name="miesz" value= " " size="30"><br>
Szkoła Podstawowa:<br>
<input type="text" name="szkoł" value= " " size="30"><br>

<p class="wyk">Wybór profilu:</p>
<select name="zawod[]" multiple>
<option value="Informatyk">Technik Informatyk</option>
<option value="Spedytor">Technik Spedytor</option>
<option value="Logistyk">Technik Logistyk</option>
<option value="Mechanik">Technik Mechanik</option>
<option value="Leser">Technik Leser</option>
<p class= "rozsz">Wybór Rozszerzenie:</p>
<select name="rozsz
</select>
<p><input type="checkbox" name="opcje" maxlength="1">
Zgadzam się na przetwarzanie moich danych osobowych</p>
<input type="submit" value="Wyślij" name="wyslij">&nbsp; &nbsp; 
<input type="reset" value="Wyczyść" name="zeruj">
</form>
</body>
</html>