<?php
/**
 * Created by PhpStorm.
 * User: rp
 * Date: 18.07.18
 * Time: 12:27
 */

namespace Simplex\Providers;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;




class DoctrinServiceProvider extends ServiceProviders
{
    public function provide()
    {
        $config = Setup::createAnnotationMetadataConfiguration([],true);
        return EntityManager::create($this->config,$config);

    }
}