<?php

    
    // Armazenamento de varieaveis
    class Usuario {
        private $user;
        private $senha;
        private $email;
    

        public function __construct($user, $senha, $email) {
            $this->user = $user;
            $this->senha = $senha;
            $this->email = $email;

        }
    
        //Getter para obter o usuario
        public function getUsuario() {
            return $this->user;
        }

        //Getter para obter a senha
        public function getSenha() {
            return $this->senha;

        }

        //Getter para obter o Email
        public function getEmail() {
            return $this->email;
        }
        
        
        //Verificador da senha
        public function verificarSenha($senha) {
            return $this->senha === $senha;
        }

        
        //Saida de dados do user
        public function exibirUser() {
            echo "User: " . $this->getUsuario() . "<br>";
            echo "Email: " . $this->getEmail() . "<br>";
            echo "Senha: ". $this->getSenha() . "<br>";
        } 

    }

?>