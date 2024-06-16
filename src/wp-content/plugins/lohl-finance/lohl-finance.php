<?php
/**
 * Plugin Name: Lohl Finance
 * Plugin URI: https://lohl.com.br
 * Description: Lohl Finance System
 * Version: 1.0.0
 * Author: Bruno Henrique Trindade
 * Author URL: https://brunoh.com.br
 */

function greetings($content)
{
    $message = "<p>Obrigado!!!</p>";
    return $content . $message;
}

add_action('the_content', 'greetings');