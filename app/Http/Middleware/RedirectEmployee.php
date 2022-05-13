<?php

namespace App\Http\Middleware;

use App\Models\EmployeeCareer;
use App\Models\EmployeeGeneral;
use Closure;
use Illuminate\Http\Request;

class RedirectEmployee
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
        if(auth()->user()->comp_reg == 0){
            return redirect()->back();
        }else{
            return $next($request);
        }
    }
}
