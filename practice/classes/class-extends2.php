<?php
/**
 * クラスの継承
 *     - メソッドのオーバーライド
 */

/**
 * ペットを表すクラスの定義
 */
class Pet
{
    /**
     * ペットの名前
     */
    private $name;

    /**
     * コンストラクタ
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
        echo "\n";
    }
}

// ここまではこれまで通り・・・

/**
 * 猫を表すクラスの定義
 */
class Cat extends Pet
{
    /**
     * 鳴くメソッド
     */
    public function cry()
    {
        echo "にゃ～\n";
    }
}

/**
 * 犬を表すクラスの定義
 */
class Dog extends Pet
{
    /**
     * 鳴くメソッド
     */
    public function cry()
    {
        echo "わんわん\n";
    }
}


$pet1 = new Cat("ぽぽ");
echo $pet1->getName();
$pet1->cry();

$pet2 = new Dog("ジョン");
echo $pet2->getName();
$pet2->cry();
