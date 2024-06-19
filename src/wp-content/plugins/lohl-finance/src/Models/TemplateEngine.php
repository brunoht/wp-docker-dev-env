<?php

namespace Lohl\Finance\Models;

class TemplateEngine implements \Lohl\Finance\Interfaces\TemplateEngine
{
	protected $engine;

	protected $source = __DIR__ . '/..';

	public function shortcode($view, $array = []) : string
	{
		return "not implemented";
	}

	public function backend($view, $array = []) : string
	{
		return "not implemented";
	}
}