<?php namespace Bantenprov\CustomerRetribusi\Http\Middleware;

use Closure;

/**
 * The CustomerRetribusiMiddleware class.
 *
 * @package Bantenprov\CustomerRetribusi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class CustomerRetribusiMiddleware
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
        return $next($request);
    }
}
