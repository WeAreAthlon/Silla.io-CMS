<?php
    $routePreffix = 'cms';
    $routes = \Spyc::YAMLLoad('routes.yaml');

    foreach ($routes as $route) {
        \Silla::$routes->add(array(
            'pattern' => '/' . $routePreffix . $route['route'],
            'maps_to' => $route['maps'],
        ));
    }

