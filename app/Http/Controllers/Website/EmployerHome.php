<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Category;
use App\Models\EmployeeCareer;
use App\Models\EmployeeEducation;
use App\Models\EmployeeExperience;
use App\Models\EmployeeGeneral;
use App\Models\EmployerGeneral;
use App\Models\JobOffers;
use App\Models\Jobs;
use App\Models\Project;
use App\Models\Review;
use App\Models\User;
use App\Traits\Media;
use Illuminate\Http\Request;

class EmployerHome extends Controller
{
    use Media;
    public function ReturnAddOfferPage(){
        $categories  = Category::all();
        return view('Website.EmployerHome.addoffer',compact('categories'));
    }
    public function ReturnEmployerHomePage(){
        $offers = JobOffers::where('user_id',auth()->user()->id)->get();
        return view('Website.EmployerHome.employerHome',compact(['offers']));
    }

    public function Profile(){
        $profile = EmployerGeneral::where('user_id',auth()->user()->id)->first();
        $user = User::find(auth()->user()->id);
        return view('Website.EmployerHome.profile',compact('profile','user'));
    }

    public function ProfileUpdate(Request $request){
        $data  = $request->all();
        $model = User::find(auth()->user()->id)->employer_general->first();

        $this->ProfileValidate($request);
        if ($request->image){
            $this->UpdateImage($model,$request);
        }
        $model->company_name = $data['company_name'];
        $model->company_location = $data['company_location'];
        $model->phone1 = $data['phone1'];
        $model->phone2 = $data['phone2'];
        $model->company_starting = $data['company_starting'];
        $model->save();
        notify()->success('Profile Updated Successfully');
        return redirect()->back();
    }

    public function UpdateImage($model,$request){
        $image = $model->image_url;
        unlink('uploads/employer_images/'.$image);
        $image_url = $this->StoreImage($request,'uploads/employer_images/');
        $model->image_url = $image_url;
    }
    public function ProfileValidate($request){
        $request->validate([
            'image'=> 'image|mimes:jpg,png|max:2048',

        ]);
    }

    public function SearchOffers(Request $request){

    }

    public function SaveOffer(Request $request){

        $data = $request->all();
        $offer = new JobOffers;

        $offer->career_level = $data['career_level'];
        $offer->job_title = $data['offer_name'];
        $offer->category_id = $data['category_name'];
        $offer->job_type = $data['jobs-type'];
        $offer->job_desc = $data['offer_desc'];
        $offer->skill1 = $data['skill1'];
        $offer->skill2 = $data['skill2'];
        $offer->skill3 = $data['skill3'];
        $offer->skill4 = $data['skill4'];
        $offer->skill5 = $data['skill5'];
        $offer->type = $data['type'];
        $offer->salary_range = $data['expected_salary'];
        $offer->user_id = auth()->user()->id;
        $offer->experience_years = $data['experience-years'];

        $offer->save();
        notify()->success('Offer Added Successfully');
        return redirect('Employer/home');
    }

    public function ShowOffer($id){

        $offers = JobOffers::find($id);
        $category = JobOffers::find($id)->category;
        return view('Website/EmployerHome/showoffer',compact(['offers','category']));
    }

    public function ShowConditateProfile($id){
        $user = User::where('id',$id)->first();
        $general = EmployeeGeneral::where('employee_id',$id)->first();
        $career= EmployeeCareer::where('user_id',$id)->first();
        $edu = EmployeeEducation::where('employee_id',$id)->first();
        $experience = EmployeeExperience::where('employee_id',$id)->first();
        $categories = Category::all();
        return view('Website.EmployerHome.conditate_profile',compact(['user','general','career','edu','experience','categories']));
    }

    public function ShowOfferDetails($id){
        $offer = JobOffers::find($id);
        $category = Category::where('id',$offer->category_id)->first();
        $job = Jobs::where('id',$offer->job_type)->first();
        return view('Website.EmployerHome.offer_details',compact(['offer','category','job']));
    }

    public function ReturnPendingApplications(){
        $applications = Application::where('employer_id',auth()->user()->id)->where('status','Pending')->get();
        return view('Website.EmployerHome.applications',compact('applications'));
    }
    public function ReturnAcceptedApplications(){
        $applications = Application::where('employer_id',auth()->user()->id)->where('status','Accept')->get();
        return view('Website.EmployerHome.applications',compact('applications'));

    }
    public function ReturnRejectedApplications(){
        $applications = Application::where('employer_id',auth()->user()->id)->where('status','Reject')->get();
        return view('Website.EmployerHome.applications',compact('applications'));
    }

    public function AcceptApplication($id){
        $application = Application::find($id);
        $application->status = 'Accept';
        $application->save();
        return redirect()->back();
    }
    public function RejectApplication($id){
        $application = Application::find($id);
        $application->status = 'Reject';
        $application->save();
        return redirect()->back();
    }

    public function ReturnAllEmployerReviews(){
        $employer = EmployerGeneral::where('user_id',auth()->user()->id)->first();
        $reviews = Review::where('employer_general_id',$employer->id)->get();
        return view('Website.EmployerHome.reviews',compact('reviews'));
    }
}
