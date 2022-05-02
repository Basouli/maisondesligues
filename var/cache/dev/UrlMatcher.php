<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/creer' => [[['_route' => '_admin_creer', '_controller' => 'App\\Controller\\AdministrationController::creer'], null, null, null, false, false, null]],
        '/admin/creer_submit' => [[['_route' => '_admin_creer_submit', '_controller' => 'App\\Controller\\AdministrationController::creerSubmit'], null, null, null, false, false, null]],
        '/admin/modifier' => [[['_route' => '_admin_modifier', '_controller' => 'App\\Controller\\AdministrationController::modifier'], null, null, null, false, false, null]],
        '/admin/modifier_submit' => [[['_route' => '_admin_modifier_submit', '_controller' => 'App\\Controller\\AdministrationController::modifierSubmit'], null, null, null, false, false, null]],
        '/compte/inscription' => [[['_route' => 'app_compte_inscription', '_controller' => 'App\\Controller\\CompteController::inscription'], null, null, null, false, false, null]],
        '/compte/inscription_submit' => [[['_route' => 'app_compte_inscription_submit', '_controller' => 'App\\Controller\\CompteController::inscriptionSubmit'], null, null, null, false, false, null]],
        '/compte/lost_password' => [[['_route' => 'app_compte_lost_password', '_controller' => 'App\\Controller\\CompteController::lostPassword'], null, null, null, false, false, null]],
        '/compte/lost_password_submit' => [[['_route' => 'app_compte_lost_password_submit', '_controller' => 'App\\Controller\\CompteController::lostPasswordSubmit'], null, null, null, false, false, null]],
        '/compte/change_password' => [[['_route' => 'app_compte_change_password', '_controller' => 'App\\Controller\\CompteController::changePassword'], null, null, null, false, false, null]],
        '/compte/change_password_submit' => [[['_route' => 'app_compte_change_password_submit', '_controller' => 'App\\Controller\\CompteController::changePasswordSubmit'], null, null, null, false, false, null]],
        '/licencie/index' => [[['_route' => '_licencie_index', '_controller' => 'App\\Controller\\LicencieController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/ateliers' => [[['_route' => '_ateliers', '_controller' => 'App\\Controller\\MainController::atelier'], null, null, null, false, false, null]],
        '/hotels' => [[['_route' => '_hotels', '_controller' => 'App\\Controller\\MainController::hotels'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
