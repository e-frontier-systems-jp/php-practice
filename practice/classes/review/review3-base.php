<?php

//自主学習３
class Sell
{
    private $tax = 1.1;
    private $price;

    public function itemPrice()
    {
        echo intval($this->price * $this->tax);
    }

    public function getItem($price)
    {
        return $this->price = $price;
    }
}

$sell = new Sell();
$sell->getItem(rand(0, 1000000));
echo $sell->itemPrice();
