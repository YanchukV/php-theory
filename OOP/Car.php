<?php

class Vehicle {

	public $color;
	public $speed;
	public $brand;

	//защищенное свойство - доступ только в наследуемых классах
	//protected $brand;
	//приватное свойство - доступ только в классе где оно объявлено
	//private $brand;


	public function tripTime($distance) {
		$time = $distance / $this -> speed;
		return $time;
	}

//финальный метод - метод который нельзя переопределить
//	final function tripTime($distance) {
//		$time = $distance / $this -> speed;
//		return $time;
//	}


}

//финальный класс- метод который нельзя переопределить
//final class Bycicle extends Vehicle {
//
//
//}

class Bycicle extends Vehicle {

	const CALORIES_PER_HOUR = 500;
	//переопределение переменной
	public $color = 'White';
	public $time;

	public function caloriesBurned($distance) {
		$time = $this -> tripTime($distance);
		$calories = $time * self::CALORIES_PER_HOUR;
		return $calories;
	}
	//переопределение метода
	public function tripTime($distance) {
		$time = parent::tripTime($distance * 1.2);
		return $time;
	}
}

class Car extends Vehicle {

	public $fuel;
	//переопределение переменной
	public $color = 'Green';

	public function fuelConsumption($distance) {

		$result = ($this -> fuel * $distance) / 100;
		return $result;

	}
}

$car1 = new Car;
$car1 -> speed = 110;
$car1 -> fuel = 12;

$car2 = new Car;
$car2 -> speed = 130;
$car2 -> fuel = 14;

$bycicle = new Bycicle;
$bycicle -> speed = 20;

$distance = 100;
echo '<br>Car1 time:'.$car1 -> tripTime($distance);
echo '<br>Car2 time:'.$car2 -> tripTime($distance);
echo '<br>Bycicle time:'.$bycicle -> tripTime($distance);

echo '<br>Car1 fuelConsumption:'.$car1 -> fuelConsumption($distance);
echo '<br>Car2 fuelConsumption:'.$car2 -> fuelConsumption($distance);
echo '<br>Bycicle caloriesBurned:'.$bycicle -> caloriesBurned($distance);