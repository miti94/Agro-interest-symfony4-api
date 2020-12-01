<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\ApiRest\BorrowMateralController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Controller\\AbstractFOSRestController.php';
include_once $this->targetDirs[3].'\\src\\Controller\\ApiRest\\BorrowMateralController.php';
include_once $this->targetDirs[3].'\\src\\Service\\BorrowMaterialService.php';

$this->services['App\\Controller\\ApiRest\\BorrowMateralController'] = $instance = new \App\Controller\ApiRest\BorrowMateralController(new \App\Service\BorrowMaterialService(($this->privates['App\\Repository\\BorrowMaterialRepository'] ?? $this->load('getBorrowMaterialRepositoryService.php'))), ($this->privates['App\\Repository\\UserRepository'] ?? $this->load('getUserRepositoryService.php')), ($this->privates['App\\Repository\\MaterialRepository'] ?? $this->load('getMaterialRepositoryService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')), ($this->privates['App\\Service\\MaterialService'] ?? $this->load('getMaterialServiceService.php')));

$instance->setContainer(($this->privates['.service_locator.plo71B4'] ?? $this->load('get_ServiceLocator_Plo71B4Service.php'))->withContext('App\\Controller\\ApiRest\\BorrowMateralController', $this));

return $instance;
