<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(1);
        $this->setMaxSpeed(10);
    }
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard){
            $this->currentVehicles[] = $vehicle;
        }
    }
}