<?php

namespace GViana\PassportMultiauth\Facades;

use Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory;
use Symfony\Component\HttpFoundation\Request;

class ServerRequest
{
    private $psrHttpFactory;

	public function __construct(PsrHttpFactory $psrHttpFactory)
	{
		$this->psrHttpFactory = $psrHttpFactory;
	}
    /**
     * @todo Switch deprecated DiactorosFactory by PsrHttpFactory
     * @param Request $symfonyRequest
     * @return \Psr\Http\Message\RequestInterface|\Psr\Http\Message\ServerRequestInterface|\Zend\Diactoros\ServerRequest
     */
    public static function createRequest(Request $symfonyRequest)
    {
        return $this->psrHttpFactory->createRequest($symfonyRequest);
    }
}
