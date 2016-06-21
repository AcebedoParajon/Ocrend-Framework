<?php

/**
 * OCREND Framework - MVC Architecture for Web Applications
 * PHP Version 7.0.3
 * @package OCREND Framework
 * @link http://www.ocrend.com/framework
 * @author Brayan Narváez (Prinick) <prinick@ocrend.com>
 * @copyright 2016 - Ocrend Software
*/

define('INDEX_DIR',true);
require('core/app_core.php');

$Controller = $router->getController();

if(!is_readable('core/controllers/' . $Controller . '.php')) {
  $Controller = 'errorController';
}

require('core/controllers/' . $Controller . '.php');
new $Controller;

!DEBUG ?: new Debug($startime);

?>
