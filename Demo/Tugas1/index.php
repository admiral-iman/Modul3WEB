<?php

// Meng-include semua file yang diperlukan
require 'Traits/Loggable.php';
require 'Models/Vehicle.php';
require 'Models/Car.php';
require 'Models/Truck.php';
require 'Controllers/CarController.php';

use App\Controllers\CarController;

$carController = new CarController();
$carController->showVehicles();
