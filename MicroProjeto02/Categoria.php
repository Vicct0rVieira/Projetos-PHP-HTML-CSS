<?php

    class Categoria {
        private $nome;
        private $descricao;

        // Construtor para inicializar nome e descrição
        public function __construct($nome, $descricao) {
            $this->nome = $nome;
            $this->descricao = $descricao;
        }

        // Getter para obter o nome da categoria do evento
        public function getNome() {
            return $this->nome;
        }

        // Getter para obter a descrição do evento
        public function getDescricao() {
            return $this->descricao;
        }

        // Setter para definir o nome da categoria
        public function setNome($nome) {
            $this->nome = $nome;
        }

        // Setter para definir a descrição da categoria
        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        // Método para exibir a descrição da categoria
        public function exibirDescricao() {
            echo "Categoria do Evento: " . $this->getNome() . "<br>";
            echo "Detalhamento: " . $this->getDescricao() . "<br>";
        }
    }

?>