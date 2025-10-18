<?php

require_once 'vendor/autoload.php';

use Zoo\Dog;
use Zoo\Cat;
use Zoo\Zoo;

// Создаем животных
$dog1 = new Dog("Граф", 3, "Лабрадор");
$dog2 = new Dog("Рекс", 5, "Овчарка");
$cat1 = new Cat("Дракула", 2, "Серый");
$cat2 = new Cat("Ляся", 1, "Рыжий");

$zoo = new Zoo();

$zoo->addAnimal($dog1);
$zoo->addAnimal($dog2);
$zoo->addAnimal($cat1);
$zoo->addAnimal($cat2);


echo "<h1>Добро пожаловать в наш зоопарк!</h1>";

echo "<h2>Список животных:</h2>";
echo "<pre>" . $zoo->listAnimals() . "</pre>";

echo "<h2>Звуки животных:</h2>";
echo "<pre>" . $zoo->animalSounds() . "</pre>";

echo "<p>Всего животных в зоопарке: " . $zoo->getAnimalCount() . "</p>";
echo "<h2>Подробная информация:</h2>";
echo "<p>{$dog1->getInfo()} - звук: {$dog1->makeSound()}</p>";
echo "<p>{$cat1->getInfo()} - звук: {$cat1->makeSound()}</p>";