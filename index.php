<?php

//クラスを宣言→インスタンス化
//メソッド = クラス内で宣言された関数
//クラスの継承を行う。もともとあるクラスを引き続き使うことが出来る。
//定数とself::
//会計機能の追加
//コンストラクタ;インスタンス化した時に最初に呼び出される関数。

class Car//親クラス
{
	public $gasoline = 30;//プロパティ
    
    public function __construct($gasoline)//アンダーバー2つを忘れない!
    {
    	$this->gasoline = $gasoline;
    }

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
  const STARTING_FARE = 730;//定数はすべて大文字で記入。
  public $fare = self::STARTING_FARE;//self::で定数にアクセス出来る。

  public function go()
  {  
  	 parent::go();//親クラスのプロパティにアクセスが出来る。
     $this->fare += 90;
  }

  public function checkout()
  {
  	echo 'お会計は' . $this->fare . '円です<br>';
  	$this->fare = self::STARTING_FARE;
  }
}
$myTaxi = new Taxi(50);//Taxiクラスを元にしてインスタンス(実体)を作る。
$myTaxi->go();

$myTaxi2 = new Taxi(20);//Taxiクラスを元にしてインスタンス(実体)を作る。
$myTaxi2->go();
