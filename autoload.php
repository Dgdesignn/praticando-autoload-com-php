<?php
spl_autoload_register(
    function($path){
        if(file_exists('venda/'.$path.'.php')){
            require_once('venda/'.$path.'.php');
        }
    }
);


?>