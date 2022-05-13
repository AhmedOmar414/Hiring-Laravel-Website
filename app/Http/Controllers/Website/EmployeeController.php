<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\EmployeeCareer;
use App\Models\EmployeeEducation;
use App\Models\EmployeeExperience;
use App\Models\EmployeeGeneral;
use App\Models\User;
use App\Traits\Media;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    use Media;

    public function Return_Register_Career_Info(){
        $categories = Category::with('jobs')->get();
        return view('Website.EmployeeCompleteRegister.skills_info',compact(['categories']));
    }
    public function Return_Register_General_Info(){
        return view('Website.EmployeeCompleteRegister.general_info');
    }

    //start save career info
    public function SaveCareerInfo(Request $request){
        $data = $request->all();
        $this->validatee($request);
        $this->EmployeeCareer($data);
        $this->EmployeeEducation($data);
        $this->EmployeeExperience($data);

        return redirect('Employee/general_info');
    }//end save career info

    public function SaveGeneralInfo(Request $request){

        $request->validate([
            'gender'=>['required','in:male,female'],
            'phone1'=>['required','max:50'],
            'phone2'=>['required','max:50'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $model = new EmployeeGeneral;
        $user = User::find(auth()->user()->id);
        $user->reg = 1;
        $model->employee_id = auth()->user()->id;
        $model->phone1 = $request->phone1;
        $model->phone2 = $request->phone2;
        $model->gender = $request->gender;
        $model->image_url = $this->StoreImage($request,'uploads/employee_images');
        $user->save();
        $model->save();


        return redirect('Employee/home');

    }

    //start employee career
    public function EmployeeCareer(array $data){
        $career = new EmployeeCareer;
        $career->career_level = $data['level'];
        $career->job_title = $data['job_title'];
        $career->category_id = $data['job_category'];
        $career->job_id = $data['job_cat'];
        $career->skill1 = $data['skill1'];
        $career->skill2 = $data['skill2'];
        $career->skill3 = $data['skill3'];
        $career->skill4 = $data['skill4'];
        $career->skill5 = $data['skill5'];
        $career->skill6 = $data['skill6'];
        $career->skill7 = $data['skill7'];
        $career->skill8 = $data['skill8'];
        $career->expected_salary = $data['salary'];
        $career->user_id = auth()->user()->id;
        $career->save();
    }//end employee career

    //start employee education
    public function EmployeeEducation(array $data){
        $bool = true;
        for($i =0; $i<2 ;$i++ ){
            if($bool){
                $education = new EmployeeEducation;
                $education->employee_id = auth()->user()->id;
                $education->university = $data['university1'];
                $education->study_field = $data['field1'];
                $education->starts_year = $data['startyear1'];
                $education->end_year = $data['endyear1'];
                $education->save();
                $bool = false;
            }else if($data['university2']){
                $education = new EmployeeEducation;
                $education->employee_id = auth()->user()->id;
                $education->university = $data['university2'];
                $education->study_field = $data['field2'];
                $education->starts_year = $data['startyear2'];
                $education->end_year = $data['endyear2'];
                $education->save();
            }else{
                return null;
            }
        }

    }//end employee education

    //start employee experience
    public function EmployeeExperience(array $data){
        $bool = true;
        for($i =0; $i<2 ;$i++ ){
            if($bool){
                $experience = new EmployeeExperience;
                $experience->employee_id = auth()->user()->id;
                $experience->company = $data['company1'];
                $experience->job_position = $data['position1'];
                $experience->starts_year = $data['startyear3'];
                $experience->end_year = $data['endyear3'];
                $experience->location = $data['location1'];
                $experience->save();
                $bool = false;
            }else if($data['company2']){
                $experience = new EmployeeExperience;
                $experience->employee_id = auth()->user()->id;
                $experience->company = $data['company2'];
                $experience->job_position = $data['position2'];
                $experience->starts_year = $data['startyear4'];
                $experience->end_year = $data['endyear4'];
                $experience->location = $data['location2'];
                $experience->save();
            }else{
                return null;
            }
        }

    }//end employee experience

    //start validation
    public function validatee($req){
        $req->validate([
            'level'=>['required','in:student,junior,senior'],
            'job_title'=>['required','max:50'],
            'job_category'=>['required'],
            'job_cat'=>['required'],
            'salary'=>['required','max:50'],
            'university1'=>['required','max:50'],
            'field1'=>['required','max:50'],
            'startyear1'=>['required'],
            'endyear1'=>['required'],
            'startyear3'=>['required'],
            'endyear3'=>['required'],
            'company1'=>['required','max:50'],
            'position1'=>['required','max:50'],
            'location1'=>['required','max:50'],
        ]);
    }//end validation
}
