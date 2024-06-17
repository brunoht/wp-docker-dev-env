<?php

namespace Lohl\Finance\Models;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Template {

	private $engine;

	private $source = __DIR__ . '/..';

	public function __construct()
	{
		$loader = new FilesystemLoader($this->source . '/Views');

		$this->engine = new Environment($loader, [
			'cache' => $this->source .'/assets/cache',
		]);
	}

	public function shortcode($view, $array = [])
	{
		$template = $this->engine->load('/App/Shortcodes/' . $view . '.html');

		return $template->render($array);
	}
}