<?php

//クラスを宣言→インスタンス化
//メソッド = クラス内で宣言された関数
//クラスの継承を行う。もともとあるクラスを引き続き使うことが出来る。

class Car//親クラス
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

class Taxi extends Car//Taxiはサブクラス。{}内は空白に見えるがCarの内容を引き継いでいる。
{
  public $fare;

  public function go()
  {  
  	 parent::go();//親クラスのプロパティにアクセスが出来る。
     $this->fare += 90;
  }
}
$myTaxi = new Taxi;//Taxiクラスを元にしてインスタンス(実体)を作る。

// echo $myTaxi->gasoline;

$myTaxi->go();
$myTaxi->go();
$myTaxi->go();

echo '現在の運賃は'. $myTaxi->fare . '円です';