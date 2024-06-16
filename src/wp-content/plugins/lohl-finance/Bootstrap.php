<?php

class Bootstrap
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);
    }

    /**
     * Enqueue scripts to be loaded by Wordpress
     *
     * @return void
     */
    function enqueueScripts() : void
    {
        $this->readFiles('assets/css/', function ($path, $url, $file){
            wp_enqueue_style(basename($file), $url . $file, null, time(), 'all' );
        });

        $this->readFiles('assets/js/', function ($path, $url, $file){
            wp_enqueue_script(basename($file), $url . $file, 'jquery', time(), true );
        });

        $this->readFiles('includes/', function ($path, $url, $file){
            require_once $path . $file ;
        });
    }

    /**
     * Autoload files from source
     *
     * @param $src
     * @param $callback
     * @return void
     */
    function readFiles($src, $callback) : void
    {
        $url = plugin_dir_url(__FILE__) . $src;

        $path = dirname(__FILE__) . '/' . $src;

        $files = scandir( $path );

        foreach ( $files as $file )
        {
            $filePath = $path . $file;

            if ( file_exists( $filePath ) && is_file($filePath) ) $callback($path, $url, $file);
        }
    }
}