<?php
namespace App\Services;

use Illuminate\Http\Request;

/**
 * DummyRequestLogger
 * 
 */
class DummyRequestLogger extends AbstractRequestLogger
{
    
    protected function getMessage():string
    {
        return 'This is Dummy logger';
    }

    protected function extractRequestData(Request $request): array
    {
        return ['test' =>'to show that it works'];
    }
}