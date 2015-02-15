<?php

namespace App;

use Nette,
	Nette\Application\Routers\RouteList,
	Nette\Application\Routers\Route,
	Nette\Application\Routers\SimpleRouter;


/**
 * Router factory.
 */
class RouterFactory
{

	/**
	 * @return \Nette\Application\IRouter
	 */
	public static function createRouter()
	{
	//
	$router = new RouteList();
	$router[] = $module = new RouteList('Admin');
	$module[] = new Route('admin/<presenter>/<action>[/<id>]', 'Homepage:default');
        //	
//
	$router[] = new Route('kancelarske-zidle', array(
                       'module' => 'Front',
                       'presenter' => 'Posts',
                       'action' => 'kancelarskeZidle'
               ));
	//
	$router[] = new Route('kancelarske-kresla', array(
                       'module' => 'Front',
                       'presenter' => 'Posts',
                       'action' => 'kancelarskeKresla'
               ));
	//
	$router[] = $module = new RouteList('Front');
	$module[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');
	return $router;
	}

}