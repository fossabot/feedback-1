<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.default_metadata_driver' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php';

$this->privates['doctrine.orm.default_metadata_driver'] = $instance = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();

$instance->addDriver(($this->privates['doctrine.orm.default_annotation_metadata_driver'] ?? $this->load('getDoctrine_Orm_DefaultAnnotationMetadataDriverService.php')), 'App\\Entity');

return $instance;