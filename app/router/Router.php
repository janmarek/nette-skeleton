<?php

use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;

/**
 * Router
 *
 * @author Jan Marek
 */
class Router extends RouteList
{

	public function __construct()
	{
		$this[] = new Route('<presenter>/<action>', 'Homepage:default');
	}
}
