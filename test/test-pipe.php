<?php

require __DIR__ . '/../vendor/autoload.php';

use Khalyomede\PiperArrayAverage as ArrayAverage;
use Khalyomede\Piper;

Piper::set([1, 2, 3])
	->pipe( ArrayAverage::do() )
	->echo();