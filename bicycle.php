<?php

class Bicycle
{
    public string $color;
    public int $currentSpeed;
    public int $nbSeats = 1;
    public int $nbWheels = 2;
    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }
    public function brake(): string 
    {
        $sentence= "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function dump()
    {
        var_dump($this);
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
    public function __construct(string $color)
    {
        $this->color = $color;
    }
}

class Car
{
    public int $nbWheels = 4;
    public int $currentSpeed = 0;
    public string $color;
    public int $nbSeats;
    public string $energy;
    public int $energyLevel;
    public function dump()
    {
        var_dump($this);
    }
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    public function start(): string
    {
        if ($this->energyLevel > 0){
        return "La voiture démarre";
        }else{
        return "La voiture ne démarre pas";
        }
    }
    public function forward(): string
    {
        if ($this->currentSpeed < 15){
            return "La voiture accelére";
        }
    }
    public function brake(): void
    {
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
        }
    }
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels; 
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}