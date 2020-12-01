<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\ApiRest\UserController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\Controller\\AbstractFOSRestController.php';
include_once $this->targetDirs[3].'\\src\\Controller\\ApiRest\\UserController.php';
include_once $this->targetDirs[3].'\\src\\Service\\UserService.php';

$a = ($this->privates['App\\Repository\\AddressesRepository'] ?? $this->load('getAddressesRepositoryService.php'));
$b = ($this->privates['App\\Repository\\UserRepository'] ?? $this->load('getUserRepositoryService.php'));

$this->services['App\\Controller\\ApiRest\\UserController'] = $instance = new \App\Controller\ApiRest\UserController($a, ($this->privates['App\\Repository\\UserTypeRepository'] ?? $this->load('getUserTypeRepositoryService.php')), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php')), new \App\Service\UserService($b, $a, ($this->services['doctrine'] ?? $this->getDoctrineService())), ($this->services['lexik_jwt_authentication.encoder'] ?? $this->load('getLexikJwtAuthentication_EncoderService.php')), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), $b, ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')));

$instance->setContainer(($this->privates['.service_locator.plo71B4'] ?? $this->load('get_ServiceLocator_Plo71B4Service.php'))->withContext('App\\Controller\\ApiRest\\UserController', $this));

return $instance;
