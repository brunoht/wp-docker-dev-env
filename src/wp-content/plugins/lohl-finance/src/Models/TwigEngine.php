<?php

namespace Lohl\Finance\Models;


use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class TwigEngine extends TemplateEngine
{
	private $extension = ".html.twig";

	public function __construct()
	{
		$loader = new FilesystemLoader($this->source . '/Views');

		$this->engine = new Environment($loader, [
			'cache' => $this->source .'/assets/cache',
			'auto_reload' => true
		]);
	}

	public function shortcode($view, $array = []) : string
	{
		$template = $this->engine->load('/App/Shortcodes/' . $view . $this->extension);

		return $template->render($array);
	}

	public function backend($view, $array = []) : string
	{
		$template = $this->engine->load('/App/Backend/' . $view . $this->extension);

		return $template->render($array);
	}
}