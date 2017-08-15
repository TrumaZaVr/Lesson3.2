<?php

class SuperObject
{
    public $name;
    public $colour;
    public function __construct($name, $colour)
    {
        $this->name = $name;
        $this->colour = $colour;
    }
    public function getInfo()
    {
        echo $this->name . PHP_EOL;
        echo $this->colour . PHP_EOL;
        echo "<br />";
    }
}

interface CarInfo
{
    public function getInfo();
}

interface TvInfo
{
    public function getInfo();
}

interface PenInfo
{
    public function getInfo();
}

interface DucInfo
{
    public function getInfo();
}

class car extends SuperObject implements CarInfo
{
    public $brand;
    public $type;
    public $price;

    public function __construct($brand, $name, $colour, $type, $price)
    {
        parent::__construct($name, $colour);
        $this->brand = $brand;
        $this->type = $type;
        $this->price = $price;
    }
    public function getInfo()
    {
        echo $this->brand . PHP_EOL;
        echo $this->name . PHP_EOL;
        echo $this->colour . PHP_EOL;
        echo $this->type . PHP_EOL;
        echo $this->price . PHP_EOL;
        echo "<br />";
    }

}
echo ' <b>—писок автомобилей:</b> <br/>';
$carOne = new Car('BMW','324', 'черный', 'купэ', 3500);
$carOne-> getInfo ();

$carTwo = new Car('Mercedes','320', 'белый', 'седан', 4000);
$carTwo-> getInfo ();

class TV extends SuperObject implements TVInfo
{
    public $brand;
    public $type;
    public $price;
    public function __construct($brand, $name, $colour, $type, $price)
    {
        parent::__construct($name, $colour);
        $this->brand = $brand;
        $this->type = $type;
        $this->price = $price;
    }

    public function getInfo()
    {
        echo $this->brand . PHP_EOL;
        echo $this->name . PHP_EOL;
        echo $this->colour . PHP_EOL;
        echo $this->type . PHP_EOL;
        echo $this->price . PHP_EOL;
        echo "<br>";
    }
}
echo ' <b>—писок теливизоров:</b> <br/>';
$TVOne = new TV('SUMSUNG','UE65KS7500U', 'Black','QLED TV', '35000');
$TVOne-> getInfo ();
$TVTwo = new TV('LG','55LH609V', 'Silver','LED', '29000');
$TVTwo-> getInfo ();

class Pen extends SuperObject implements PenInfo

{
    public $brand;
    public $price;
    public function __construct($brand,$name, $colour, $price)
    {
        parent::__construct($name, $colour);
        $this->brand = $brand;
        $this->price = $price;
    }
    public function getInfo ()
    {
        echo $this -> brand . PHP_EOL;
        echo $this -> name . PHP_EOL;
        echo $this -> colour . PHP_EOL;
        echo $this -> price . PHP_EOL;
        echo "<br>";
    }
}
echo ' <b>—писок Ўариковых ручек:</b> <br/>';
$PenOne = new Pen('Parker','Eleganto','Tactical Grey Green BP', '900');
$PenOne-> getInfo ();
$PenTwo = new Pen('Pilot', 'Pilot MR','Wildness Silver', '1215');
$PenTwo-> getInfo ();

class Duc extends SuperObject implements DucInfo
{
    public $mainland;
    public $total_length;
    public function __construct($name, $mainland, $total_length, $colour)
    {
        parent::__construct($name,$colour);
        $this->mainland = $mainland;
        $this->total_length = $total_length;
    }
    public function getInfo ()
    {
        echo $this -> name . PHP_EOL;
        echo $this -> mainland . PHP_EOL;
        echo $this -> total_length . PHP_EOL;
        echo $this -> colour . PHP_EOL;
        echo "<br>";
    }
}
echo ' <b>”тки мира:</b> <br/>';
$DucOne = new Duc('Mergellus albellus','Eurasia', '38Ч44 см','Grey');
$DucOne-> getInfo ();
$DucTwo = new Duc('Dendrocygna bicolor','Africa', '45Ч53 см','Brown');
$DucTwo-> getInfo ();

