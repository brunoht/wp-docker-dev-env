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

$bootstrapPath = plugin_dir_path(__FILE__) . 'Bootstrap.php';

if ( !file_exists($bootstrapPath) ) die();

require_once $bootstrapPath;

$bootstrap = new Bootstrap();
