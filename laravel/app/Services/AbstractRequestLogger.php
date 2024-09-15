<?php
namespace App\Services;

use Illuminate\Http\Request;
use Psr\Log\LoggerInterface;

/**
 * AbstractRequestLogger
 */

abstract class AbstractRequestLogger implements RequestLoggerInterface
{
    private LoggerInterface $logger;

    /**
     * AbstractRequestLogger constructor
     * 
     * @param LoggerInterface $logger
     */

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * log Request
     * 
     * @param Request $request
     */
    public function logRequest(Request $request):void
    {
        $this->logger->info($this->getMessage(), $this->extractRequestData($request));
    }

    /**
     * Provide Message for logging
     * 
     * @return string
     */
    protected function getMessage():string
    {
        return 'Request Processed!';
    }

    /**
     * Extract required Request Data
     * 
     * @param Request $request
     * @return array
     */
    abstract protected function extractRequestData(Request $request): array;
}