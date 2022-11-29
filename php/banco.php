<?php
    Class Conexao {
        private $pdo;
        public function conectar ($bd, $host, $user,$senha){
           try {
                $pdo = new PDO ('mysql:host=' .$host. ';dbname=' .$bd,$user,$senha);
           } catch (PDOException $erro){
               die ("Erro .<code>" . $erro->getMessage() . "</code>");
           }
            return ($pdo);
        }
  }

?>