<?php
namespace App\Services;

use Illuminate\Http\Request;

/**
 * DummyRequestLogger
 * 
 */
class PathRequestLogger extends AbstractRequestLogger
{
    
    protected function getMessage():string
    {
        return 'The path request method is: ';
    }

    protected function extractRequestData(Request $request): array
    {
        // $uri = $request->path();
        $url = $request->url();
        $urlWithQueryString = $request->fullUrl();
   
        return ['the path is' => $urlWithQueryString];    }
}