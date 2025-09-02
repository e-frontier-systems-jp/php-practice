<?php

//自主学習３
class TaxCalculator
{
    private $taxRate;
    private $price;

    public function __construct($taxRate = 0.1)
    {
        $this->taxRate = $taxRate;
    }


    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getTax()
    {
        return intval($this->price * $this->taxRate);
    }

    public function getTaxRate()
    {
        return $this->taxRate;
    }

    public function getPriceWithTax()
    {
        return intval($this->price + $this->price * $this->taxRate);
    }

    public function getFormatedPrice()
    {
        return number_format($this->getPrice());
    }

    public function getFormatedPriceWithTax()
    {
        return number_format($this->getPriceWithTax());
    }
}

$calc = new TaxCalculator();
$calc->setPrice(rand(0, 10000000));

$eol = "<br />\n";
header("Content-Type: text/html; charset=UTF-8");

echo "価格：". $calc->getPrice(). $eol;
echo "税額：". $calc->getTax(). $eol;
echo "税込：". $calc->getPriceWithTax(). $eol;
echo "税率：". $calc->getTaxRate(). $eol;
echo "価格：". $calc->getFormatedPrice(). $eol;
echo "税込：". $calc->getFormatedPriceWithTax(). $eol;
