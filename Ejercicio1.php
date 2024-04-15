<?php
echo 'PHP version:' .phpversion(); // Estoy probando esta funcion para que se imprima la version de PHP y adicionalmente el "." para concatenar
echo "<br> <br>"; // para pasar de línea (en este caso dos veces)

/* - Exercici 1
Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.
*/
//hola//

$number=38; //int
$double=3.2; // double
$string='Hola :) '; // string
$response= true; // boolean

echo "$number,  $double, $string $response"; //funcion para que se impriman las variables por pantalla
echo "<br> <br>";

echo "Tipo de Variables: <br>";
var_dump($number,$double,$string,$response); // para que me muestre el tipo de variable ( estoy es algo adicional para mi propia comprobación)
ECHO "<br><br>";
Const NAME="<h1>Nathalia</h1>"; 

print NAME; // imprimo el nombre con formato de título (h1)

//hasta aqui sería el NIVEL 1


?>
