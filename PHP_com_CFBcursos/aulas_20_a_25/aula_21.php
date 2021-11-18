<?php
    // Herança
    class Aula {
        protected $assunto;
        protected $professor;
        
        public function __construct(string $ass, string $prof) {
            $this -> assunto = $ass;
            $this -> professor = $prof;
        }

        function dar_professor_aula() {
            echo "O assunto de '".$this -> assunto."' será dado pelo professor ".$this -> professor;
        }
    }

    class Cronograma extends Aula {
        protected $assunto;
        protected $professor;
        protected $dia_da_semana;

        public function __construct(string $dia, string $ass, string $prof)
        {
            $this -> assunto = $ass;
            $this -> professor = $prof;
            $this -> dia_da_semana = $dia;
        }

        public function cronograma() : void
        {
            echo $this -> dar_professor_aula()." na ".$this -> dia_da_semana.".";
        }
    }

    /*
        $aula1 = new Aula("triângulo", "Bruce");
        $aula1 -> dar_professor_aula();
    */

    $crono1 = new Cronograma("segunda", "algebra", "Bruce");
    $crono1 -> cronograma();
