<?php
    class Evento {
        private $nome;
        private $descricao;
        private $dtConclusao;
        private $status;

        // Construtor
        public function __construct($nome, $descricao, $dtConclusao, $status) {
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->dtConclusao = $dtConclusao;
            $this->status = $status;
        }

        // Getters
        public function getNome() {
            return $this->nome;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function getDtConclusao() {
            return $this->dtConclusao;
        }

        public function getStatus() {
            return $this->status;
        }

        // Setters
        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function setDtConclusao($dtConclusao) {
            $this->dtConclusao = $dtConclusao;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        // Método para exibir as informações do evento
        public function exibirEvento() {
            echo "Nome do Evento: " . $this->getNome() . "<br>"; 
            echo "Detalhamento do Evento: " . $this->getDescricao() . "<br>";
            echo "Data da Conclusão: " . $this->getDtConclusao() . "<br>";
            echo "Status: " . $this->getStatus() . "<br>";
            
            // Lógica de decisão baseada no status
            if ($this->getStatus() == "Concluso") {
                echo "Evento finalizado com sucesso<br>";
            } elseif ($this->getStatus() == "Em Andamento") {
                echo "Projeto ainda em andamento, Let's Go!<br>";
            } elseif ($this->getStatus() == "Pendente") {
                echo "Falta pouco<br>";
            } else {
                echo "Erro de Status X(";
            }
        }
    }
?>