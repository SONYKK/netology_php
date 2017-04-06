<?php
echo '1. Инкапсуляция - принцип ООП, позволяющий скрывать одни сущности внутри другой, чтобы защитить их от перезаписи или ошибочного использования.'.'</br>';
function aboutOOP ()
{
    return '2. Плюсы ООП: четкая структура кода, наглядность, можно использовать один код для решения разных типов задач, проще разобраться в написанном.
    Минусы: много кода.очень.';
}
echo aboutOOP();
Class Car
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
$bmwM3 = new Car();
$audiR8 = new Car();

Class TV
{
public $matrix;
public $channelCount;
public $inch;

    public function tvOn()
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
Class Pen
{
public $colour;
public $material;

    public function inkUp()
    {
        // Как заправить ручку чернилами

    }
}
$black = new Pen();
$blue = new Pen();
Class Duck
{
    const DUCKSOUND = 'Кряяя';
    public $canFly;
    public $feathers;
    public $meat;

    public function howToGrow()
    {
        // что делать с уткой
    }

}
$indianRunner = new Duck();
$pekinDuck = new Duck();
Class Product
{
public $id;
public $name;
public $characteristics;
public $price;
public $discount;

    public function getNewPrice()
    {
        // рассчет скидки на товар
        return 'Цена со скидкой...';
}
}
$asusLaptop = new Product();
$dellLaptop = new Product();
