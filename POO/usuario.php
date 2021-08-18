<?php
    class Usuario{
        var $id;
        var $nombre;
        var $clave;
        //Constructor
        function Usuario($nombre,$clave){
            $this->nombre=$nombre;
            $this->clave = $clave;
            
        }
        function getNombre(){
            return $this->nombre;
        }
        function getClave(){
            return $this->clave;
        }
        function printCaracteristicas($usuario)
    {

    }

    }

    $nombre = "Jessenia";
    $clave = "123";

    echo ("Holi");

    $usuario = new Usuario($nombre,$clave);

    $u = $usuario->getNombre();
    $p = $usuario->getClave();

    echo $u,$p;
    

?>