cd src<?php
// connection.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// This create a Doctrine ORM config
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

// Connect to a database using DBAL
$connectionParams = array(
	'dbname' => 'bluesky_app',
	'user' => 'root',
	'password' => '',
	'host' => 'localhost',
	'driver' => 'pdo_mysql',
);


// Database configuration parameters - using MySQL
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
