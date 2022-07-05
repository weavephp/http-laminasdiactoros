<?php

declare(strict_types = 1);

/**
 * Weave Laminas Diactoros PSR7 Adaptor Request Factory.
 */

namespace Weave\Http\LaminasDiactoros;

use \Laminas\Diactoros\ServerRequestFactory;
use \Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Weave Request Factory to return Laminas Diactoros Request instances.
 */
class RequestFactory implements \Weave\Http\RequestFactoryInterface
{
	/**
	 * Create and return a PSR7 ServerRequestInterface complient object instance from global data.
	 *
	 * @return Request A new Request object based on global data.
	 */
	public function newIncomingRequest(): Request
	{
		return ServerRequestFactory::fromGlobals($_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
	}
}
