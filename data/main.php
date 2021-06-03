<!-- Items -->

<?php


class Items
{

    public $name;
    public $details;
    public $img;
    public $price;



    // Funcions

    public function getText()
    {
        $sub = substr($this->details, 0, 250);

        return $sub;
    }
}
