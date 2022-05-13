<?php

namespace App\Http\Middleware;

use App\Models\EmployeeCareer;
use App\Models\EmployeeGeneral;
use App\Models\EmployerGeneral;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIfTheUserRegisterd
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
        if(Auth::check()){
            if(EmployeeGeneral::where('employee_id',auth()->user()->id)->get() != null){
                return redirect('Employee/home');
            }else if(EmployerGeneral::where('user_id',auth()->user()->id)){
                return redirect('Employer/home');
            }
        }else{
            return $next($request);
        }
    }
}
