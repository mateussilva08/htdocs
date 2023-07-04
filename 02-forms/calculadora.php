<?php

echo 'Senac 2023';
echo '<br><br>';

$form_numero1 = $_POST['numero1']; 
$form_numero2 = $_POST['numero2']; 

$resultado = (double)$form_numero1 + (double)$form_numero2;

echo $resultado;
header('location: index.php?mostrar=' . $resultado);

?>