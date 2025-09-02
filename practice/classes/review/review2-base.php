<?php

//自主制作２
class Hero
{
    private $actions = ['attac', 'magic', 'defence', 'escape', 'other'];

    public function action()
    {
        $action = $this->actions[array_rand($this->actions)];
        $case = rand(1, 3);
        switch($action) 
        {
            case 'attac' :
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
                break;
            case 'magic' :
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
                break;
            case 'defence' :
                echo "勇者は身を守っている。「カッチカッチやぞ」";
                break;
            case 'escape' :
                switch ($case)
                {
                    case 1 :
                        echo "勇者は逃げ出した。";
                        break;
                    default :
                        echo "勇者は逃げ出した。しかし回り込まれてしまった。";
                        break;
                }
                break;
            case 'other' :
                switch($case)
                {
                    case 1 :
                        echo "勇者はぼーっと空を眺めている。";
                        break;
                    default :
                        echo "勇者は怖くてウンコを漏らしてしまった。。。。モンスターは逃げ出してしまった。";
                        break;
                }
                break;

        }
    }
}

$hero = new Hero();
$hero->action();
