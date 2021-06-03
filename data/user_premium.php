
<?php

require_once __DIR__ . './items.php';


class Premium extends Items
{

    protected $name;
    protected $lastname;
    protected $ID;
}


$user1 = new Premium();
$user1->name = 'Mario';
$user1->lastname = 'Rossi';
$user1->name = 'ID123456';



$user2 = new Premium();
$user2->name = 'Domenico';
$user2->lastname = 'Zummo';
$user2->name = 'ID456123';



$user3 = new Premium();
$user3->name = 'Mauro';
$user3->lastname = 'Bianchi';
$user3->name = 'ID789412';


$user_premium = [$user1, $user2, $user3];


$name_login = '';
$lastname_login = '';
