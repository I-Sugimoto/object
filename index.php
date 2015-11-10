<?php

//クラスを宣言→インスタンス化


class Car
{
	public $gasoline = 30;//プロパティ
}

$myCar = new Car;//Carというクラス(設計図)を元にしてインスタンスを作る。

echo $myCar->gasoline;