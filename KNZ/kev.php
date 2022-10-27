<?php 
include 'etilo.php'; 
echo '<p>Consumo de datos en PHP Actividad</p>'; 
$data = json_decode(  
file_get_contents('https://api.mercadolibre.com/users/226384145'), true ); 

echo '<center><iframe src="https://developer.twitter.com/; width="5000px"  height="500px" ></iframe></center>'; 
echo "<h2> Ejemplos de array </h2>"; 
echo "<br>"; 
$equipo_torneo = array 
( 
array("Goku"), 
array("Piccolo"), 
array("Gohan"), 
array("Frezzer") 
); 
foreach($equipo_torneo as $Rondalla) 
{ 
echo "Torneo del poder: "; 
foreach($Rondalla as $Integrante) 
{ 
echo $Integrante ." "; 
} 
echo "<br>"; 
} 
$tablas=[ 
"primera"=>5, 
"segunda"=>13, 
"tercera"=>11

];

?> 
