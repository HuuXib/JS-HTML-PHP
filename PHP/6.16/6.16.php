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
<input type="text" name="zaw" value=" " size="30"><br>
Adres e-mail:<br>
<input type="text" name="adr" value=" " size="30">
<p class="wyk">Wybór profilu:</p>
<select name="języki[]" multiple>
<option value="T1">Technik Informatyk</option>
<option value="T2">Technik Spedytor</option>
<option value="T3">Technik Logistyk</option>
<option value="T4">Technik Mechanik</option>
<option value="T5">Technik Leser</option>
</select>
<p><input type="checkbox" name="opcje" maxlength="1">
Zgadzam się na przetwarzanie moich danych osobowych</p>
<input type="submit" value="Wyślij" name="wyslij">&nbsp; &nbsp; 
<input type="reset" value="Wyczyść" name="zeruj">
</form>
</body>
</html>