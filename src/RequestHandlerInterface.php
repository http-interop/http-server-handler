<?php

namespace Interop\Http\Server;

use Psr\Http\Server\RequestHandlerInterface as PsrInterface;

/**
 * An HTTP request handler process a HTTP request and produces an HTTP response.
 * This interface defines the methods require to use the request handler.
 */
interface RequestHandlerInterface extends PsrInterface
{
}
