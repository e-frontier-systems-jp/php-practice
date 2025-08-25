<?php
/**
 * クラスの内のアクセス権について2
 *      - static キーワード
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
     * パブリックコンストラクタ (外部からアクセス化不可です)
     */
    private function __construct($name)
    {
        echo "外部からインスタンス化不可です\n";

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

    /**
     * 餌を与える
     * パブリックメソッド
     */
    public function feed()
    {
        $this->cry();
    }

    /**
     * 鳴くメソッド
     * パブリックメソッド
     */
    public function cry()
    {
        echo "みゃ～\n";
    }

    /**
     * 子猫を産むメソッド
     * パブリックスタティックメソッド
     * 
     * static キーワードを付けるとインスタンス化しなくても呼び出せるメソッドを作成できる。
     */
    public static function giveBiarth($name)
    {
        // ※ 制限
        // インスタンス化しなくても呼べる = インスタンスが無い = $this は使えない
        // $this->setName($name); // NG
        // $this->name = $name // NG

        // ここはCatクラスの中なのでprivateなコンストラクタにアクセス出来る。
        return new Cat($name);
    }
}

// 猫クラスをインスタンス化出来ません
// $cat = new Cat("ぽぽ"); // NG
// 👆では猫を新しく作るという文脈にしかならないが、
// 👇では猫が「ぽぽ」という名前の子猫を産む。というニュアンスの文脈に変えられる！！
// 呼び出し方は「クラス名::メソッド名()」アロー(->)ではないので注意。
$cat = Cat::giveBiarth("ぽぽ");

// 名前を出力します
echo $cat->getName();

// 名前を変更することは出来ません -> privateメソッドなので
// $cat->setName("ねね"); // NG

// 餌を与えます => 喜んで鳴きます
$cat->feed();

// 直接鳴かす事も出来ます
$cat->cry();
