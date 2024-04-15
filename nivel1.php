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
?>