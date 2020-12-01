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
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'api_logout'], null, null, null, false, false, null]],
        '/api/all-article-likes' => [[['_route' => 'app_apirest_articlelike_getallarticlelike', '_controller' => 'App\\Controller\\ApiRest\\ArticleLikeController::getAllArticleLike'], null, ['GET' => 0], null, false, false, null]],
        '/api/add-article-like' => [[['_route' => 'app_apirest_articlelike_addarticlelike', '_controller' => 'App\\Controller\\ApiRest\\ArticleLikeController::addArticleLike'], null, ['POST' => 0], null, false, false, null]],
        '/api/articles' => [[['_route' => 'app_apirest_articles_getallarticles', '_controller' => 'App\\Controller\\ApiRest\\ArticlesController::getAllArticles'], null, ['GET' => 0], null, false, false, null]],
        '/api/add-article' => [[['_route' => 'app_apirest_articles_newarticle', '_controller' => 'App\\Controller\\ApiRest\\ArticlesController::newArticle'], null, ['POST' => 0], null, false, false, null]],
        '/api/borrow-materials' => [[['_route' => 'app_apirest_borrowmateral_getallborrowedmaterial', '_controller' => 'App\\Controller\\ApiRest\\BorrowMateralController::getAllBorrowedMaterial'], null, ['GET' => 0], null, false, false, null]],
        '/api/add-borrow-material' => [[['_route' => 'app_apirest_borrowmateral_addsingleborrowedmaterial', '_controller' => 'App\\Controller\\ApiRest\\BorrowMateralController::addSingleBorrowedMaterial'], null, ['POST' => 0], null, false, false, null]],
        '/api/comment-article' => [[['_route' => 'app_apirest_commentarticle_getallcomment', '_controller' => 'App\\Controller\\ApiRest\\CommentArticleController::getAllComment'], null, ['GET' => 0], null, false, false, null]],
        '/api/new-comment' => [[['_route' => 'app_apirest_commentarticle_newcomment', '_controller' => 'App\\Controller\\ApiRest\\CommentArticleController::newComment'], null, ['POST' => 0], null, false, false, null]],
        '/api/comment-experience' => [[['_route' => 'app_apirest_commentexperience_getallcommentexperiences', '_controller' => 'App\\Controller\\ApiRest\\CommentExperienceController::getAllCommentExperiences'], null, ['GET' => 0], null, false, false, null]],
        '/api/add-comment-experience' => [[['_route' => 'app_apirest_commentexperience_addcommentexperience', '_controller' => 'App\\Controller\\ApiRest\\CommentExperienceController::addCommentExperience'], null, ['POST' => 0], null, false, false, null]],
        '/api/contacts' => [[['_route' => 'api.contact', '_controller' => 'App\\Controller\\ApiRest\\ContactController::getAllContacts'], null, ['GET' => 0], null, false, false, null]],
        '/api/send-email' => [[['_route' => 'api.sendMail', '_controller' => 'App\\Controller\\ApiRest\\ContactController::sendMail'], null, ['POST' => 0], null, false, false, null]],
        '/api/experiences' => [[['_route' => 'app_apirest_experience_getallexperiences', '_controller' => 'App\\Controller\\ApiRest\\ExperienceController::getAllExperiences'], null, ['GET' => 0], null, false, false, null]],
        '/api/add-experience' => [[['_route' => 'app_apirest_experience_newexperience', '_controller' => 'App\\Controller\\ApiRest\\ExperienceController::newExperience'], null, ['POST' => 0], null, false, false, null]],
        '/api/all-experience-likes' => [[['_route' => 'app_apirest_experiencelike_getallexperiencelike', '_controller' => 'App\\Controller\\ApiRest\\ExperienceLikeController::getAllExperienceLike'], null, ['GET' => 0], null, false, false, null]],
        '/api/add-experience-like' => [[['_route' => 'app_apirest_experiencelike_addexperiencelike', '_controller' => 'App\\Controller\\ApiRest\\ExperienceLikeController::addExperienceLike'], null, ['POST' => 0], null, false, false, null]],
        '/api/excel-addresses' => [[['_route' => 'import_addresses', '_controller' => 'App\\Controller\\ApiRest\\ImportExcelFileController::importAddresses'], null, null, null, false, false, null]],
        '/api/material-borrower-messages' => [[['_route' => 'app_apirest_materialborrowermessage_getallmaterialborrowermessages', '_controller' => 'App\\Controller\\ApiRest\\MaterialBorrowerMessageController::getAllMaterialBorrowerMessages'], null, ['GET' => 0], null, false, false, null]],
        '/api/add-material-borrower-message' => [[['_route' => 'app_apirest_materialborrowermessage_addmaterialborrowermessage', '_controller' => 'App\\Controller\\ApiRest\\MaterialBorrowerMessageController::addMaterialBorrowerMessage'], null, ['POST' => 0], null, false, false, null]],
        '/api/materials' => [[['_route' => 'app_apirest_material_getallmaterials', '_controller' => 'App\\Controller\\ApiRest\\MaterialController::getAllMaterials'], null, ['GET' => 0], null, false, false, null]],
        '/api/add-material' => [[['_route' => 'app_apirest_material_addmaterial', '_controller' => 'App\\Controller\\ApiRest\\MaterialController::addMaterial'], null, ['POST' => 0], null, false, false, null]],
        '/api/users' => [[['_route' => 'api.users', '_controller' => 'App\\Controller\\ApiRest\\UserController::listUsers'], null, ['GET' => 0], null, false, false, null]],
        '/api/register' => [[['_route' => 'api.register', '_controller' => 'App\\Controller\\ApiRest\\UserController::registerUser'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'App\\Controller\\ApiRest\\UserController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/profile' => [[['_route' => 'api_profile', '_controller' => 'App\\Controller\\ApiRest\\UserController::profile'], null, ['POST' => 0], null, false, false, null]],
        '/api/messages' => [[['_route' => 'app_apirest_usermessage_getallmessages', '_controller' => 'App\\Controller\\ApiRest\\UserMessageController::getAllMessages'], null, ['GET' => 0], null, false, false, null]],
        '/api/user-message' => [[['_route' => 'app_apirest_usermessage_getmessagebyuser', '_controller' => 'App\\Controller\\ApiRest\\UserMessageController::getMessageByUser'], null, ['GET' => 0], null, false, false, null]],
        '/api/send-message' => [[['_route' => 'app_apirest_usermessage_postsendmessage', '_controller' => 'App\\Controller\\ApiRest\\UserMessageController::postSendMessage'], null, ['POST' => 0], null, false, false, null]],
        '/api/test-send-message' => [[['_route' => 'app_apirest_usermessage_testsendmessage', '_controller' => 'App\\Controller\\ApiRest\\UserMessageController::testSendMessage'], null, ['GET' => 0], null, false, false, null]],
        '/api/nofify-message' => [[['_route' => 'app_apirest_usermessage_notifymessages', '_controller' => 'App\\Controller\\ApiRest\\UserMessageController::notifyMessages'], null, ['GET' => 0], null, false, false, null]],
        '/api/notification' => [[['_route' => 'notification', '_controller' => 'App\\Controller\\ApiRest\\UserMessageController::displayNotificationMessage'], null, ['GET' => 0], null, false, false, null]],
        '/api/user-profile' => [[['_route' => 'app_apirest_userprofile_getalluserprofile', '_controller' => 'App\\Controller\\ApiRest\\UserProfileController::getAllUserProfile'], null, ['GET' => 0], null, false, false, null]],
        '/api/add-user-profile' => [[['_route' => 'app_apirest_userprofile_createuserprofile', '_controller' => 'App\\Controller\\ApiRest\\UserProfileController::createUserProfile'], null, ['POST' => 0], null, false, false, null]],
        '/api/usertype' => [[['_route' => 'api.usertype', '_controller' => 'App\\Controller\\ApiRest\\UserTypeController::getAllUserType'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:223)'
                    .'|([A-z0-9_-]*)/(.+)(*:249)'
                .')'
                .'|/api/(?'
                    .'|single\\-(?'
                        .'|article(?'
                            .'|/(\\d+)(*:293)'
                            .'|\\-like/(\\d+)/like(*:318)'
                        .')'
                        .'|borrowed\\-material/(\\d+)(*:351)'
                        .'|comment\\-(?'
                            .'|article/(\\d+)(*:384)'
                            .'|experience/(\\d+)(*:408)'
                        .')'
                        .'|experience(?'
                            .'|/(\\d+)(*:436)'
                            .'|\\-like/(\\d+)/like(*:461)'
                        .')'
                        .'|m(?'
                            .'|aterial/(\\d+)(*:487)'
                            .'|essage/(\\d+)(*:507)'
                        .')'
                        .'|user(?'
                            .'|/(\\d+)(*:529)'
                            .'|\\-profile/(\\d+)(*:552)'
                        .')'
                    .')'
                    .'|edit\\-(?'
                        .'|article/(\\d+)(*:584)'
                        .'|comment\\-(?'
                            .'|article/(\\d+)(*:617)'
                            .'|experience/(\\d+)(*:641)'
                        .')'
                        .'|experience/(\\d+)(*:666)'
                        .'|material/(\\d+)(*:688)'
                        .'|send\\-message/(\\d+)(*:715)'
                        .'|user\\-profile/(\\d+)(*:742)'
                    .')'
                    .'|delete\\-(?'
                        .'|article/([^/]++)(*:778)'
                        .'|comment\\-(?'
                            .'|article/([^/]++)(*:814)'
                            .'|experience/([^/]++)(*:841)'
                        .')'
                        .'|experience/([^/]++)(*:869)'
                        .'|material/([^/]++)(*:894)'
                        .'|user\\-profile/(\\d+)(*:921)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        293 => [[['_route' => 'app_apirest_articles_getsinglearticle', '_controller' => 'App\\Controller\\ApiRest\\ArticlesController::getSingleArticle'], ['articleId'], ['GET' => 0], null, false, true, null]],
        318 => [[['_route' => 'article_like', '_controller' => 'App\\Controller\\ApiRest\\ArticlesController::like'], ['id'], ['GET' => 0], null, false, false, null]],
        351 => [[['_route' => 'app_apirest_borrowmateral_getsingleborrowedmaterial', '_controller' => 'App\\Controller\\ApiRest\\BorrowMateralController::getSingleBorrowedMaterial'], ['borrowedMaterialId'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'app_apirest_commentarticle_getsinglecomment', '_controller' => 'App\\Controller\\ApiRest\\CommentArticleController::getSingleComment'], ['commentId'], ['GET' => 0], null, false, true, null]],
        408 => [[['_route' => 'app_apirest_commentexperience_getsinglecommentexperience', '_controller' => 'App\\Controller\\ApiRest\\CommentExperienceController::getSingleCommentExperience'], ['commentExperienceId'], ['GET' => 0], null, false, true, null]],
        436 => [[['_route' => 'app_apirest_experience_getsingleexperience', '_controller' => 'App\\Controller\\ApiRest\\ExperienceController::getSingleExperience'], ['experienceId'], ['GET' => 0], null, false, true, null]],
        461 => [[['_route' => 'experience_like', '_controller' => 'App\\Controller\\ApiRest\\ExperienceController::likeExperience'], ['id'], ['GET' => 0], null, false, false, null]],
        487 => [[['_route' => 'app_apirest_material_getsinglematerial', '_controller' => 'App\\Controller\\ApiRest\\MaterialController::getSingleMaterial'], ['materialId'], ['GET' => 0], null, false, true, null]],
        507 => [[['_route' => 'app_apirest_usermessage_getsinglemessage', '_controller' => 'App\\Controller\\ApiRest\\UserMessageController::getSingleMessage'], ['messageId'], ['GET' => 0], null, false, true, null]],
        529 => [[['_route' => 'app_apirest_user_getsingleuser', '_controller' => 'App\\Controller\\ApiRest\\UserController::getSingleUser'], ['userId'], ['GET' => 0], null, false, true, null]],
        552 => [[['_route' => 'app_apirest_userprofile_getsingleuserprofile', '_controller' => 'App\\Controller\\ApiRest\\UserProfileController::getSingleUserProfile'], ['userProfileId'], ['GET' => 0], null, false, true, null]],
        584 => [[['_route' => 'app_apirest_articles_editarticles', '_controller' => 'App\\Controller\\ApiRest\\ArticlesController::editArticles'], ['articleId'], ['POST' => 0], null, false, true, null]],
        617 => [[['_route' => 'app_apirest_commentarticle_editcommentarticle', '_controller' => 'App\\Controller\\ApiRest\\CommentArticleController::editCommentArticle'], ['commentArticleId'], ['PUT' => 0], null, false, true, null]],
        641 => [[['_route' => 'app_apirest_commentexperience_editcommentexprience', '_controller' => 'App\\Controller\\ApiRest\\CommentExperienceController::editCommentExprience'], ['commentExperienceId'], ['PUT' => 0], null, false, true, null]],
        666 => [[['_route' => 'app_apirest_experience_editexperiences', '_controller' => 'App\\Controller\\ApiRest\\ExperienceController::editExperiences'], ['experienceId'], ['POST' => 0], null, false, true, null]],
        688 => [[['_route' => 'app_apirest_material_editmaterial', '_controller' => 'App\\Controller\\ApiRest\\MaterialController::editMaterial'], ['materialId'], ['POST' => 0], null, false, true, null]],
        715 => [[['_route' => 'app_apirest_usermessage_editsendmessage', '_controller' => 'App\\Controller\\ApiRest\\UserMessageController::editSendMessage'], ['sendMessageId'], ['PUT' => 0], null, false, true, null]],
        742 => [[['_route' => 'app_apirest_userprofile_edituserprofile', '_controller' => 'App\\Controller\\ApiRest\\UserProfileController::editUserProfile'], ['userProfileId'], ['POST' => 0], null, false, true, null]],
        778 => [[['_route' => 'app_apirest_articles_deletearticle', '_controller' => 'App\\Controller\\ApiRest\\ArticlesController::deleteArticle'], ['articleId'], ['DELETE' => 0], null, false, true, null]],
        814 => [[['_route' => 'app_apirest_commentarticle_deletecommentarticle', '_controller' => 'App\\Controller\\ApiRest\\CommentArticleController::deleteCommentArticle'], ['commentArticleId'], ['DELETE' => 0], null, false, true, null]],
        841 => [[['_route' => 'app_apirest_commentexperience_deletecommentexperience', '_controller' => 'App\\Controller\\ApiRest\\CommentExperienceController::deleteCommentExperience'], ['commentExperienceId'], ['DELETE' => 0], null, false, true, null]],
        869 => [[['_route' => 'app_apirest_experience_deleteexperience', '_controller' => 'App\\Controller\\ApiRest\\ExperienceController::deleteExperience'], ['experienceId'], ['DELETE' => 0], null, false, true, null]],
        894 => [[['_route' => 'app_apirest_material_deletematerial', '_controller' => 'App\\Controller\\ApiRest\\MaterialController::deleteMaterial'], ['materialId'], ['DELETE' => 0], null, false, true, null]],
        921 => [
            [['_route' => 'app_apirest_userprofile_deleteuserprofile', '_controller' => 'App\\Controller\\ApiRest\\UserProfileController::deleteUserProfile'], ['userProfileId'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
