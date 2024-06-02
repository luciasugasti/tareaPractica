<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
   echo "Ejercicio 1: Tabla de multiplicar <br> <br> ";

 $num = 3;
 
 $pri = $num * 1;
 $sec = $num * 2;
 $ter = $num * 3;
 $cuar = $num * 4;
 $quin = $num * 5;
 $sext = $num * 6;
 $sep = $num * 7;
 $oct = $num * 8;
 $nov = $num * 9;
 $dec = $num * 10;

echo "$num multiplicado por 1 es: $pri <br>";
echo "$num multiplicado por 2 es: $sec <br>";
echo "$num multiplicado por 3 es: $ter <br>";
echo "$num multiplicado por 4 es: $cuar <br>";
echo "$num multiplicado por 5 es: $quin <br>";
echo "$num multiplicado por 6 es: $sext <br>";
echo "$num multiplicado por 7 es: $sep <br>";
echo "$num multiplicado por 8 es: $oct <br>";
echo "$num multiplicado por 9 es: $nov <br>";
echo "$num multiplicado por 10 es: $dec <br>";
 

 
   echo "<br> Ejercicio 2: Meses y estaciones <br> <br>";
   
   $mes = 3;

   switch ($mes) {

    case 1:
    echo "Este mes es Enero <br>";
    break;

    case 2:
    echo "Este mes es Febrero <br>";
    break;

    case 3:
    echo "Este mes es Marzo <br>";
    break;
   
    case 4:
    echo "Este mes es Abril <br>";
    break;

    case 5:
    echo "Este mes es Mayo <br>";
    break;

    case 6:
    echo "Este mes es Junio <br>";
    break;

    case 7:
    echo "Este mes es Julio <br>";
    break;

    case 8:
    echo "Este mes es Agosto <br>";
    break;

    case 9:
    echo "Este mes es Septiembre <br>";
    break;

    case 10:
    echo "Este mes es Octubre <br>";
    break;
 
    case 11:
    echo "Este mes es Noviembre <br>";
    break;

    case 12:
    echo "Este mes es Diciembre <br>";
    break;

   default:
   echo "Este mes no existe <br>";
   break;
   }

   if ($mes >0 && $mes <=2 || $mes == 12 ){
    echo "Estamos en Verano ~ <br>";

   }
   else if($mes <=5 ){
    echo "Estamos en Otoño <^> <br>";
   }

   else if($mes <=8){
    echo "Estamos en Invierno * <br>";
   }
   
   else if($mes <=11){
    echo "Estamos en Primavera ö <br>";
   }

   else {
     echo"<br>";
   }


   /* 

HOLA!! Profe no sabía desde que mes empezar a decir que era verano, así que hice las dos y acá le comente una.

   if ($mes >0 && $mes <=3){
    echo "Estamos en Verano ~ <br>";

   }
   else if($mes <=6 ){
    echo "Estamos en Otoño <^> <br>";
   }

   else if($mes <=9){
    echo "Estamos en Invierno * <br>";
   }
   
   else if($mes <=12){
    echo "Estamos en Primavera ö <br>";
   }

   else {
  echo"<br>";
   }
   */



   
echo"<br> Ejercicio 3: Suma de enteros <br> <br>";


$num3 = 7;

if($num3 >0){

    $suma= 0;

    for ($i = 0; $i <= $num3; $i++) {   
    
    $suma = $i + $suma ;
    
    
    
    }

echo "La suma de todos los números enteros desde el 1 hasta un número dado por el usuario es: $suma <br>";

}

else{
echo " Error";
}

  
    
    
    
    ?>
</body>
</html>