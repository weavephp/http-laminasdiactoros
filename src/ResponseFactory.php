<?php

declare(strict_types = 1);

/**
 * Weave Laminas Diactoros PSR7 Adaptor Request Factory.
 */

namespace Weave\Http\LaminasDiactoros;

use \Laminas\Diactoros\Response;

/**
 * Weave Response Factory to return Laminas Diactoros Response instances.
 */
class ResponseFactory implements \Weave\Http\ResponseFactoryInterface
{
	/**
	 * Generate and return a fresh Response instance.
	 *
	 * @return Response
	 */
	public function newResponse(): Response
	{
		return new \Laminas\Diactoros\Response();
	}
}
