<?php

namespace Simplex;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;


class Framework
{
    protected $matcher;
    protected $controller_resolver;
    protected $arguments_resolver;

    public function __construct(UrlMatcher $matcher, ControllerResolver $controller_resolver,ArgumentResolver $arguments_resolver)
    {
        $this->matcher=$matcher;
        $this->controller_resolver=$controller_resolver;
        $this->arguments_resolver=$arguments_resolver;

    }

    public function handle(Request $request)
    {
        try {
            $this->matcher->getContext()->fromRequest($request);
            $request->attributes->add($this->matcher->match($request->getPathInfo()));

            $controller = $this->controller_resolver->getController($request);
            $arguments = $this->arguments_resolver->getArguments($request, $controller);

            return call_user_func_array($controller, $arguments);
        }catch(ResourceNotFoundException $e)
        {
            return $e->getMessage();
        }

    }
}