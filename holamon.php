<?php

namespace com\iesebre\dam2\pa201415\albert;


require "./vendor/autoload.php";

use com\iesebre\dam2\pa201415\albert\SayHello;
use Illuminate\Filesystem\Filesystem;

$fs = new Filesystem();
$hello = new SayHello();

$hello->sayHello();