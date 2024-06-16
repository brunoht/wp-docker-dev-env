<?php

namespace Lohl\Finance\App\Shortcodes;

use Lohl\Finance\Models\Shortcode;

class FooBar extends Shortcode
{
	protected $name = 'foobar';

	protected function handle() : string
	{
		return "foo and bar class";
	}
}