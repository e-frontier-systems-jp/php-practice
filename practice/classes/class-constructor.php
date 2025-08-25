<?php
/**
 * クラスのコンストラクタ
 */

/**
 * 猫のクラス
 */
class Cat
{
    /**
     * 名前を保持するプロパティ
     */
    private $name;

    /**
     * コンストラクタ
     * 
     * @param $name 名前を指定する
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 名前を返すメソッド
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 鳴くメソッド
     */
    public function cry()
    {
        echo "にゃ～\n";
    }
}

// 「ぽぽ」という猫をインスタンス化する
$popo = new Cat('ぽぽ');
// 「ねね」という猫をインスタンス化する
$nene = new Cat('ねね');

// 名前を取得して表示する
echo $popo->getName();
// 鳴かせる
echo $popo->cry();
// 名前を取得して表示する
echo $nene->getName();
// 鳴かせる
echo $nene->cry();
