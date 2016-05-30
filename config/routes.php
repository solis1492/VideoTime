<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::defaultRouteClass('DashedRoute');

Router::scope('/posts', function (RouteBuilder $routes) {
    $routes->connect('/',
        ['controller' => 'Posts']
    );

    $routes->connect('/create',
        ['controller' => 'Posts', 'action' => 'create']
    );

    $routes->connect('/:id',
        ['controller' => 'Posts', 'action' => 'view'],
        ['id' => '\d+', 'pass' => ['id']]
    );

    $routes->connect('edit/:id',
        ['controller' => 'Posts', 'action' => 'edit'],
        ['id' => '\d+', 'pass' => ['id']]
    );
});

Router::scope('/', function (RouteBuilder $routes) {

    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
    $routes->fallbacks('DashedRoute');
});

Plugin::routes();
