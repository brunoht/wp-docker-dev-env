<?php

namespace Lohl\Finance\App\Shortcodes;

use Lohl\Finance\Models\Shortcode;

class Caption extends Shortcode
{
	protected $name = "caption";

	protected function handle(): string
	{
		return $this->view(['content' => $this->content]);
	}
}