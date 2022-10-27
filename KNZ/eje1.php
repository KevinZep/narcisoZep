<?php
$data = file_get_contents("https://run.mocky.io/v3/f39d3596-e236-4196-ac61-
056aeb5213b9");
$notas = json_decode($data, true);
foreach ($notas as $nota)
{
    $nombre = "";
    $apellidos = "";
    $nota_final = "";
    foreach ($nota as $key => $value){
        switch ($key) {
            case 'nombre':
                $nombre = $value;
                break;
            case 'apellidos':
                $apellidos = $value;
                break;
            case 'nota':
                $nota_final = $value;
                break;
    }
}
echo "<p>Alumno: " . $nombre . "" . $apellidos . "->" . $nota_final . "</p>";
}
print_r($notas);
?>