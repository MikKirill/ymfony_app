<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/user/register' => [[['_route' => '_api_user/register_post', '_controller' => 'App\\Controller\\User\\RegistrationController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_user/register_post'], null, ['POST' => 0], null, false, false, null]],
        '/users/get-current' => [[['_route' => '_api_users/get-current_get', '_controller' => 'App\\Controller\\User\\GetCurrentController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_users/get-current_get'], null, ['GET' => 0], null, false, false, null]],
        '/authorize' => [[['_route' => 'oauth2_authorize', '_controller' => ['league.oauth2_server.controller.authorization', 'indexAction']], null, null, null, false, false, null]],
        '/token' => [[['_route' => 'oauth2_token', '_controller' => ['league.oauth2_server.controller.token', 'indexAction']], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/\\.well\\-known/genid/([^/]++)(*:36)'
                .'|/(index)?(?:\\.([^/]++))?(*:67)'
                .'|/docs(?:\\.([^/]++))?(*:94)'
                .'|/contexts/([^.]+)(?:\\.(jsonld))?(*:133)'
                .'|/task(?'
                    .'|/([^/]++)/status(*:165)'
                    .'|s(?'
                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:203)'
                        .'|(?:\\.([^/]++))?(*:226)'
                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:260)'
                    .')'
                .')'
                .'|/users(?:\\.([^/]++))?(*:291)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        67 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        94 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        133 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        165 => [[['_route' => '_api_/task/{id}/status_post', '_controller' => 'App\\Controller\\TaskStatus', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/task/{id}/status_post'], ['id'], ['POST' => 0], null, false, false, null]],
        203 => [[['_route' => '_api_/tasks/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => '_api_/tasks{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        260 => [[['_route' => '_api_/tasks/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Task', '_api_operation_name' => '_api_/tasks/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null]],
        291 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
