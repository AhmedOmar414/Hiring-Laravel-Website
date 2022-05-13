<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\ApplicationQuestions;
use App\Models\Category;
use App\Models\EmployeeCareer;
use App\Models\EmployeeEducation;
use App\Models\EmployeeGeneral;
use App\Models\EmployerGeneral;
use App\Models\JobOffers;
use App\Models\Review;
use App\Models\SavedOffers;
use App\Models\User;
use App\Traits\Media;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Utils;

class EmployeeHomeController extends Controller
{
    use Media;
    public function Index(){
        $employee  = EmployeeCareer::where('user_id',auth()->user()->id)->first();
        $offers = JobOffers::where('job_type',$employee->job_id)->orWhere('category_id',$employee->category_id)->orderby('job_type')->paginate(8);
        return view('Website.EmployeeHome.EmployeeHome',compact('offers'));
    }

    public function Profile(){
        return view('Website.EmployeeHome.profile');
    }
    public function GeneralInfo(){
        $employee = EmployeeGeneral::where('employee_id',auth()->user()->id)->first();
        $user = User::where('id',auth()->user()->id)->first();
        return view('Website.EmployeeHome.general_info',compact(['employee','user']));
    }
    public function UpdateGeneralInfo(Request $request,$id){
        $data = $request->all();
        $user = User::find($id);
        $general = EmployeeGeneral::where('employee_id',$id)->first();
        if($request->image){
            $image = $this->UpdateImage($general,$request);
            $data['image'] = $image;
        }
        $user->fill($data)->save();
        $general->fill($data)->save();
        return redirect()->back();
    }

    public function UpdateImage($model,$request){
        $image = $model->image_url;
        unlink('uploads/employee_images/'.$image);
        $image_url = $this->StoreImage($request,'uploads/employee_images/');
        $model->image_url = $image_url;
    }

    public function CareerInterest(){
        $categories = Category::all();
        $career = EmployeeCareer::where('user_id',auth()->user()->id)->with(['category','job'])->first();
        return view('Website.EmployeeHome.careerinterest',compact(['categories','career']));
    }

    public function UpdateCareerInterestInfo(Request $request,$id){
        $data = $request->all();
        $career = EmployeeCareer::where('user_id',$id)->first();

        $career->fill($data)->save();
        return redirect()->back();
    }

    public function Education(){
        $edu = EmployeeEducation::where('employee_id',auth()->user()->id)->first();
        return view('Website.EmployeeHome.education',compact('edu'));
    }

    public function UpdateEducationInfo(Request $request,$id){
        $data = $request->all();
        $edu = EmployeeEducation::where('employee_id',$id)->first();
        $edu->fill($data)->save();
        return redirect()->back();
    }

    public function Experience(){
        return view('Website.EmployeeHome.experience');
    }

    public function SaveJobOffer($offer_id,$user_id){
        $offer = JobOffers::find($offer_id)->toArray();
        $saved = new SavedOffers;
        $offer['job_offer_id'] = $offer_id;
        $offer['employer_id'] = $user_id;
        $offer['user_id'] = auth()->user()->id;
        $saved->fill($offer)->save();
        return redirect('Employee/saved_offers');
    }
    public function ReturnSavedOffers(){
        $offers = SavedOffers::where('user_id',auth()->user()->id)->get();
        return view('Website.EmployeeHome.saved_offers',compact('offers'));
    }

    public function DeleteSavedOffer($id){
        $offer = SavedOffers::find($id);
        $offer->delete();
        return back();
    }

    public function ReturnOfferDetails($id){
        $offer    = JobOffers::find($id);
        $category = Category::where('id',$offer->category_id)->first();
        $employer = EmployerGeneral::where('user_id',$offer->user_id)->first();
        $reviews = Review::where('employer_general_id',$employer->id)->get();
        return view('Website.EmployeeHome.offer_details',compact(['offer','category','employer','reviews']));
    }

    public function ReturnApplicationQuestionsPage($offer_id,$employer_id){
        return view('Website.EmployeeHome.application_questions',compact(['offer_id','employer_id']));
    }

    public function SaveApplication(Request $request,$offer_id,$employer_id){
        $data = $request->all();
        $question = new ApplicationQuestions;
        $question->offer_id = $offer_id;
        $question->fill($data)->save();
        Application::create([
            'offer_id'=>$offer_id,
            'user_id'=>auth()->user()->id,
            'employer_id'=>$employer_id,
            'status'=>'Pending'
        ]);
        return redirect('Employee/applications');
    }

    public function ReturnAllApplications(){
        $applications = Application::where('user_id',auth()->user()->id)->get();
        return view('Website.EmployeeHome.applications',compact('applications'));
    }

    public function AddReview(Request $request,$employer_id){

        $data = $request->all();
        Review::create([
            'employer_general_id'=>$employer_id,
            'user_id'=>auth()->user()->id,
            'review'=>$data['review'],
        ]);
        return redirect()->back();
    }


}
