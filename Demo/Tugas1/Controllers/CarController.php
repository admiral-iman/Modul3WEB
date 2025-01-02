<?php

namespace App\Controllers;

use App\Models\Car;
use App\Models\Truck;

class CarController  {
    public function showVehicles() {
        $car = new Car("Toyota", "Camry");
        $truck = new Truck("Ford", "F-150");

        echo $car . "\n";
        echo "Tipe Kendaraan: " . $car->getVehicleType() . "\n";
        $car->log("Car created.");

        echo $truck . "\n";
        echo "Tipe Kendaraan: " . $truck->getVehicleType() . "\n";
        $truck->log("Truck created.");
    }
}
