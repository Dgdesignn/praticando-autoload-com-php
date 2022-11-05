<?php

    class Produto{
        public $id, $produto;

        public function __construct($id, $produto){
            $this->id = $id;
            $this->produto = $produto;
        }

        public function show(){
            $message = "Id produto {$this->id}";
            $message .= " {$this->produto} <br>";

            return $message;
        }
    }

?>