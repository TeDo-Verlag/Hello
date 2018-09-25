<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use TeDo\Hello\SayHello;

echo SayHello::world() . "\n";
