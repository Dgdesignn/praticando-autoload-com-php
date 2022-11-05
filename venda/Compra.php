<?php

    class Compra{
        public $id, $produtos, $user;

        public function __construct(array $produtos, User $user){
            $this->id = rand(0, 100);
            $this->produtos = $produtos;
            $this->user = $user;
        }

        public function show(){
            $message = "Compra id $this->id <hr>";
            $message .="Produto <br>";

            foreach($this->produtos as $produto){
                $message .= $produto->show();
            }
            $message .="<hr>";
            $message .=$this->user->show();

            return $message;

        }
    }

?>