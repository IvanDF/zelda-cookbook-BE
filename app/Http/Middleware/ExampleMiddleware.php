<?php
namespace AppHttpMiddleware; 

use AppApiKey;
use Closure;

class ApiAuthMiddleware
{
    public function handle($request, Closure $next)
    {
        $tokenValid = ApiKey::where('api_key', $request->header('Authorization'))->exists();

        if (!$tokenValid) {
            return response()->json('Unauthorized', 401);
        } 

        return $next($request);
    }
}