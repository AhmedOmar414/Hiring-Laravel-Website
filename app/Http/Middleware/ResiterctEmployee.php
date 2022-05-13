<?php

namespace App\Http\Middleware;

use App\Models\EmployeeGeneral;
use Closure;
use Illuminate\Http\Request;

class ResiterctEmployee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->is_employer == 1){
            return $next($request);
        }else{
            return abort(403);
        }
    }
}
