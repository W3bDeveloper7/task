<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Response;

class ProcessData
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
        if (!empty($request->body) || $request->body) {
            $request_array = $request->all();
                try {
                    $decrypted = Crypt::decrypt($request->body);
                    $request_array['body'] = $decrypted;

                } catch (DecryptException $exception) {
                    $request_array['body'] = $exception->getCode();
                }
            $request->replace($request_array);
            }
        return $next($request);
    }

}
