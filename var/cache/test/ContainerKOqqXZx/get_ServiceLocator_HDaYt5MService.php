<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.HDaYt5M' shared service.

return $this->privates['.service_locator.HDaYt5M'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('emailService' => function () {
    return ($this->privates['App\Service\EmailService'] ?? $this->load('getEmailServiceService.php'));
}, 'logger' => function () {
    return ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService());
}, 'translator' => function () {
    return ($this->services['translator'] ?? $this->getTranslatorService());
}));