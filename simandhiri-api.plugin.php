<?php

/**
 * Plugin Name: Simandhiri API
 * Plugin URI: -
 * Description: API - self-service book circulation
 * Version: 1.0.0
 * Author: Ocinz/Ahmad Hafid
 * Author URI: https://www.linkedin.com/in/ahmad-hafid/
 */

use SLiMS\Plugins;

require __DIR__ . '/controllers/routes.php';

$plugins = Plugins::getInstance();
$plugins->register('simandhiri-api', $routes);
