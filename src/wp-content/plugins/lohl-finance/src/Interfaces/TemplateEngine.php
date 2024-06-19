<?php

namespace Lohl\Finance\Interfaces;

interface TemplateEngine
{
	public function shortcode($view, $array = []) : string;

	public function backend($view, $array = []) : string;
}