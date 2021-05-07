<?php

namespace App\Models;

use App\Controllers\AssetController;

class App {

    public function run() {
        AssetController::registerAssets();
    }
}
