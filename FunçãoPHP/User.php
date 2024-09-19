<?php

    // Definindo classe para o user
    class User {
        private $user;
        private $password;
        private $email;
    
        //Construtor
        public function __construct($user, $password, $email) {
        $this->user = $user;
        $this->password = $password;
        $this->email = $email;
        }

        // Getters
        public function getUser() {
            return $this->user;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getEmail() {
            return $this->email;
        }

        // Verificador de Senhas
        public function verificarSenha($password) {
            return $this->password === $password;
        }

    }