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
//esto funciona para invocar código de archivos externos
include("proporciona_datos.php");
//si uso requiere y existe algun error, todo lo que esté despues no se ejecutará
//include si ocurre un error, saltará un error pero la ejecución continuará
       getData();
    ?>
</body>
</html>