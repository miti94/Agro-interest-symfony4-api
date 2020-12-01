<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\ApiRest\ExperienceLikeController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Controller\\AbstractFOSRestController.php';
include_once $this->targetDirs[3].'\\src\\Controller\\ApiRest\\ExperienceLikeController.php';

$this->services['App\\Controller\\ApiRest\\ExperienceLikeController'] = $instance = new \App\Controller\ApiRest\ExperienceLikeController(($this->privates['App\\Repository\\ExperienceRepository'] ?? $this->load('getExperienceRepositoryService.php')), ($this->privates['App\\Repository\\ExperienceLikeRepository'] ?? $this->load('getExperienceLikeRepositoryService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')));

$instance->setContainer(($this->privates['.service_locator.plo71B4'] ?? $this->load('get_ServiceLocator_Plo71B4Service.php'))->withContext('App\\Controller\\ApiRest\\ExperienceLikeController', $this));

return $instance;
