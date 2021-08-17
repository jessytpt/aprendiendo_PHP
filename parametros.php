<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //PASE DE PARÁMETROS POR VALOR
    function incrementa($val){
        $val++;
        return $val;
    }
    $numero=5;
    echo incrementa($numero)."<br>";
    echo $numero."<br>";
    //PASE DE PARÁMETROS POR REFERENCIA
    function incrementa2(&$val){
        $val++;
        return $val;
    }
    $numero=5;
    echo incrementa2($numero)."<br>";
    echo $numero;
?>
</body>
</html>