<?php

//クラスを宣言→インスタンス化
//メソッド = クラス内で宣言された関数

class Car
{
	public $gasoline = 30;//プロパティ

	public function go()//メソッドの宣言
	{
		if($this->gasoline > 0)
		{
			echo '車が走りました!';
			$this->gasoline--;//そのクラス内での関数にアクセス出来る。
			echo '残りのガソリンは'. $this->gasoline . 'Lです<br>';
	     }
	     else
	     {
            echo '給油してください!<br>';
	     }
    }
	public function supply($litter)
	{
		$this->gasoline += $litter;
		echo $litter . 'L給油しました。残りのガソリンは'. $this->gasoline . 'Lです<br>';
	}	 

}

$myCar = new Car;//Carというクラス(設計図)を元にしてインスタンスを作る。

for ($i = 0; $i < 50; $i++)
{
    $myCar->go();
}

$myCar->supply(10);