<?php

require '../vendor/autoload.php';

use \App\Wcs\Hello;

echo Hello::Talk();

echo "<br/>";

use HelloWorld\SayHello;

echo SayHello::world();


