<?php

    require_once "./vendor/autoload.php";


    $user1 = new User('Eliseu',18);

    $produto1 = new Produto(1, 'Dell Lat533');
    $produto2 = new Produto(2, 'Iphone 14 Pro max');

    $compra = new Compra(array('p1'=>$produto1, 'p2'=>$produto2),$user1);


    echo $compra->show();

?>