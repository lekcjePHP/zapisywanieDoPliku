<!DOCTYPE html>
<html>
<head>

<title>pliki</title>
</head>
<body>

<?php

error_reporting(-1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


$f = fopen("text", 'a'); //Otwieramy plik w trybie 'append' czyli dodawania 
?>
<form action="" method="POST" >
<textarea name="stringtext" rows="8" cols="100">
 
</textarea><br />
<input type="submit" value="Dodaj"/>
</form>




<?
// Sprawdzic czy zostaly wyslane jakies dane przez posta ($_POST['stringtext]) 
// Jesli zostaly wyslane to dodajemy je przez fwrite
//Jesli nie to nic 


if(isset($_POST['stringtext']))
{
    if(strlen($_POST['stringtext'])<=100){
      fwrite($f, $_POST['stringtext']);
      fwrite($f, "<br />");
  }
}


fclose($f); //zamykamy plik
echo "Dodawanie zakonczone pomyslnie<br />";

$f = file("text");
$dlugosc = count($f);

echo "a teraz zawartosc pliku:  <br />";

for ($i = 0; $i< $dlugosc; $i++)
{
  echo $f[$i];
}


?>
</body>
</html>
