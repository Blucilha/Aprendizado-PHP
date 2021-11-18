<?php
    //  Classes
    
    class Carro {
        var $tipo; // 1 - passeio / 2 - esporte / 3 - utilitário
        var $velMax;
        var $nome;
        var $liga;
        var $vel;

        function Carro($tp, $no) {
            $this -> liga = false;
            $this -> nome = $no;
            $this -> vel = 0;
            $this -> tipo = $tp;

            if ($tp == 1) {
                $this -> velMax = 160;
            } else if ($tp == 2) {
                $this -> velMax = 300;
            } else {
                $this -> velMax = 100;
            }
        }

        function id () {
            echo "<hr/>";
            echo "Nome do carro: ".$this -> nome.".<br/>";
            echo "Tipo do carro: ".$this -> tipo.".<br/>";
            echo "Velocida máxima: ".$this -> velMax.".<br/>";
            echo "Velocidade do Carro: ".$this -> vel.".<br/>";
            
            if ($this -> liga) {
                echo "Carro ligado!<br/>";
            } else {
                echo "Carro desligado!<br/>";
            }
        }

        function ligar() {
            $this -> liga = true;
        }

        function desligar() {
            $this -> liga = false;
        }

        function velocidade($valor) {
            if($valor >= $this -> velMax) {
                $this -> vel = $this -> velMax;
            } else {
                $this -> vel = $valor;
            }
        }
    }

    $carro1 = new Carro(2, "F1");
    $carro1 -> velocidade(500);
    $carro1 -> ligar();
    $carro1 -> id();

    $carro2 = new Carro(3, "Carreta");
    $carro2 -> id();

?>