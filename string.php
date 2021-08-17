<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .resaltar{
        color:#F00;
        font-weight:bold;
    }
    </style>
    
</head>
<body>
    <?php
        echo "<p class=\"resaltar\">Esto es un párrafo</p>";
        //strcmp -> compara cadenas de texto, teniendo encuenta las mayúsculas y minúsculas
        //strcasecmp -> compara dos cadena pero ignora si están en mayúsulas o minúsculas
        // < 0 si el primer valor dado es menor que el segudo
        // > 0 si el primer valor dado es mayor que el segudo o son iguales
        //Devuelve uno si no son iguales

        $variable1="casa";
        $variable2="CASA";

        //$resultado=strcmp($variable1,$variable2);
        $resultado=strcasecmp($variable1,$variable2);
        echo "El resultado es ".$resultado;

        $var1 = "hola";
$var2 = "hola";
if (strcmp($var1, $var2) === 0){
    echo "Los strings coinciden";
}

        $resultado=strcasecmp($variable1,$variable2);
        if($resultado){
            echo "No coinciden";
        }else{
            echo "Coinciden";
        }

    ?>

</body>
</html>