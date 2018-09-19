<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistry.php';

return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Form\\Base\\BaseAbstractType' => function () {
    return ($this->privates['App\Form\Base\BaseAbstractType'] ?? $this->privates['App\Form\Base\BaseAbstractType'] = new \App\Form\Base\BaseAbstractType());
}, 'App\\Form\\ContactRequest\\ContactRequestType' => function () {
    return ($this->privates['App\Form\ContactRequest\ContactRequestType'] ?? $this->privates['App\Form\ContactRequest\ContactRequestType'] = new \App\Form\ContactRequest\ContactRequestType());
}, 'App\\Form\\FrontendUser\\ChangePasswordType' => function () {
    return ($this->privates['App\Form\FrontendUser\ChangePasswordType'] ?? $this->privates['App\Form\FrontendUser\ChangePasswordType'] = new \App\Form\FrontendUser\ChangePasswordType());
}, 'App\\Form\\FrontendUser\\DeleteType' => function () {
    return ($this->privates['App\Form\FrontendUser\DeleteType'] ?? $this->privates['App\Form\FrontendUser\DeleteType'] = new \App\Form\FrontendUser\DeleteType());
}, 'App\\Form\\FrontendUser\\FrontendUserType' => function () {
    return ($this->privates['App\Form\FrontendUser\FrontendUserType'] ?? $this->privates['App\Form\FrontendUser\FrontendUserType'] = new \App\Form\FrontendUser\FrontendUserType());
}, 'App\\Form\\FrontendUser\\LoginType' => function () {
    return ($this->privates['App\Form\FrontendUser\LoginType'] ?? $this->privates['App\Form\FrontendUser\LoginType'] = new \App\Form\FrontendUser\LoginType());
}, 'App\\Form\\FrontendUser\\RecoverType' => function () {
    return ($this->privates['App\Form\FrontendUser\RecoverType'] ?? $this->privates['App\Form\FrontendUser\RecoverType'] = new \App\Form\FrontendUser\RecoverType());
}, 'App\\Form\\FrontendUser\\RegisterType' => function () {
    return ($this->privates['App\Form\FrontendUser\RegisterType'] ?? $this->privates['App\Form\FrontendUser\RegisterType'] = new \App\Form\FrontendUser\RegisterType());
}, 'App\\Form\\FrontendUser\\UpdateSelfType' => function () {
    return ($this->privates['App\Form\FrontendUser\UpdateSelfType'] ?? $this->privates['App\Form\FrontendUser\UpdateSelfType'] = new \App\Form\FrontendUser\UpdateSelfType());
}, 'App\\Form\\Setting\\SettingType' => function () {
    return ($this->privates['App\Form\Setting\SettingType'] ?? $this->privates['App\Form\Setting\SettingType'] = new \App\Form\Setting\SettingType());
}, 'App\\Form\\Traits\\Address\\AddressType' => function () {
    return ($this->privates['App\Form\Traits\Address\AddressType'] ?? $this->privates['App\Form\Traits\Address\AddressType'] = new \App\Form\Traits\Address\AddressType());
}, 'App\\Form\\Traits\\Person\\PersonType' => function () {
    return ($this->privates['App\Form\Traits\Person\PersonType'] ?? $this->privates['App\Form\Traits\Person\PersonType'] = new \App\Form\Traits\Person\PersonType());
}, 'App\\Form\\Traits\\Thing\\ThingType' => function () {
    return ($this->privates['App\Form\Traits\Thing\ThingType'] ?? $this->privates['App\Form\Traits\Thing\ThingType'] = new \App\Form\Traits\Thing\ThingType());
}, 'App\\Form\\Traits\\User\\ChangePasswordType' => function () {
    return ($this->privates['App\Form\Traits\User\ChangePasswordType'] ?? $this->privates['App\Form\Traits\User\ChangePasswordType'] = new \App\Form\Traits\User\ChangePasswordType());
}, 'App\\Form\\Traits\\User\\LoginType' => function () {
    return ($this->privates['App\Form\Traits\User\LoginType'] ?? $this->privates['App\Form\Traits\User\LoginType'] = new \App\Form\Traits\User\LoginType());
}, 'App\\Form\\Traits\\User\\RecoverType' => function () {
    return ($this->privates['App\Form\Traits\User\RecoverType'] ?? $this->privates['App\Form\Traits\User\RecoverType'] = new \App\Form\Traits\User\RecoverType());
}, 'App\\Form\\Traits\\User\\RegisterType' => function () {
    return ($this->privates['App\Form\Traits\User\RegisterType'] ?? $this->privates['App\Form\Traits\User\RegisterType'] = new \App\Form\Traits\User\RegisterType());
}, 'App\\Form\\Traits\\User\\UpdateSelfType' => function () {
    return ($this->privates['App\Form\Traits\User\UpdateSelfType'] ?? $this->privates['App\Form\Traits\User\UpdateSelfType'] = new \App\Form\Traits\User\UpdateSelfType());
}, 'App\\Form\\Traits\\User\\UserType' => function () {
    return ($this->privates['App\Form\Traits\User\UserType'] ?? $this->privates['App\Form\Traits\User\UserType'] = new \App\Form\Traits\User\UserType());
}, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
    return ($this->privates['form.type.entity'] ?? $this->load('getForm_Type_EntityService.php'));
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
    return ($this->privates['form.type.choice'] ?? $this->load('getForm_Type_ChoiceService.php'));
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
    return ($this->privates['form.type.form'] ?? $this->load('getForm_Type_FormService.php'));
})), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->load('getForm_TypeExtension_Form_HttpFoundationService.php'));
    yield 1 => ($this->privates['form.type_extension.form.validator'] ?? $this->load('getForm_TypeExtension_Form_ValidatorService.php'));
    yield 2 => ($this->privates['form.type_extension.upload.validator'] ?? $this->load('getForm_TypeExtension_Upload_ValidatorService.php'));
    yield 3 => ($this->privates['form.type_extension.csrf'] ?? $this->load('getForm_TypeExtension_CsrfService.php'));
    yield 4 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->load('getForm_TypeExtension_Form_DataCollectorService.php'));
}, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? $this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension());
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? $this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension());
}, 1)), new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->load('getForm_TypeGuesser_ValidatorService.php'));
    yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->load('getForm_TypeGuesser_DoctrineService.php'));
}, 2))), ($this->privates['form.resolved_type_factory'] ?? $this->load('getForm_ResolvedTypeFactoryService.php')));