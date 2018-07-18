<?php
/**
 * Created by PhpStorm.
 * User: rp
 * Date: 18.07.18
 * Time: 11:08
 */

namespace Simplex\Providers;


abstract class ServiceProviders
{
    protected $config;

    public function __construct(array $conf)
    {
        $this->config = $conf;
    }

    public abstract function provide();
}