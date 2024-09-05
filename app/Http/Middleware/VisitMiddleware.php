<?php

namespace App\Http\Middleware;

use App\Models\Ceo\Visit;
use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Symfony\Component\HttpFoundation\Response;

class VisitMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ipAddress = '102.47.49.8';
        $checkipAddress = Visit::where('ip',$ipAddress)->first();
        if(!$checkipAddress){
            $location = Location::get($ipAddress);
            Visit::create([
                'ip'=>$ipAddress,
                'country_name'=>$location->countryCode,
            ]);
        }
        return $next($request);
    }
}
