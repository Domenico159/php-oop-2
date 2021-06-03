<!-- Items -->

<?php

require_once __DIR__ . '/user_premium.php';

$loginID = 'ID789412';  // ID PREMIUM ID789412 --- ID456123

class Items
{

    public $name;
    public $details;
    public $img;
    public $price;



    // Construct

    function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }



    // Funcions

    public function getText()
    {
        $sub = substr($this->details, 0, 250);
        return $sub;
    }

    public function getSconto($perc)
    {

        $sconto = $this->price - ($this->price * $perc / 100);
        return number_format($sconto, 2);
    }

    public function getPrice($ID, $array)
    {
        if (in_array($ID, $array)) {
            return $this->getSconto(20);
        } else {
            return $this->price;
        }
    }

    public function getPremium($ID, $array)
    {
        if (in_array($ID, $array)) {
            return  'Clinte premium , hai il 20% di sconto';
        } else {
            return  'Se ti abboni puoi avere il 20% di sconto su tutto!!!';
        }
    }
}
