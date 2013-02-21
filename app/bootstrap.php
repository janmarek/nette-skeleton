<?php

require WWW_DIR . '/../libs/autoload.php';

$configurator = new Nette\Config\Configurator();

$debugMode = file_exists(__DIR__ . '/dev');
$configurator->setDebugMode($debugMode);
$configurator->enableDebugger(__DIR__ . '/../log');

$configurator->setTempDirectory(__DIR__ . '/../temp');
$configurator->createRobotLoader()
	->addDirectory(APP_DIR)
	->register();

$webloaderExtension = new \WebLoader\Nette\Extension();
$webloaderExtension->install($configurator);

$configurator->addConfig(__DIR__ . '/config/config.neon', FALSE);
$configurator->addConfig(__DIR__ . '/config/config.local.neon', FALSE);
$container = $configurator->createContainer();

if (!defined('CANCEL_START_APP')) {
	$container->application->run();
}