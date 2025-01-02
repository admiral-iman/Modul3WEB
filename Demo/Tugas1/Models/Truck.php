<?php

namespace App\Models;

use App\Traits\Loggable;

class Truck extends Vehicle {
    use Loggable;

    public function getVehicleType() {
        return "Truck";
    }
}
