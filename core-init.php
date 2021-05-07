<?php 

if ( ! defined( 'WPINC' ) ) {die;} // end if

use App\Models\App;

require_once "vendor/autoload.php";

$app = new App();
$app->run();


