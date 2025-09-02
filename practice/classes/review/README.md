# レビュー (2025-09-02)

## 自主練習1

- [オリジナル](review1-base.php)
- [修正](review1-remake.php)
```php
new dog(); // 良くない
new Dog(); // OK
```

## 自主制作２

- [オリジナル](review2-base.php)
- [修正](review2-remake.php)

メソッド内のコードはなるべく短くします。

switch-case文の中にネストしてswitch-case文があると、どのcase文とswitchが対応しているのか非常に見にくくなるため、あまりネストしないようにします。

今回は同じクラスを継承したクラスを複数定義することで、それを回避してみました。

```php
// このクラスをベースにして
abstract class HiroAction {}

// 以下5つのクラスを定義しそれぞれのクラスの中でswitch-caseを定義しました
class HiroAttac extends HiroAction {}
class HiroMagic extends HiroAction {}
class HiroDefence extends HiroAction {}
class HiroEscape extends HiroAction {}
class HiroOther extends HiroAction {}

// Hiroクラスではコンストラクタで定義した5つのクラスをインスタンス化し配列に格納します
$this->actions = [
    new HiroAttac(),
    new HiroMagic(),
    new HiroDefence(),
    new HiroEscape(),
    new HiroOther()
];

// action()メソッドでは乱数でランダムにインスタンスを選択し、インスタンスのactionメソッドを呼び出します。
$action = $this->actions[array_rand($this->actions)];
return $action->action();
```

## 自主学習３
- [オリジナル](review3-base.php)
- [修正](review3-remake.php)

クラスに何をさせたいのか良く考えるようにする。

今回は消費税の計算をさせるクラスだと思いましたので、クラス名から変更してみました。
```php
class TaxCalculator {}
```

コンストラクタで税率を指定出来る(省略可)ようにしました。
```php
public function __construct($taxRate = 0.1) {}
```

金額を設定をするメソッド
```php
public function setPrice($price) {}
```

金額を設定すれば、以下のメソッドが様々な値を返す
```php
public function getPrice();                 // 金額
public function getTax();                   // 税額
public function getTaxRate();               // 税率
public function getPriceWithTax();          // 税込金額
public function getFormatedPrice();         // 金額(カンマ付き)
public function getFormatedPriceWithTax();  // 税込金額(カンマ付き)
```
