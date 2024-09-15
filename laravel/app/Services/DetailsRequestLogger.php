<?php
namespace App\Services;

use Illuminate\Http\Request;

/**
 * DummyRequestLogger
 * 
 */
class DetailsRequestLogger extends AbstractRequestLogger
{
    
    protected function getMessage():string
    {
        return 'The details request method is: ';
    }

    protected function extractRequestData(Request $request): array
    {
        if (app()-> environment('local'))
         {
            return
             [
                'IP Request-' => $request->ip(),
                'Extent-' => $request->url(),
                'Token-' => $request->bearerToken(),
                'Browser-' => $request->header('User-Agent')
            ];
        }}
}