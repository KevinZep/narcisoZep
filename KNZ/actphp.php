<?php
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);

echo"<br>";
echo"<br>";


// Crear un array simple.
$array = array(1, 2, 3, 4, 5,10);
print_r($array);

echo"<br>";
echo"<br>";
echo"<br>";
print_r($array[3]);

// Ahora elimina cada elemento, pero deja el mismo array intacto:
foreach ($array as $i => $value) {
    unset($array[$i]);
    echo"<br>";
}

echo"<br>";
echo"<br>";
echo"<br>";

$data = json_decode( file_get_contents('https://api.mercadolibre.com/users/226384143/'), true );
echo $data['nickname'];
echo"<br>";
echo"<br>";
echo"<br>";
echo $data['registration_date'];
echo"<br>";
echo"<br>";
echo '<iframe src="https://petrointelligence.com/api/api_precios.html?consulta=nac&estado;=CDMX&tipo;=REG&quot; 
        width="300px" height="200px" frameborder="0"></iframe>';

?>