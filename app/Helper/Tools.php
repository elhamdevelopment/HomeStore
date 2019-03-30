<?php
/**
 * Created by PhpStorm.
 * User: reza
 * Date: 3/17/2019
 * Time: 1:20 PM
 */
function getControllerActions()
{
    $controllers = [];
    $actions = [];
    $controllerAction = [];
    foreach (Route::getRoutes()->getRoutes() as $route) {
        $action = $route->getAction();
        if (array_key_exists('controller', $action)) {
            $item = $action['controller'];
            $item = str_replace('App\Http\\Controllers\\', '', $item);
            $pos = strpos($item, '\\') + 1;
            $item = substr($item, $pos, 100);
            $pos = strpos($item, '@') + 1;
            $controller = substr($item, 0, $pos - 1);
            $action = substr($item, $pos, 100);

            $controllers[$controller] = $controller;
            $actions[] = $action;

            $controllerAction[$controller][] = $action;
        }
    }
    return [
        'controllerAction' => $controllerAction,
        'controllers' => $controllers,
        'actions' => $actions,
    ];


}

function createJsonResponse($status, $message, $data = '')
{
    return response()->json([
        'data' => $data,
        'status' => $status,
        'message' => $message
    ], $status);

}