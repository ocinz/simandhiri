<?php

/**
 * Plugin Name: Simandhiri
 * Plugin URI: -
 * Description: self-service book circulation plugin
 * Version: 1.0.0
 * Author: Ocinz/Ahmad Hafid
 * Author URI: https://www.linkedin.com/in/ahmad-hafid/
 */

use SLiMS\Plugins;

$plugins = Plugins::getInstance();
$plugins
    ->registerMenu('opac', 'simandhiri', __DIR__ . '/index.php');
