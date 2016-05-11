<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
use Closure;
class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $excludeRoutes = [
        '*'
    ];
    public function handle($request, Closure $next)
    {
        foreach( $this->excludeRoutes as $route )
        {
            if( $request->is( $route ) ) return $next($request);
        }

        return parent::handle($request, $next);
    }
}
