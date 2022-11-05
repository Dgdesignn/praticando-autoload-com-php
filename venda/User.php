<?php

    class User{
        public $nome, $idade;

        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->$idade = $idade;
        }


        public function show(){
            $message = 'Nome'.$this->nome.'<br>';
            $message .= 'Idade'.$this->idade.'<br>';

            return $message;
        }
    }

?>