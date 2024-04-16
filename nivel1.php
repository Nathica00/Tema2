<?php
echo "<h3>Exercici 1</h3>";
/* - Exercici 1
Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.
*/
Const NAME="<h1>Nathalia Garcia Quintero</h1>"; 
print NAME; // imprimo el nombre con formato de título (h1)

$number=38; //int
$double=3.2; // double
$string='Hola :) '; // string
$response= true; // boolean
echo "$number,  $double, $string $response"; //funcion para que se impriman las variables por pantalla
echo "<br> <br>";
echo "<b>Tipo de Variables:</b><br>";
var_dump($number,$double,$string,$response); // para que me muestre el tipo de variable ( estoy es algo adicional para mi propia comprobación)
echo "<br><br>";

echo "<h3>Exercici 2</h3><br>";
/*- Exercici 2
Imprimeix per pantalla "Hello, World!" utilitzant una variable. En acabat:
Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
Imprimeix per pantalla la mida (longitud) de la variable.
Imprimeix per pantalla l'string en ordre invers de caràcters.
Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings. */

$greeting="Hello World";
echo "$greeting <br>"; //Imprimeix per pantalla "Hello, World!" utilitzant una variable.
echo strtoupper($greeting)."<br>";//Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
echo "Lengt: ".strlen($greeting)." characters <br>";//Imprimeix per pantalla la mida (longitud) de la variable.
echo strrev($greeting)."<br>";//Imprimeix per pantalla l'string en ordre invers de caràcters.
$phrase="Aquest és el curs de PHP";
echo $greeting .", " .$phrase;//Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings. */

echo "<h3>Excercici 3</h3>";
//- Exercici 3
//a) Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor.  
$X=8;
$Y=4;
$M=4.8;
$N=2.5;

//A continuació, mostra per pantalla per a X i Y:

echo "X = " .$X ."<br>"; //El valor de cada variable.
echo "Y = " .$Y ."<br>";
echo "X + Y = " .$X + $Y ."<br>"; //La suma.
echo "X - Y = " .$X - $Y ."<br>"; //La resta.
echo "X * Y = " .$X * $Y ."<br>"; //El producte.
echo "X / Y = " .$X / $Y . "<br>"; // la divisió.
echo "X % Y =" .$X % $Y ."<br>"; //El mòdul.

//Per N i M realitzaràs el mateix.
echo "M = " .$M ."<br>"; //El valor de cada variable.
echo "N = " .$N ."<br>";
echo "M + N = " .$M + $N ."<br>"; //La suma.
echo "M - N = " .$M - $N ."<br>"; //La resta.
echo "M * N = " .$M * $N ."<br>"; //El producte.
echo "M / N = " .$M * $N ."<br>"; // la divisió.
echo "M % N = ". $M % $N ."<br>"; //El mòdul.

//Per a totes les variables (X, Y, N, M):

//El doble de cada variable.
echo "el doble de X es: " .$X*2 ."<br>";
echo "el doble de Y es: " .$Y*2 ."<br>";
echo "el doble de M es: " .$M*2 ."<br>";
echo "el doble de N es: " .$N*2 ."<br>";

echo "la suma de todas las variables es: " .$X+$Y+$M+$N ."<br>"; // La suma de totes les variables.
echo "el producto de todas las variables es: " .$X*$Y*$M*$N ."<br>"; //El producte de totes les variables.

/*b) Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, 
la resta, la multiplicació o la divisió dels dos nombres.
*/
echo "<h3>Calculadora</h3>";

function calculate(int $number1, int  $number2, string $operator){
    switch ($operator) {
        case '+':
            echo "El resultado de la suma es: " .$number1+$number2;
            break;
        case '-':
            echo "El resultado de la resta es: " .$number1-$number2;
            break;
        case '*':
            echo "El resultado de la multiplicación es: ".$number1*$number2;
            break;
        case '/':
            echo "El resultado de la división es: ".$number1/$number2;
        case '%':
            echo "El resultado del módulo es: ".$number1%$number2;
            break;
        default:
        
            break;
    }
}

calculate(3,6,"*"); // llamo a la función y le entro las variables por parámetro.


echo "<h3>Excercici 4</h3>";
/*Fes un programa que implementi una funció on es compti fins a un nombre determinat. 
Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. 
A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). 
El compte s’ha de mostrar per pantalla pas per pas.*/

function tocount(int $stop_number, int $frecuency) {
    $i= 0;
    while ($i < $stop_number) {
        $i=$i+$frecuency;
        echo $i ."<br>";
    }
 }

tocount (8,2); // cambiar los datos por el numero en el que quiero que pare de contar y la frecuencia ( de 1 en 1, de 2 en 2...)


echo "<h3>Excercici 5</h3>";
/*- Exercici 5
Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà. */

function verify_grad(int $nota){

    if ($nota<33) {
        echo "Reprueba";
    } elseif ($nota<=44) {
        echo "Tercera Divisió";
        }elseif($nota<=59){
            echo "Segona Divisió";
            }else{
            echo "Primera Divisió";
                 }
}
verify_grad(80); // meto el porcentaje de la nota por parametro (del 1 al 100)



echo "<h3>Excercici 6</h3>";
/*- Exercici 6
Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.

Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.
 Important

Consell: pot ser que la funció rand () et resulti útil.*/



function isBitten(int $prob){ 
       if($prob==1){ 
   echo "Has sido mordido";
   }else{ 
    echo "No te mordió esta vez";
   }
}

$probability=rand(1,0);// 50%  de probailidad de que salga 1 o 0;

echo $probability ."<br>";  // just to check
isBitten($probability); //llamo a la función
?>