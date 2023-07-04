<?php
$peso = $_POST['peso']; 
$altura = $_POST['altura']; 


$valtura = str_replace(',', '.', $altura);
$resultado = $peso / ($valtura * $valtura);

if($resultado < 18.5){
        $siuação = 'Abaixo do peso';
}
else{
    if($resultado < 25){
        $siuação = 'Peso ideal';
    }
}

header ('Location: index.php?get_imc=' . round ($resultado, 2));
echo "seu imc é: " . round ($resultado, 2);
?>