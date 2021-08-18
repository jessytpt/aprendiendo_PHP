<?php
    class Coche{
        var $ruedas;
        var $color;
        var $motor;
        //Constructor
        function Coche(){
            $this->ruedas=4;
            $this->color = "";
            $this->motor = 1600;
        }
        //getters ans setters
        function getRuedas(){
            return $this->ruedas;
        }
        function getColor(){
            return $this->color;
        }
        function getMotor(){
            return $this->motor;
        }
        function arrancar(){
            echo "Estoy arrancando";
        }

        function girar(){
            echo "Estoy girando";
            
        }
        function frenar(){
            echo "Estoy frenando";
            
        }
    }

    function printCaracteristicas($cocheConcreto)
    {
        echo 'Ruedas: '.$cocheConcreto->getRuedas();
        echo "\n";
        echo 'Color: '.$cocheConcreto->getColor();
        echo "\n";
        echo 'Motor: '.$cocheConcreto->getMotor();
        echo "\n";
    }

    $renault = new Coche();
    $mazda = new Coche();
    $for = new Coche();

    $miCoche = new Coche();
    $miCoche->ruedas = 4;
    $miCoche->color = 'CELESTE';
    $miCoche->motor= 1800;

    printCaracteristicas($miCoche);
?>

