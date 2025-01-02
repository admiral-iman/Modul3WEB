<?php

namespace App\Models;

use App\Traits\Loggable;

class Car extends Vehicle {
    use Loggable;

    public function getVehicleType() {
        return "Car";
    }
}
