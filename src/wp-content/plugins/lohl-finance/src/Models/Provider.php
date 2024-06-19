<?php

namespace Lohl\Finance\Models;

use Lohl\Finance\Settings;

class Provider
{
	protected static $instance;

	protected $register = [];

	public static function use()
	{
		if (self::$instance === null) {
			$instance = new static();
			self::$instance = new $instance->register[Settings::$template]();
		}
		return self::$instance;
	}
}