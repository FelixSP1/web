<?php
$archivo = "contador.txt";

if (file_exists($archivo)) {
    $contador = file_get_contents($archivo);
    $contador++;
} else {
    $contador = 1;
}

file_put_contents($archivo, $contador);
echo "Visitas: " . $contador;
?>
