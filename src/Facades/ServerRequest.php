<?php

namespace GViana\PassportMultiauth\Facades;

use Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory;
use Symfony\Component\HttpFoundation\Request;
use Nyholm\Psr7\Factory\Psr17Factory;


class ServerRequest
{
    /**
     * @todo Switch deprecated DiactorosFactory by PsrHttpFactory
     * @param Request $symfonyRequest
     * @return \Psr\Http\Message\RequestInterface|\Psr\Http\Message\ServerRequestInterface|\Zend\Diactoros\ServerRequest
     */
    public static function createRequest(Request $symfonyRequest)
    {
        $psr17Factory = new Psr17Factory();
        $psrHttpFactory = new PsrHttpFactory($psr17Factory, $psr17Factory, $psr17Factory, $psr17Factory);
        return $psrHttpFactory->createRequest($symfonyRequest);
    }
}
