<?php
    class Produto{
        private string $nome;
        private float $preco;
        private int $quantidade;

        public function __construct($nome, $preco, $qtd){
            $this->nome = $nome;
            $this->preco = $preco;
            $this->peso = $peso;
        }

        public function getNome():string{
            return $this->nome;
        }

        public function getPreco():float{
            return $this->preco;
        }

        public function getQuantidade():int{
            return $this->quantidade;
        }

        public function setQuantidade(int $quant){
            $this->quantidade = $quant;
        }
    }
?>