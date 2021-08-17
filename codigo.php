<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- en php se pueden hacer las funciones y llamadas en diferentes bloques de código-->
<?php
 function getData(){
    $nombre = "Karlita ";
    $edad = 22;
    echo "Sorry $nombre! somethigs was wrong...".$nombre;
    print "<br>***********************</br>";
    echo "Esta es la primera vez q aprendo PHP";
}
?>
    <?php
       getData();
    ?>

</body>
</html>