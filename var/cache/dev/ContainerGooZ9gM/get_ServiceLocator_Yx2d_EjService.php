<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Yx2d.Ej' shared service.

return $this->privates['.service_locator.Yx2d.Ej'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService.php', true],
], [
    'mailer' => '?',
]);
