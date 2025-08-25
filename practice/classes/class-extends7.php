<?php
/**
 * クラスの継承
 *     - protected
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
    
    /**
     * 走るメソッド
     */
    protected function run()
    {
        echo "ダンダンダン！ダー！ダ！ダン！ダー！ダ！ダン！\n";
    }

    /**
     * 軽く突くメソッド
     */
    public function poke()
    {
        // 驚いて鳴く
        $this->cry();

        // そして、走る
        $this->run();
    }
}

/**
 * 猫型ロボットを表すクラスの定義
 */
class CatRobot extends Pet
{
    /**
     * 鳴くメソッド
     */
    public function cry()
    {
        echo "にゃ～\n";
    }

    /**
     * 走るメソッド
     */
    protected function run()
    {
        echo "サササ\n";
    }
}

/**
 * 犬型ロボットを表すクラスの定義
 */
class DogRobot extends Pet
{
    /**
     * 鳴くメソッド
     */
    public function cry()
    {
        echo "わんわん\n";
    }

    /**
     * 走るメソッド
     */
    protected function run()
    {
        echo "タタタタ\n";
    }
}

/**
 * ハムスター型ロボットを表すクラスの定義
 */
class HamsterRobot extends Pet
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
    protected function run()
    {
        echo "カラカラカラ\n";
    }
}


$pet1 = new CatRobot("ぽぽ");
echo $pet1->getName();
$pet1->poke();

$pet2 = new DogRobot("ジョン");
echo $pet2->getName();
$pet2->poke();

$pet3 = new HamsterRobot("ハム");
echo $pet3->getName();
$pet3->poke();
