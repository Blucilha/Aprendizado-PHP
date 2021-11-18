<?php

    declare(strict_types=1);

    class Produto
    {   
        /**
         * @var string
         */
        private $dsn = 'mysql:dbname=teste_db;host=localhost';

        /**
         * @var string
         */
        private $user = 'root';

        /**
         * @var string
         */
        private $password = '12345678';
        
        /**
         * @var PDO
         */
        private $conn;

        public function __construct()
        {
            try {
                $this -> conn = new PDO($this -> dsn, $this -> user, $this -> password);
            } catch (Exception $e) {
                $e -> getMessage();
            }
        }

        public function listar() : array
        {
            $sql = 'select id, descricao from produtos';
        
            $produtos = [];
        
            foreach($this -> conn -> query($sql) as $key) {
                array_push($produtos, $key);
            }

            return $produtos;
        }

        public function inserir(string $descricao) : int
        {
            $sql = 'insert into produtos(descricao) values(?)';

            try{
                $insert = $this -> conn -> prepare($sql);
                $insert -> bindParam(1, $descricao);
                $insert -> execute();
            } catch (Exception $e) {
                echo $e -> getMessage();
                die();
            }
        
            return $insert -> rowCount();
        }

        public function atualizar(string $descricao, int $id) : int
        {
            $sql = 'update produtos set descricao = ? where id = ?';

            try {
                $update = $this -> conn -> prepare($sql);
                $update -> bindParam(1, $descricao);
                $update -> bindParam(2, $id);
                $update -> execute();
            } catch (Exception $e) {
                echo $e -> getMessage();
                die();
            }
        
            return $update -> rowCount();
        }

        public function deletar(int $id) : int
        {
            $sql = 'delete from produtos where id = ?';

            try{
                $insert = $this -> conn -> prepare($sql);
                $insert -> bindParam(1, $id);
                $insert -> execute();
            } catch (Exception $e) {
                echo $e -> getMessage();
                die();
            }
        
            return $insert -> rowCount();
        }
    }