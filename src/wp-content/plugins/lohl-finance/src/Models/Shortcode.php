<?php

namespace Lohl\Finance\Models;

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
	 * Shorcode content
	 * @var string
	 */
	protected $content = "";

	public function __construct()
	{
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
}