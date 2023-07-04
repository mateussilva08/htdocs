<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "imc.php" method = "post"> 
        <label> Informe seu Peso </label><br>
        <input type = "text" name = "peso"><br><br>
        <label> Informe sua Altura </label><br>
        <input type = "text" name = "altura"><br><br>
        <input type = "submit" name = "botao_calcular" value = "Calcular"><br>
        
        </form>
       <?php
        if(isset($_GET['get_imc'])){
            echo 'O seu IMC é: ' . $_GET['get_imc'];
        }
        ?>
</body>
</html>