<?php

namespace Lohl\Finance\App\Shortcodes;

class Shortcode
{
	protected $name = 'unnamed';

	public function __construct()
	{
		add_shortcode( $this->name, [$this, 'run'] );
	}

	protected function handle()
	{
		return 'not implemented';
	}

	public function run()
	{
		return $this->handle();
	}
}