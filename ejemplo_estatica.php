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
    function contador(){
        /* static se consiguen dos cosas:
            1. la línea que al inicio contenga la palabra reservada static
                sólo se ejecutará 1 vez.
            2. el valor anterior de esa misma variable se conserva
        */

        static $incrementar = 0;
        $incrementar++;
        echo $incrementar."<br>";

    }
    contador();
    contador();
    contador();
    contador();
    contador();
    contador();

    /*
    En conclusión usar la palabra reservada static 
    si se desea conservar el valor de una variable 
    fuera de su ámbito
    */
    


?>

</body>
</html>