<?php

namespace App\Http\Middleware;

use App\Services\RequestLoggerInterface;
use Closure;
use Illuminate\Http\Request;

class RequestLoggerMiddleware
{

private RequestLoggerInterface $requestLogger;

    public function __construct(RequestLoggerInterface $requestLogger)
    {
        $this->requestLogger=$requestLogger;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $this->requestLogger->logRequest($request);
        $response = $next($request);
        return $response;
    }
}
