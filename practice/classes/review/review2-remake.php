<?php

abstract class HiroAction
{
    public function rand($max = 3)
    {
        return rand(1, $max);
    }

    public abstract function action();
}

class HiroAttac extends HiroAction
{
    public function action()
    {
        $case = parent::rand(3);
        switch($case)
        {
            case 1 :
                echo "勇者の攻撃。モンスターに" . rand(1, 50) . "のダメージ。";
                break;
            case 2 :
                echo "勇者の攻撃。会心の一撃！！モンスターに" . rand(50, 100) . "のダメージ。";
                break;
            case 3 :
                echo "勇者の攻撃。モンスターに避けられた。";
                break;
        }
        return true;
    }
}

class HiroMagic extends HiroAction
{
    public function action()
    {
        $case = parent::rand(3);
        switch($case)
        {
            case 1 :
                echo "勇者はメラを唱えた。モンスターに" . rand(10, 30) . "のダメージ。";
                break;
            case 2 :
                echo "勇者はライデインを唱えた。モンスターに" . rand(60, 80) . "のダメージ。";
                break;
            case 3 :
                echo "勇者はベホイミを唱えた。勇者のHPは" . rand(30, 60) . "回復しいた。";
                break;
        }
        return true;
    }
}

class HiroDefence extends HiroAction
{
    public function action()
    {
        echo "勇者は身を守っている。「カッチカッチやぞ」";
        return true;
    }
}

class HiroEscape extends HiroAction
{
    public function action()
    {
        $case = parent::rand(2);
        switch ($case)
        {
            case 1 :
                echo "勇者は逃げ出した。";
                return false;
            default :
                echo "勇者は逃げ出した。しかし回り込まれてしまった。";
                return true;
        }
    }
}

class HiroOther extends HiroAction
{
    public function action()
    {
        $case = parent::rand(2);
        switch($case)
        {
            case 1 :
                echo "勇者はぼーっと空を眺めている。";
                return true;
            default :
                echo "勇者は怖くてウンコを漏らしてしまった。。。。モンスターは逃げ出してしまった。";
                return false;
        }
    }
}


class Hero
{
    private $actions = [];

    public function __construct()
    {
        $this->actions = [
            new HiroAttac(),
            new HiroMagic(),
            new HiroDefence(),
            new HiroEscape(),
            new HiroOther()
        ];
    }

    public function action()
    {
        $action = $this->actions[array_rand($this->actions)];
        return $action->action();
        
        // 以下の記述でも同等
        return $this->actions[array_rand($this->actions)]->action();
    }
}

header("Content-Type: text/html; charset=UTF-8");

$hero = new Hero();

while (true)
{
    if (!$hero->action())
    {
        break;
    }
    echo "<br />\n";
}
