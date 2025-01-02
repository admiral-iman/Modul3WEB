<?php

namespace App\Models;

abstract class Vehicle {
    protected $brand;
    protected $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    abstract public function getVehicleType();

    public function __toString() {
        return "Brand: $this->brand, Model: $this->model";
    }
}
