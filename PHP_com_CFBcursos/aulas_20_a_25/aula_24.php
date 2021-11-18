<?php
    // STATIC

    class Pessoa {
        protected $nome;
        protected static $idade;

        function __construct(string $no)
        {
            $this -> nome = $no;
            self:: $idade = 0;
        }

        public function mudarIdade (int $ida) : void
        {
            self::$idade = $ida;
        }

        public function status ()
        {
            echo "Nome: ".$this -> nome."<br/>";
            echo "Idade: ".self:: $idade." anos.<hr/>";
        }
    }

$pessoa1 = new Pessoa("Bruce");
$pessoa2 = new Pessoa("Josiane");
$pessoa3 = new Pessoa("Alan");

echo "Altera idade<hr>";
$pessoa1 -> mudarIdade(27);

$pessoa1 -> status();
$pessoa2 -> status();
$pessoa3 -> status();

echo "Altera idade2<hr>";
$pessoa2 -> mudarIdade(25);

$pessoa1 -> status();
$pessoa2 -> status();
$pessoa3 -> status();