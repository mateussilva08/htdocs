<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundo Projeto</title>
</head>
<body>
    <form action = "backend.php" method = "post"> 

        <input type = "text" name = "campo_nome"><br>
        <input type = "text" name = "campo_sobrenome"><br>
        <input type = "submit" name = "botao_enviar" value = "Enviar"><br>

    </form>
    <br><br>
    <form action = "calculadora.php" method = "post"> 

        <input type = "number" name = "numero1"><br>
        <input type = "number" name = "numero2"><br>
        <input type = "submit" name = "botao_enviar" value = "Enviar"><br>

    </form>

    <form action = "imc.php" method = "post"> 

<input type = "text" name = "numero1"><br>
<input type = "text" name = "numero2"><br>
<input type = "submit" name = "botao_enviar" value = "Enviar"><br>

</form>

    <br><br>

    <?php
        if(isset($_GET['mostrar'])){
            echo 'Resultado da Soma é: ' . $_GET['mostrar'];
        }
        
        
    ?>
</body>
</html>