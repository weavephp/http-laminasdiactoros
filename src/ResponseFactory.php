<?php
/**
 * Weave Laminas Diactoros PSR7 Adaptor Request Factory.
 */

namespace Weave\Http\LaminasDiactoros;

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
	public function newResponse()
	{
		return new \Laminas\Diactoros\Response();
	}
}
