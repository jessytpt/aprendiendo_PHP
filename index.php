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
        print "Holi"; //esto es un comentario
        /*
        Esto es un comentario de multilínea

        */
        //el nombre de las variables en php siempre comienza con el signo de dolar
        $nombre = "Jessenia Toapanta";
        //Para concatenar en PHP se utiliza el punto
        print "Me presento soy " . $nombre;
        print "<br></br>";
        $universidad = "Universidad Técnica de Ambato";
        $edad = 26;
        print "Hola soy $nombre y estudio en $universidad, tengo $edad años";
        /*****
         * ECHO
         * **** */   
        print "<br>***********************</br>";
        $nombre_gata="Chica";
        $descripcion_gata="Parece una gata de bengala, es como un mini tigre";
        echo "Tengo una gata llamada " . $nombre_gata;
        print "<br></br>";
        echo $nombre_gata,$descripcion_gata; //diferencia con print
        


    ?>
</body>
</html>