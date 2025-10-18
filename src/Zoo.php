<?php

namespace Zoo;

class Zoo
{
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function listAnimals(): string
    {
        if (empty($this->animals)) {
            return "В зоопарке пока нет животных.";
        }

        $output = "Животные в зоопарке:\n";
        foreach ($this->animals as $index => $animal) {
            $output .= ($index + 1) . ". " . $animal->getInfo() . "\n";
        }

        return $output;
    }

    public function animalSounds(): string
    {
        if (empty($this->animals)) {
            return "В зоопарке пока нет животных.";
        }

        $output = "Звуки животных:\n";
        foreach ($this->animals as $index => $animal) {
            $output .= ($index + 1) . ". {$animal->getName()} говорит: {$animal->makeSound()}\n";
        }

        return $output;
    }

    public function getAnimalCount(): int
    {
        return count($this->animals);
    }
}