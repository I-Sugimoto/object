<?php

// static(静的)なプロパティとメソッドについて
// インスタンス化しなくても呼び出せる
// タクシーの生産台数(インスタンスの数)を調べる

class Car
{
    protected $gasoline;

    public function __construct($gasoline)
    {
        $this->gasoline = $gasoline;
    }

    public function go()
    {
        if ($this->gasoline > 0)
        {
            echo '車が走りました！ ';
            $this->gasoline--;
            echo '残りのガソリンは' . $this->gasoline . 'Lです<br>';
        }
        else
        {
            echo '給油してください！<br>';
        }
    }

    public function supply($litter)
    {
        $this->gasoline += $litter;
        echo $litter . 'L給油しました。残りのガソリンは' . $this->gasoline . 'Lです！<br>';
    }

}

class Taxi extends Car
{
    const STARTING_FARE = 730;
    private $fare = self::STARTING_FARE;

    public static $numberOfTaxis = 0;

    public function __construct($gasoline)
    {
        $this->gasoline = $gasoline;
        self::$numberOfTaxis++;
    }

    public static function countTaxis()
    {
        echo 'タクシーの生産台数は' . self::$numberOfTaxis . '台です<br>';
    }

    public function go()
    {
        parent::go();
        $this->fare += 90;
    }

    public function checkout()
    {
        echo 'お会計は' . $this->fare . '円です<br>';
        $this->fare = self::STARTING_FARE;
    }

}

// echo Taxi::$numberOfTaxis;

$myTaxi1 = new Taxi(50);
$myTaxi2 = new Taxi(50);
$myTaxi3 = new Taxi(50);

Taxi::countTaxis();
