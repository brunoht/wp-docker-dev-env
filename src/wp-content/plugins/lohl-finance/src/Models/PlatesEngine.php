<?php

namespace Lohl\Finance\Models;

use League\Plates\Engine;

class PlatesEngine extends TemplateEngine
{
	public function __construct()
	{
		$this->engine = new Engine();
		$this->engine->addFolder('shortcodes', $this->source . '/Views/App/Shortcodes');
		$this->engine->addFolder('backend', $this->source . '/Views/App/Backend');
	}

	public function shortcode($view, $array = []) : string
	{
		return $this->engine->make('shortcodes::' . $view, $array);
	}

	public function backend($view, $array = []) : string
	{
		return $this->engine->make('backend::' . $view, $array);
	}
}