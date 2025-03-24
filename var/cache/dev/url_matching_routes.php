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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AcceuilController::index'], null, null, null, false, false, null]],
        '/recherche-recettes' => [[['_route' => 'recherche_recettes', '_controller' => 'App\\Controller\\AcceuilController::rechercherRecettes'], null, ['POST' => 0], null, false, false, null]],
        '/gestion/recettes/afficherttRecettes' => [[['_route' => 'afficher', '_controller' => 'App\\Controller\\GestionRecettesController::selectAll'], null, null, null, false, false, null]],
        '/recette' => [[['_route' => 'app_recette_index', '_controller' => 'App\\Controller\\RecetteController::index'], null, null, null, false, false, null]],
        '/recette/new' => [[['_route' => 'app_recette_new', '_controller' => 'App\\Controller\\RecetteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/recette/(?'
                    .'|([^/]++)(*:222)'
                    .'|gestion/recettes/afficher/([^/]++)(*:264)'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:297)'
                    .'|/(?'
                        .'|edit(*:313)'
                        .'|recettes(?'
                            .'|(*:332)'
                            .'|/edit(*:345)'
                        .')'
                        .'|favoris(*:361)'
                        .'|delete(*:375)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        222 => [[['_route' => 'app_recette_show', '_controller' => 'App\\Controller\\RecetteController::show'], ['id'], null, null, false, true, null]],
        264 => [[['_route' => 'afficherUneRecette', '_controller' => 'App\\Controller\\RecetteController::afficherUneRecette'], ['id'], null, null, false, true, null]],
        297 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        313 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], null, null, false, false, null]],
        332 => [[['_route' => 'app_utilisateur_recettes', '_controller' => 'App\\Controller\\UtilisateurController::mesRecettes'], ['id'], null, null, false, false, null]],
        345 => [[['_route' => 'app_recette_edit', '_controller' => 'App\\Controller\\UtilisateurController::editRecette'], ['id'], null, null, false, false, null]],
        361 => [[['_route' => 'app_utilisateur_favoris', '_controller' => 'App\\Controller\\UtilisateurController::favoris'], ['id'], null, null, false, false, null]],
        375 => [
            [['_route' => 'app_recette_delete', '_controller' => 'App\\Controller\\UtilisateurController::deleteRecette'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
