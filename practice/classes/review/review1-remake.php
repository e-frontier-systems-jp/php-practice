<?php

//自主練習1
class Dog
{
    private $likeItem;

    public function cry()
    {
        echo 'ワン';
    }

    public function eat()
    {
        echo 'ムシャムシャムシャ';
    }

    public function getLikeItem()
    {
        return $this->likeItem;
    }

    public function setLikeItem($likeItem)
    {
        $this->likeItem = $likeItem;
    }    
}

$dog = new Dog(); // <= なるべく定義と同じ大文字から始める
$dog->cry();
$dog->eat();

$dog->setLikeItem('ボール');
echo '私の犬は' . $dog->getLikeItem() . 'が好きです。';
