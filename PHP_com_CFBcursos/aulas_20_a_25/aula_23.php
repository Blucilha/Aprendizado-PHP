<?php

    // INTERFACES

interface CarroPadrao {
        function ligar();
        function desligar();
        function status();
        function acelerar();
        function frear();
    }

    interface CarroGuerra {
        function atirarCanhao();
        function atirarMetralhadora();
    }

    abstract class CarroBase1 implements CarroPadrao, CarroGuerra
    {
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

        public function frear()
        {
            echo "Velocidade é zero";
        }

        public function acelerar()
        {
            echo "Velocidade é maior do que zero";
        }

        public function atirarCanhao()
        {
            echo "POW";
        }

        public function atirarMetralhadora()
        {
            echo "Olha a metralhadora, tararararara!";
        }
    }

    class Carro1 extends CarroBase1{
        function __construct(int $pot, int $vel, int $por)
        {
            $this -> potencia = $pot;
            $this -> velMax = $vel;
            $this -> portas = $por;
            $this -> ligar();
            $this -> status();
        }
    }

$carro = new Carro1(150, 200, 4);
$carro -> atirarMetralhadora();