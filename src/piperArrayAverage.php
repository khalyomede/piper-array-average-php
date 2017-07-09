<?php

namespace Khalyomede;

use Khalyomede\PiperContract;

class PiperArrayAverage implements PiperContract {
	public static function execute( $input ) {
		return array_sum($input) / count($input);
	}

	public static function do( $parameter = null ) {
		return new self;
	}
}