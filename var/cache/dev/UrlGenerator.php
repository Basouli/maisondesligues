<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_admin_creer' => [[], ['_controller' => 'App\\Controller\\AdministrationController::inscriptionList'], [], [['text', '/admin/voirInscriptions']], [], []],
    '_admin_menuCreation' => [[], ['_controller' => 'App\\Controller\\AdministrationController::menuCreation'], [], [['text', '/admin/menuCreation']], [], []],
    '_admin_creer_Atelier' => [[], ['_controller' => 'App\\Controller\\AdministrationController::creerAtelier'], [], [['text', '/admin/creerAtelier']], [], []],
    '_admin_creer_Vacacion' => [[], ['_controller' => 'App\\Controller\\AdministrationController::creerVacacion'], [], [['text', '/admin/creerVacacion']], [], []],
    '_admin_creer_Theme' => [[], ['_controller' => 'App\\Controller\\AdministrationController::creerTheme'], [], [['text', '/admin/creerTheme']], [], []],
    '_admin_modifier' => [[], ['_controller' => 'App\\Controller\\AdministrationController::modifier'], [], [['text', '/admin/modifier']], [], []],
    '_admin_modifier_submit' => [[], ['_controller' => 'App\\Controller\\AdministrationController::modifierSubmit'], [], [['text', '/admin/modifier_submit']], [], []],
    'app_compte_inscription' => [[], ['_controller' => 'App\\Controller\\CompteController::inscription'], [], [['text', '/compte/inscription']], [], []],
    'app_compte_inscription_submit' => [[], ['_controller' => 'App\\Controller\\CompteController::inscriptionSubmit'], [], [['text', '/compte/inscription_submit']], [], []],
    'app_compte_lost_password' => [[], ['_controller' => 'App\\Controller\\CompteController::lostPassword'], [], [['text', '/compte/lost_password']], [], []],
    'app_compte_lost_password_submit' => [[], ['_controller' => 'App\\Controller\\CompteController::lostPasswordSubmit'], [], [['text', '/compte/lost_password_submit']], [], []],
    'app_compte_change_password' => [[], ['_controller' => 'App\\Controller\\CompteController::changePassword'], [], [['text', '/compte/change_password']], [], []],
    'app_compte_change_password_submit' => [[], ['_controller' => 'App\\Controller\\CompteController::changePasswordSubmit'], [], [['text', '/compte/change_password_submit']], [], []],
    '_licencie_index' => [[], ['_controller' => 'App\\Controller\\LicencieController::index'], [], [['text', '/licencie/index']], [], []],
    'app_main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
