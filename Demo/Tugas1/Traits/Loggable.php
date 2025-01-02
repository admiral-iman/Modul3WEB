<?php

namespace App\Traits;

trait Loggable {
    public function log($message) {
        echo "[LOG] " . $message . "\n";
    }
}
