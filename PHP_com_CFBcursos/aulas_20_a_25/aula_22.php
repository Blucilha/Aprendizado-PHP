<?php

    // Classes abstratas
    abstract class CarroBase {
        protected $potencia;
        protected $velMax;
        protected $portas;
        protected $ligado = false;

        public function ligar() {
            $this -> ligado = true;
        }

        public function desligar() {
            $this -> ligado = false;
        }

        abstract function test();

        public function status() : void
        {
            echo "<hr/>";
            echo "Potência do carro: ".$this -> potencia."<br/>";
            echo "Velocidade máxima: ".$this -> velMax."<br/>";
            echo "Portas: ".$this -> portas."<br/>";
            if ($this -> ligado) {
                echo "Carro ligado";
            } else {
                echo "Carro desligado";
            }
            echo "<hr/>";
        }
    }

    class Carro extends CarroBase {
        function __construct(int $pot, int $vel, int $por)
        {
            $this -> potencia = $pot;
            $this -> velMax = $vel;
            $this -> portas = $por;
            $this -> status();
        }

        function test() : void
        {
            echo "<hr/>Carro testado e aprovado.<hr/>";
        }
    }

$carro1 = new Carro(150, 280, 4);
$carro1 -> ligar();
$carro1 -> status();
$carro2 = new Carro(200, 350, 6);
$carro2 -> test();