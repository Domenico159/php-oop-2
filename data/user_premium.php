
<?php

require_once __DIR__ . './items.php';



class Users
{

    public $name;
    public $lastname;
    public $ID;
    public $premium;
}


$user1 = new Users();
$user1->name = 'Mario';
$user1->lastname = 'Rossi';
$user1->ID = 'ID123456';



$user2 = new Users();
$user2->name = 'Domenico';
$user2->lastname = 'Zummo';
$user2->ID = 'ID456123';



$user3 = new Users();
$user3->name = 'Mauro';
$user3->lastname = 'Bianchi';
$user3->ID = 'ID789412';

$users_premium = ['ID789412', 'ID456123'];



$items = [$item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8];
