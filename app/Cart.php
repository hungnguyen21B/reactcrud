<?php

namespace App;


class Cart
{
    public $id_Pro;
    public $quantity;
    public $id_Cus;

    public function __construct($id_Cus, $id_Pro, $quantity)
    {
        $this->id_Cus = $id_Cus;
        $this->id_Pro = $id_Pro;
        $this->quantity = $quantity;
    }
}
