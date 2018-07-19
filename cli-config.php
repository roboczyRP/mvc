<?php
require_once (__DIR__.'/vendor/autoload.php');

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$smModule=false;

foreach ($_SERVER['argv'] as $key=>$value) {
    if (preg_match('/--sm-module/', $value)) {
        $smModule = $value;
        unset($_SERVER['argv'][$key]);
        $_SERVER['argc'] -= 1;
    }
}
    if($smModule)
    {
        $path=array(__DIR__.'/src/'.explode(':',$smModule)[1]);
    }
    else
    {
        $path=array(__DIR__.'/src/');
    }

    $config=include(__DIR__.'/src/config.php');

    $setup=Setup::createAnnotationMetadataConfiguration($path,true);
    $entityManager = EntityManager::create($config['database'],$setup);

    return ConsoleRunner::createHelperSet($entityManager);
