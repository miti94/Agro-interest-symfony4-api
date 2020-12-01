<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\ApiRest\CommentArticleController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Controller\\AbstractFOSRestController.php';
include_once $this->targetDirs[3].'\\src\\Controller\\ApiRest\\CommentArticleController.php';
include_once $this->targetDirs[3].'\\src\\Service\\CommentArticleService.php';

$a = ($this->privates['App\\Repository\\CommentArticleRepository'] ?? $this->load('getCommentArticleRepositoryService.php'));

$this->services['App\\Controller\\ApiRest\\CommentArticleController'] = $instance = new \App\Controller\ApiRest\CommentArticleController(($this->privates['App\\Repository\\ArticleRepository'] ?? $this->load('getArticleRepositoryService.php')), new \App\Service\CommentArticleService($a), $a, ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')));

$instance->setContainer(($this->privates['.service_locator.plo71B4'] ?? $this->load('get_ServiceLocator_Plo71B4Service.php'))->withContext('App\\Controller\\ApiRest\\CommentArticleController', $this));

return $instance;
