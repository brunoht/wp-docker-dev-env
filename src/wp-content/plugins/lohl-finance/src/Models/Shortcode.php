<?php

namespace Lohl\Finance\Models;

use Lohl\Finance\Providers\Template;

class Shortcode
{
	/**
	 * Shortcode name
	 * @var string
	 */
	protected $name = "unnamed";

	/**
	 * Shortcode attributes
	 * @var array
	 */
	protected $atts = [];

	/**
	 * Shortcode content
	 * @var string
	 */
	protected $content = "";

	private $template;

	public function __construct()
	{
		$this->template = Template::use();

		add_shortcode( $this->name, [$this, 'run'] );
	}

	/**
	 * Implement the shortcode body in here
	 *
	 * @return string
	 */
	protected function handle() : string
	{
		return 'not implemented';
	}

	/**
	 * Runs the shortcode setup
	 *
	 * @param array $atts
	 * @param string $content
	 *
	 * @return string
	 */
	public function run(array $atts = [], string $content = "") : string
	{
		$this->atts = $atts;

		$this->content = $content;

		return $this->handle();
	}

	/**
	 * Render the view on App/Shortcodes/[shortcodename].html
	 *
	 * @param array $content
	 * @param string|null $view
	 *
	 * @return string
	 */
	protected function view(array $content = [], string $view = null) : string
	{
		return $this->template->shortcode($view ?? $this->name, $content);
	}
}