<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Crypt;

class AfterProcessData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //get the response
        $response = $next($request);
        //encrypt content of response
        $content = Crypt::encrypt($response->getContent());
        //set the content
        $response->setContent($content);
        //return response
        return $response;
    }


}
