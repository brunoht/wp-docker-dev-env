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
	 *
	 * @return string
	 */
	public function run(array $atts = []) : string
	{
		$this->atts = $atts;

		return $this->handle();
	}
}