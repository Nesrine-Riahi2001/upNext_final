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
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::home'], null, null, null, false, false, null]],
        '/admin/compte' => [[['_route' => 'app_admin_compte', '_controller' => 'App\\Controller\\AdminController::user'], null, null, null, false, false, null]],
        '/admin/user/add' => [[['_route' => 'admin_add_user', '_controller' => 'App\\Controller\\AdminController::addUser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/report' => [[['_route' => 'admin_user_report', '_controller' => 'App\\Controller\\AdminController::generateReport'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'home_search', '_controller' => 'App\\Controller\\AdminController::search'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commande/statistics' => [[['_route' => 'app_commande_statistics', '_controller' => 'App\\Controller\\CommandeController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/commande/client' => [[['_route' => 'app_commande_client_list', '_controller' => 'App\\Controller\\CommandeController::clientList'], null, ['GET' => 0], null, false, false, null]],
        '/profile/edit' => [[['_route' => 'profile_edit', '_controller' => 'App\\Controller\\EditProfileController::edit'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'event_index', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null]],
        '/event/new' => [[['_route' => 'event_new', '_controller' => 'App\\Controller\\EventController::new'], null, null, null, false, false, null]],
        '/reservations' => [
            [['_route' => 'reservation_list', '_controller' => 'App\\Controller\\EventController::listReservations'], null, null, null, false, false, null],
            [['_route' => 'reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null],
        ],
        '/' => [[['_route' => 'view', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\HomeController::profile'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'global_search', '_controller' => 'App\\Controller\\HomeController::search'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/list' => [[['_route' => 'app_produit_list', '_controller' => 'App\\Controller\\ProduitController::list'], null, ['GET' => 0], null, false, false, null]],
        '/produit/artist-list' => [[['_route' => 'app_produit_artist_list', '_controller' => 'App\\Controller\\ProduitController::artistList'], null, ['GET' => 0], null, false, false, null]],
        '/produit/cart' => [[['_route' => 'app_cart_show', '_controller' => 'App\\Controller\\ProduitController::showCart'], null, ['GET' => 0], null, false, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit/cart/confirm' => [[['_route' => 'app_cart_confirm', '_controller' => 'App\\Controller\\ProduitController::confirmCart'], null, ['GET' => 0], null, false, false, null]],
        '/question' => [[['_route' => 'app_question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/question/new' => [[['_route' => 'app_question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/quiz' => [[['_route' => 'quiz_index', '_controller' => 'App\\Controller\\QuizController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/quiz/quiz/pdf' => [[['_route' => 'quiz_pdf', '_controller' => 'App\\Controller\\QuizController::generatePdf'], null, null, null, false, false, null]],
        '/quiz/quiz/search' => [[['_route' => 'quiz_search', '_controller' => 'App\\Controller\\QuizController::search'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/Home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\ReclamationController::baseClient'], null, null, null, false, false, null]],
        '/reclamations' => [[['_route' => 'app_reclamations', '_controller' => 'App\\Controller\\ReclamationController::showReclamations'], null, null, null, false, false, null]],
        '/ajouterRec' => [[['_route' => 'app_ajout_reclamation', '_controller' => 'App\\Controller\\ReclamationController::ajoutRecClient'], null, null, null, false, false, null]],
        '/creerSuivie' => [[['_route' => 'app_add_suivi', '_controller' => 'App\\Controller\\ReclamationController::AddSuivi'], null, null, null, false, false, null]],
        '/AdminDash' => [[['_route' => 'app_admin_recs', '_controller' => 'App\\Controller\\ReclamationController::adminDash'], null, null, null, false, false, null]],
        '/AfficherSuivis' => [[['_route' => 'app_suivis_admin', '_controller' => 'App\\Controller\\ReclamationController::showSuivisAdin'], null, null, null, false, false, null]],
        '/reclamationsAdmin' => [[['_route' => 'app_reclamations_admin', '_controller' => 'App\\Controller\\ReclamationController::showReclamationsAdmin'], null, null, null, false, false, null]],
        '/generate-pdf-report' => [[['_route' => 'app_generate_pdf_report', '_controller' => 'App\\Controller\\ReclamationController::generatePdfReport'], null, null, null, false, false, null]],
        '/ChatbotRec2' => [[['_route' => 'app_chatbot_rec2', '_controller' => 'App\\Controller\\ReclamationController::chatbotRec2'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reponse/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservationss' => [[['_route' => 'reservation_indexart', '_controller' => 'App\\Controller\\ReservationController::indexart'], null, null, null, false, false, null]],
        '/reservation/new' => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reservations' => [[['_route' => 'admin_reservations', '_controller' => 'App\\Controller\\ReservationController::indexadmin'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|utocomplete/([^/]++)(*:227)'
                    .'|dmin/user/(?'
                        .'|edit/([^/]++)(*:261)'
                        .'|de(?'
                            .'|lete/([^/]++)(*:287)'
                            .'|activate/([^/]++)(*:312)'
                        .')'
                    .')'
                    .'|jouterSuiviRecAdmin/([^/]++)(*:350)'
                .')'
                .'|/commande/([^/]++)(?'
                    .'|(*:380)'
                    .'|/(?'
                        .'|de(?'
                            .'|lete(*:401)'
                            .'|tails(*:414)'
                        .')'
                        .'|update\\-(?'
                            .'|status(*:440)'
                            .'|delivery(*:456)'
                        .')'
                        .'|send\\-email(*:476)'
                    .')'
                .')'
                .'|/event/(?'
                    .'|([^/]++)/assign\\-user/([^/]++)(*:526)'
                    .'|delete/([^/]++)(*:549)'
                    .'|edit/([^/]++)(*:570)'
                    .'|([^/]++)(?'
                        .'|(*:589)'
                        .'|/status/([^/]++)(*:613)'
                    .')'
                .')'
                .'|/pro(?'
                    .'|file/([^/]++)(*:643)'
                    .'|duit/(?'
                        .'|([^/]++)/artist(*:674)'
                        .'|(\\d+)(*:687)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|a(?'
                                    .'|dmin(*:718)'
                                    .'|pprove(*:732)'
                                .')'
                                .'|edit(*:745)'
                                .'|commander(*:762)'
                                .'|reject(*:776)'
                            .')'
                            .'|(*:785)'
                        .')'
                        .'|cart/(?'
                            .'|add/([^/]++)(*:814)'
                            .'|remove/([^/]++)(*:837)'
                        .')'
                    .')'
                .')'
                .'|/qu(?'
                    .'|estion/([^/]++)(?'
                        .'|(*:872)'
                        .'|/edit(*:885)'
                    .')'
                    .'|iz/([^/]++)(?'
                        .'|/(?'
                            .'|add\\-question(*:925)'
                            .'|edit(*:937)'
                        .')'
                        .'|(*:946)'
                    .')'
                .')'
                .'|/supprimer(?'
                    .'|Rec/([^/]++)(*:981)'
                    .'|SuiviAdmin/([^/]++)(*:1008)'
                .')'
                .'|/modifier(?'
                    .'|Rec/([^/]++)(*:1042)'
                    .'|Suivi(?'
                        .'|/([^/]++)(*:1068)'
                        .'|Admin/([^/]++)(*:1091)'
                    .')'
                .')'
                .'|/voirSuivi(?'
                    .'|/([^/]++)(*:1124)'
                    .'|Admin/([^/]++)(*:1147)'
                .')'
                .'|/re(?'
                    .'|ponse/(?'
                        .'|([^/]++)(?'
                            .'|(*:1183)'
                            .'|/edit(*:1197)'
                            .'|(*:1206)'
                        .')'
                        .'|quiz/([^/]++)/re(?'
                            .'|pondre(*:1241)'
                            .'|sultats(*:1257)'
                        .')'
                    .')'
                    .'|servation/([^/]++)/edit(*:1291)'
                .')'
                .'|/([^/]++)(*:1310)'
                .'|/log(?'
                    .'|in(*:1328)'
                    .'|out(*:1340)'
                .')'
                .'|/statistics(*:1361)'
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
        227 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        261 => [[['_route' => 'admin_edit_user', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        287 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        312 => [[['_route' => 'admin_deactivate_user', '_controller' => 'App\\Controller\\AdminController::deactivateUser'], ['id'], ['POST' => 0], null, false, true, null]],
        350 => [[['_route' => 'app_ajouter_suivi_reclamation_admin', '_controller' => 'App\\Controller\\ReclamationController::ajouterSuivi'], ['id'], null, null, false, true, null]],
        380 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        401 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        414 => [[['_route' => 'app_commande_details', '_controller' => 'App\\Controller\\CommandeController::details'], ['id'], ['GET' => 0], null, false, false, null]],
        440 => [[['_route' => 'app_commande_update_status', '_controller' => 'App\\Controller\\CommandeController::updateStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        456 => [[['_route' => 'app_commande_update_delivery', '_controller' => 'App\\Controller\\CommandeController::updateDelivery'], ['id'], ['POST' => 0], null, false, false, null]],
        476 => [[['_route' => 'app_mailer_send', '_controller' => 'App\\Controller\\CommandeController::sendEmail'], ['id'], ['GET' => 0], null, false, false, null]],
        526 => [[['_route' => 'assign_user_to_event', '_controller' => 'App\\Controller\\EventController::assignUserToEvent'], ['id', 'userId'], ['POST' => 0], null, false, true, null]],
        549 => [[['_route' => 'event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        570 => [[['_route' => 'event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], null, null, false, true, null]],
        589 => [[['_route' => 'event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], null, null, false, true, null]],
        613 => [[['_route' => 'event_change_status', '_controller' => 'App\\Controller\\EventController::changeStatus'], ['id', 'status'], null, null, false, true, null]],
        643 => [[['_route' => 'profile_view', '_controller' => 'App\\Controller\\HomeController::profileView'], ['id'], null, null, false, true, null]],
        674 => [[['_route' => 'app_produit_show_artist', '_controller' => 'App\\Controller\\ProduitController::showArtist'], ['id'], ['GET' => 0], null, false, false, null]],
        687 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        718 => [[['_route' => 'app_produit_show_admin', '_controller' => 'App\\Controller\\ProduitController::showAdmin'], ['id'], ['GET' => 0], null, false, false, null]],
        732 => [[['_route' => 'app_produit_approve', '_controller' => 'App\\Controller\\ProduitController::approve'], ['id'], ['POST' => 0], null, false, false, null]],
        745 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        762 => [[['_route' => 'app_produit_commander', '_controller' => 'App\\Controller\\ProduitController::commander'], ['id'], ['POST' => 0], null, false, false, null]],
        776 => [[['_route' => 'app_produit_reject', '_controller' => 'App\\Controller\\ProduitController::reject'], ['id'], ['POST' => 0], null, false, false, null]],
        785 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        814 => [[['_route' => 'app_cart_add', '_controller' => 'App\\Controller\\ProduitController::addToCart'], ['id'], ['GET' => 0], null, false, true, null]],
        837 => [[['_route' => 'app_cart_remove', '_controller' => 'App\\Controller\\ProduitController::removeFromCart'], ['id'], ['GET' => 0], null, false, true, null]],
        872 => [
            [['_route' => 'app_question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        885 => [[['_route' => 'question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        925 => [[['_route' => 'quiz_add_question', '_controller' => 'App\\Controller\\QuizController::addQuestion'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        937 => [[['_route' => 'quiz_edit', '_controller' => 'App\\Controller\\QuizController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        946 => [[['_route' => 'quiz_delete', '_controller' => 'App\\Controller\\QuizController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        981 => [[['_route' => 'app_supprimer_reclamation', '_controller' => 'App\\Controller\\ReclamationController::supprimerReclamation'], ['id'], null, null, false, true, null]],
        1008 => [[['_route' => 'app_supprimer_suivi_admin', '_controller' => 'App\\Controller\\ReclamationController::deleteSuivi'], ['id'], null, null, false, true, null]],
        1042 => [[['_route' => 'app_modifier_reclamation', '_controller' => 'App\\Controller\\ReclamationController::modifierReclamation'], ['id'], null, null, false, true, null]],
        1068 => [[['_route' => 'app_modifier_suivi', '_controller' => 'App\\Controller\\ReclamationController::modifierSuivi'], ['id'], null, null, false, true, null]],
        1091 => [[['_route' => 'app_modifier_suivi_admin', '_controller' => 'App\\Controller\\ReclamationController::editSuivi'], ['id'], null, null, false, true, null]],
        1124 => [[['_route' => 'app_voir_suivi', '_controller' => 'App\\Controller\\ReclamationController::voirSuivi'], ['id'], null, null, false, true, null]],
        1147 => [[['_route' => 'app_voir_suivi_admin', '_controller' => 'App\\Controller\\ReclamationController::voirSuiviAdmin'], ['id'], null, null, false, true, null]],
        1183 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1197 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1206 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1241 => [[['_route' => 'app_reponse_quiz_repondre', '_controller' => 'App\\Controller\\ReponseController::repondre'], ['quizId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1257 => [[['_route' => 'app_reponse_quiz_resultats', '_controller' => 'App\\Controller\\ReponseController::resultats'], ['quizId'], null, null, false, false, null]],
        1291 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1310 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1328 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null]],
        1340 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null]],
        1361 => [
            [['_route' => 'statistics', '_controller' => 'App\\Controller\\StatisticsController::index'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
