<?php
require_once 'vendor/autoload.php';

// Setup Doctrine
$configuration = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
    $path = [__DIR__.'/entities'],
    $isDevMode = true
);

// Setup connection parameters
$connection_parameters = [
    'dbname' => 'doctrine',
    'user' => 'root',
    'password' => 'root',
    'host' => 'localhost',
    'driver' => 'pdo_mysql'
];

// Get the entity manager
$entity_manager = \Doctrine\ORM\EntityManager::create($connection_parameters, $configuration);
