<?php

namespace GViana\PassportMultiauth\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ServerRequestInterface;
use GViana\PassportMultiauth\Facades\ServerRequest;
use Symfony\Component\HttpFoundation\Request;

class ServerRequestFacadeTest extends TestCase
{
    public function testCreateRequest()
    {
        $symfonyRequest = Request::create('/');

        $psrRequest = ServerRequest::createRequest($symfonyRequest);

        $this->assertInstanceOf(ServerRequestInterface::class, $psrRequest);
    }
}
