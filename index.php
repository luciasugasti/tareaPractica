<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$texto ="Este es un mensaje  error si ves otro error por favor reporta error";
echo "Ejercicio 1  <br>";
echo str_replace ('error', 'exito', $texto);
echo "<br> Ejercicio 2  <br>";
echo substr ($texto, 9,19);
echo "<br> Ejercicio 3  <br>";
echo strlen ($texto);
echo "<br> Ejercicio 4  <br>";
echo str_word_count ($texto);
echo "<br> Ejercicio 5 <br>";
echo strtoupper($texto);
echo "<br> Ejercicio 6  <br>";
$cadena = explode (" ",$texto);
unset ($cadena[4]);
print_r($cadena);

?>

</body>
</html>