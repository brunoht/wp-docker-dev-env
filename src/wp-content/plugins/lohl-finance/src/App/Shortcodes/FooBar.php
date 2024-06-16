<?php

namespace Lohl\Finance\App\Shortcodes;

class FooBar extends Shortcode
{
	protected $name = 'foobar';

	protected function handle()
	{
		return "foo and bar class";
	}
}