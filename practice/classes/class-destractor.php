<?php
/**
 * クラスでデストラクタを定義
 */

class SampleClass
{
    public function __construct()
    {
        echo "コンストラクタが呼ばれました。\n";
    }

    public function __destruct()
    {
        echo "デストラクタが呼ばれました。\n";
    }
}

// クラスのインスタンス化
$obj = new SampleClass();

// スクリプト終了時、またはunset時にデストラクタが呼ばれる
//unset($obj);
