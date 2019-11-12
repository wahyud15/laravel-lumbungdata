<?php

namespace App\Http\Middleware;

use Closure;

class RagamAccess
{
    public function handle($request, Closure $next)
    {
        $headers = [
            'Access-Control-Allow-Origin'      => '*',
            // 'Access-Control-Allow-Methods'     => 'POST, GET, PUT, DELETE',
            'Access-Control-Allow-Methods'     => 'GET',
            'Access-Control-Allow-Credentials' => 'true',
            'Access-Control-Max-Age'           => '86400',
            'Access-Control-Allow-Headers'     => 'Content-Type, Authorization, X-Requested-With'
        ];

        $response = $next($request);
        foreach($headers as $key => $value)
        {
            $response->header($key, $value);
        }

        return $response;
    }
}
