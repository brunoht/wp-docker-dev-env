<?php

namespace Lohl\Finance\App\Shortcodes;

use Lohl\Finance\Models\Shortcode;

class BarTag extends Shortcode
{
	protected $name = 'bartag';

	protected function handle() : string
	{
		$attributes = shortcode_atts([
			'foo' => 'something',
			'bar' => 'something else',
		], $this->atts );

		return "foo = {$attributes['foo']} | bar = {$attributes['bar']}";
	}
}