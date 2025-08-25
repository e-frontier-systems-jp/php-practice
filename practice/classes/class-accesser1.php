<?php
/**
 * クラスの内のアクセス権について1
 */

/**
 * 猫を表すクラス
 */
class Cat
{
    /**
     * プライベートプロパティ (外部からアクセス不可です)
     */
    private $name;

    /**
     * パブリックコンストラクタ (外部からアクセス化可能です)
     */
    public function __construct($name)
    {
        echo "外部からインスタンス化可能です\n";

        // 名前を設定する
        $this->setName($name);
    }

    /**
     * 名前を設定します(setter)
     * プライベートメソッド (外部からアクセス不可です)
     */
    private function setName($name)
    {
        $this->name = $name;
    }

    /**
     * 名前を取得します(getter)
     * パブリックメソッド (外部からアクセス可能です)
     */
    public function getName()
    {
        return $this->name;
    }
}

// 猫クラスをインスタンス化します
$cat = new Cat("ぽぽ");

// 名前を出力します
echo $cat->getName();

// 名前を変更することは出来ません -> privateメソッドなので
// $cat->setName("ねね"); // NG
