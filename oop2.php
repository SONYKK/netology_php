<?php
echo '1. Полиморфизм - способность объекта одного класса использовать методы нового еще не созданного класса.'.'</br>';
echo 'Наследование - способность класса использовать все свойства и методы другого класса'.'</br>';

echo '2. Абстрактный класс имеет неопределенный метод, наследуется, используется для упрощения дублирующегося кода.' .'</br>'.
'Интерфейс - содержит только методы без реализации их содержимого, 
реализуется обязательно для всех имплементируемых классов, задает обязательные методы.' .'</br>';



Class Car
{
    public $color;

}
interface AutoInterface
{
    public function drive();
}
Class Auto extends Car implements AutoInterface
{
public $wheals;
public $engine;
public $mirror;
public $glasses;
public $carBody;
public $interior;

    public function drive()
    {
        // много_кода_о_движении_машины
        return 'Автомобиль движется';
}

    public function takeFuel()
    {
        // много_буков_о_заправке
        return 'Полный бак';
}

}
$bmwM3 = new Auto();
$audiR8 = new Auto();

abstract Class Electronics implements ElectronicsInterface
{
    public $title;
    public $price;

    abstract function makeOn();
}
interface ElectronicsInterface
{
    public function makeOn();
}
Class TV extends Electronics
{
public $matrix;
public $channelCount;
public $inch;

    public function makeOn()
    {
        // Инструкция по включению
        return 'Телевизор включен';
    }

    public function hdmiConnect()
    {
        // нструкция по подключению HDMI
        return 'HDMI кабель подключен';
}
}
$samsung = new TV();
$lg = new TV();
Class Laptop extends Electronics
{
    public $id;
    public $characteristics;
    public $discount;

    public function makeOn()
    {
        // Инструкция по включению
        return 'Планшет включен';
    }

    public function getNewPrice()
    {
        // рассчет скидки на товар
        return 'Цена со скидкой...';
    }
}
$asusLaptop = new Laptop();
$dellLaptop = new Laptop();
Class Stationery
{
    public $colour;
    public $material;
}
interface StationaryInterface
{
    public function inkUp();
}
Class Pen extends Stationery implements StationaryInterface
{
    public function inkUp()
    {
        // Как заправить ручку чернилами

    }
}
$black = new Pen();
$blue = new Pen();
interface BirdInterface
{
    public function makeSound();
}

Class Bird implements BirdInterface
{
    public $canFly;
    public $feathers;
    public $color;
    public $sound = 'some sound';

    public function makeSound()
    {
        return 'Издает звук' . $this->sound;
    }
}

Class Duck extends Bird
{
    public $sound = 'Кряяя';

    public $meat;

    public function howToGrow()
    {
        // что делать с уткой
    }

}
$indianRunner = new Duck();
$pekinDuck = new Duck();
Class Pigeon extends Bird
{
    public $sound = 'Курлы-курлы';

}
$pigeon = new Pigeon();


