<?php

require_once 'Vehicule.php';

class Truck extends Vehicule
{
    private int $storageCapacity;
    private int $load = 0;
    private string $energy;
    
    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
    }
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }
    public function getLoad(): int
    {
        return $this->load; 
    }
    public function setLoad(int $load): void
    {
        $this->load = $load;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }
    public function full(): string
    {
        if($this->load < $this->storageCapacity){
            return "in filling";
        }else{
            return "full";
        }
    }
}