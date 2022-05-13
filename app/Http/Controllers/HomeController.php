<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\EmployeeCareer;
use App\Models\EmployeeGeneral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }




    public function Return_Complete_Register()
    {
        if(auth()->user()->reg == 1){
            if(auth()->user()->is_employer == 0){
                return redirect('Employee/home');
            }else{
                return redirect('Employer/home');
            }
        }else{
            if(auth()->user()->is_employer == 0){
                return redirect('Employee/career');
            }else{
                return redirect('Employer/general');
            }
        }
    }
}
