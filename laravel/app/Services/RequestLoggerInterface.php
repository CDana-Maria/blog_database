<?php
namespace App\Services;

use Illuminate\Http\Request;

/**
 * RequestLoggerInterface.
 * 
 */

 interface RequestLoggerInterface
 {
     /**
      * log Request data for future usage.
      * @param Request $request
      */

      public function logRequest(Request $request):void;
 }