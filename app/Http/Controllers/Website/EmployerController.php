<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\EmployerGeneral;
use App\Models\User;
use App\Traits\Media;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    use Media;
    public function Return_Register_General_Info(){
        return view('Website.EmployerCompleteRegister.general_info');
    }
    public function ReturnEmployerHomePage(){
        return view('Website.EmployerHome.employerHome');
    }

    public function SaveEmployerInfo(Request $request){

        $data = $request->all();

        $request->validate([
            'company_name'=>['required','max:50'],
            'company_location'=>['required'],
            'phone1'=>['required','max:50'],
            'phone2'=>['required','max:50'],
            'company_starting'=>['required','max:50'],
            'image'=>'required|image|mimes:jpg,png,jpeg,|max:2048',
        ]);

        $employer = new EmployerGeneral;
        $user = User::find(auth()->user()->id);
        $user->reg = 1;


        $employer->user_id= auth()->user()->id;
        $employer->company_name= $data['company_name'];
        $employer->company_location= $data['company_location'];
        $employer->phone1= $data['phone1'];
        $employer->phone2= $data['phone2'];
        $employer->company_starting= $data['company_starting'];
        $employer->image_url=$this->StoreImage($request,'uploads/employer_images');
        $employer->save();
        $user->save();
        return redirect('Employer/home');

    }
}
