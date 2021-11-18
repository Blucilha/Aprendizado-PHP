<?php
    // FINAL

    abstract class Animal
    {
        protected $nome;
        protected $tipo="terrestre";

        final function status ()
        {
            echo "O animal ".$this -> nome." é um animal ".$this -> tipo."<hr/>";
        }
    }

    class Canino extends Animal
    {

        function __construct($nome)
        {
            $this -> nome = $nome;
            $this -> tipo = "aquatico";
        }

        /*
            function status()
            {
                echo "Função alterada!<hr/>";
            }
        */
    }

    class Canino2 extends Animal
    {
        function __construct(string $nome)
        {
            $this -> nome = $nome;
        }
    }

$can1 = new Canino("cachorro");
$can2 = new Canino2("Zebra");

$can1 -> status();
$can2 -> status();