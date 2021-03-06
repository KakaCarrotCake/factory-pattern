<?php
namespace App\Classes;

use App\Contracts\Vehicle;

abstract class ConcreteVehicle implements Vehicle
{
    protected $wheels;
    protected $speed;
    protected $colour;
    protected $name;

    public function setWheels(int $wheels): void
    {
        $this->wheels = (int) $wheels;
    }

    public function setSpeed(int $speed): void
    {
        $this->speed = (int) $speed;
    }

    public function setColour(string $colour): void
    {
        $this->colour = (string) $colour;
    }

    public function setName (string $name): void
    {
        $this->name = (string) $name;
    }

    public function getWheels(): int
    {
        return $this->wheels;
    }

    public function getSpeed(): int
    {
        return (int) $this->speed;
    }

    public function getColour(): string
    {
        return (string) $this->colour;
    }

    public function getName (): string
    {
        return (string) $this->name;
    }
}