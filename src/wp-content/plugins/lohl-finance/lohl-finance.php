<?php
/**
 * Plugin Name: Lohl Finance
 * Plugin URI: https://lohl.com.br
 * Description: Lohl Finance System
 * Version: 1.0.0
 * Author: Bruno Henrique Trindade
 * Author URL: https://brunoh.com.br
 */

if ( !defined('WPINC') ) die();

require_once __DIR__ . '/vendor/autoload.php';

use Lohl\Finance\Bootstrap;

$bootstrap = new Bootstrap();