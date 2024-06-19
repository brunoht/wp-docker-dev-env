<?php

namespace Lohl\Finance\Providers;

use Lohl\Finance\Models\Provider;
use Lohl\Finance\Models\PlatesEngine;
use Lohl\Finance\Models\TwigEngine;

/**
 * Template Engine Provider
 */
class Template extends Provider
{
	protected $register = [
		'plates' => PlatesEngine::class,
		'twig' => TwigEngine::class
	];
}