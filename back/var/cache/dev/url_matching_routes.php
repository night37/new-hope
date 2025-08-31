<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/backoffice' => [
            [['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => null, 'crudAction' => null], null, null, null, false, false, null],
            [['_route' => 'app_security_index', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, true, false, null],
        ],
        '/backoffice/animal' => [[['_route' => 'admin_animal_index', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/animal/new' => [[['_route' => 'admin_animal_new', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backoffice/animal/batch-delete' => [[['_route' => 'admin_animal_batch_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/backoffice/animal/autocomplete' => [[['_route' => 'admin_animal_autocomplete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/animal/render-filters' => [[['_route' => 'admin_animal_render_filters', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/structure' => [
            [['_route' => 'admin_structure_index', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\StructureCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\StructureCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_structure', '_controller' => 'App\\Controller\\StructureController::index'], null, null, null, false, false, null],
        ],
        '/backoffice/structure/new' => [[['_route' => 'admin_structure_new', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\StructureCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\StructureCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backoffice/structure/batch-delete' => [[['_route' => 'admin_structure_batch_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\StructureCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\StructureCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/backoffice/structure/autocomplete' => [[['_route' => 'admin_structure_autocomplete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\StructureCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\StructureCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/structure/render-filters' => [[['_route' => 'admin_structure_render_filters', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\StructureCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\StructureCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/user' => [[['_route' => 'admin_user_index', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/user/new' => [[['_route' => 'admin_user_new', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backoffice/user/batch-delete' => [[['_route' => 'admin_user_batch_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/backoffice/user/autocomplete' => [[['_route' => 'admin_user_autocomplete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/user/render-filters' => [[['_route' => 'admin_user_render_filters', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'login_page', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/backoffice/animal/api/getAnimalsList' => [[['_route' => 'animal_indexget_animals_list', '_controller' => 'App\\Controller\\AnimalController::index'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/api/getAnimalsList' => [[['_route' => 'get_animals_list', '_controller' => 'App\\Controller\\ApiController::index'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/backoffice/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/backoffice/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/backoffice/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/backoffice/resend-verification-email-link' => [[['_route' => 'app_resend_verification_email_link', '_controller' => 'App\\Controller\\SecurityController::resendVerificationEmailLink'], null, null, null, false, false, null]],
        '/backoffice/demande-creation-struture' => [[['_route' => 'app_create_structure', '_controller' => 'App\\Controller\\StructureController::createStructureRequest'], null, null, null, false, false, null]],
        '/backoffice/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/backoffice/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\UserController::verifyUserEmail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:37)'
                        .'|\\.well\\-known/genid/([^/]++)(*:72)'
                        .'|validation_errors/([^/]++)(*:105)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:142)'
                    .'|/(?'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:185)'
                        .'|errors/(\\d+)(?:\\.([^/]++))?(*:220)'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:257)'
                        .')'
                        .'|animals(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:302)'
                            .'|(?:\\.([^/]++))?(*:325)'
                        .')'
                        .'|structures(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:373)'
                            .'|(?:\\.([^/]++))?(*:396)'
                        .')'
                        .'|users(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:439)'
                            .'|(?:\\.([^/]++))?(*:462)'
                        .')'
                    .')'
                .')'
                .'|/backoffice/(?'
                    .'|animal/(?'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:517)'
                                .'|delete(*:531)'
                            .')'
                            .'|(*:540)'
                        .')'
                        .'|new(*:552)'
                        .'|([^/]++)(?'
                            .'|(*:571)'
                            .'|/edit(*:584)'
                            .'|(*:592)'
                        .')'
                    .')'
                    .'|structure/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:631)'
                            .'|delete(*:645)'
                        .')'
                        .'|(*:654)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:687)'
                            .'|delete(*:701)'
                        .')'
                        .'|(*:710)'
                    .')'
                    .'|reset\\-password/reset(?:/([^/]++))?(*:754)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:794)'
                    .'|wdt/([^/]++)(*:814)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:856)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:893)'
                                .'|router(*:907)'
                                .'|exception(?'
                                    .'|(*:927)'
                                    .'|\\.css(*:940)'
                                .')'
                            .')'
                            .'|(*:950)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        72 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        105 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        142 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        185 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        220 => [[['_route' => '_api_errors', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => false, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors'], ['status', '_format'], ['GET' => 0], null, false, true, null]],
        257 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        302 => [[['_route' => '_api_/animals/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Animal', '_api_operation_name' => '_api_/animals/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        325 => [[['_route' => '_api_/animals{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Animal', '_api_operation_name' => '_api_/animals{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        373 => [[['_route' => '_api_/structures/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Structure', '_api_operation_name' => '_api_/structures/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        396 => [[['_route' => '_api_/structures{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\Structure', '_api_operation_name' => '_api_/structures{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        439 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        462 => [[['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => false, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        517 => [[['_route' => 'admin_animal_edit', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        531 => [[['_route' => 'admin_animal_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        540 => [[['_route' => 'admin_animal_detail', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\AnimalCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AnimalCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        552 => [[['_route' => 'animal_indexapp_animal_new', '_controller' => 'App\\Controller\\AnimalController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        571 => [[['_route' => 'animal_indexapp_animal_show', '_controller' => 'App\\Controller\\AnimalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        584 => [[['_route' => 'animal_indexapp_animal_edit', '_controller' => 'App\\Controller\\AnimalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        592 => [[['_route' => 'animal_indexapp_animal_delete', '_controller' => 'App\\Controller\\AnimalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        631 => [[['_route' => 'admin_structure_edit', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\StructureCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\StructureCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        645 => [[['_route' => 'admin_structure_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\StructureCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\StructureCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        654 => [[['_route' => 'admin_structure_detail', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\StructureCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\StructureCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        687 => [[['_route' => 'admin_user_edit', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        701 => [[['_route' => 'admin_user_delete', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        710 => [[['_route' => 'admin_user_detail', '_locale' => 'fr', '_controller' => 'App\\Controller\\Admin\\UserCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        754 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        794 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        814 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        856 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        893 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        907 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        927 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        940 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        950 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
