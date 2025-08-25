<?php
/**
 * クラスの継承
 *     - メソッドの追加
 */

/**
 * ペットを表す抽象クラスの定義
 */
abstract class Pet
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
     * 鳴く抽象メソッド
     * 継承先クラスで必ず実装しなければいけない！
     */
    public abstract function cry();
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

// 👇 NG => cry()抽象メソッドを定義していないため
//class Ferret extends Pet
//{
//}

/**
 * ハムスターを表すクラスの定義
 */
class Hamster extends Pet
{
    /**
     * 鳴くメソッド
     */
    public function cry()
    {
        echo "チュー\n"; // 鳴きますっけ？？
    }

    /**
     * 走るメソッド
     */
    public function run()
    {
        echo "カラカラカラ";
    }
}


// NG
// $pet = new Pet("誰だよ？");
// echo $pet->getName();
// $pet->cry();

$pet1 = new Cat("ぽぽ");
echo $pet1->getName();
$pet1->cry();

$pet2 = new Dog("ジョン");
echo $pet2->getName();
$pet2->cry();

$pet3 = new Hamster("ハム");
echo $pet3->getName();
$pet3->cry();
$pet3->run(); // Hamsterだけが使える
