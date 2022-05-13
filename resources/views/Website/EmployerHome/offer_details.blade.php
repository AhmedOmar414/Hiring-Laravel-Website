@extends('Layouts.employerHomeLayoute')

@section('content')
    <div class="card" style="width:75%;margin-top: 20px;padding: 0;display:flex">
        <div class="card-header" >
            <div style="margin-top: 30px;margin-left: 30px">
                <h3 style="padding-bottom: 10px;text-align:center"> Offer Details</h3>
                <div style="padding-bottom: 20px">
                    <div class="input-group">
                        <input disabled type="text"  required name="offer_name" value="Job Title : {{$offer->job_title}}" class="form-control" placeholder="enter job offer title" style="height:50px">
                    </div>
                </div>
                <div style="padding-bottom: 20px">
                    <div class="input-group">
                        <select disabled class="form-select" name="type" required style="height:50px;color:grey">
                            <option >Work Type : {{$offer->type}}</option>
                        </select>
                    </div>
                </div>
                <div style="padding-bottom: 20px">
                    <div class="input-group">
                        <textarea  disabled class="form-control" name="offer_desc" rows="4" placeholder="enter job offer desc">{{$offer->job_desc}}</textarea>
                    </div>
                </div >
                <div style="padding-bottom: 20px">
                    <div class="input-group">
                        <select disabled class="form-select" name="career_level" required style="height:50px;color:grey">
                            <option >Career Level : {{$offer->career_level}}</option>
                        </select>
                    </div>
                </div>
                <div style="padding-bottom: 20px">
                    <select disabled class="form-select" id="category_list2" name="category_name" required style="height:50px;color:grey">
                        <option >Job Category : {{$category->category_name}}</option>

                    </select>
                </div>
                <div style="padding-bottom: 20px">
                    <select disabled class="form-select" id="sub_cat2" name="jobs-type" required style="height:50px;color:grey">
                        <option >Job Name : {{$job->job_name}}</option>
                    </select>
                </div>
                <div style="padding-bottom: 20px">
                    <div class="input-group" >
                        <input disabled type="text" required name="experience-years" value="Experience Years : {{$offer->experience_years}}" class="form-control" placeholder="experience years" style="height:50px">
                    </div>
                </div>
                <div style="padding-bottom: 20px">
                    <div class="input-group row">
                        <div class="col-md-2">
                            <input type="text" name="skill1" disabled value="{{$offer->skill1}}" class="form-control" placeholder="skill2" style="height:50px" required>
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="skill2" class="form-control" disabled value="{{$offer->skill2}}"  placeholder="skill3" style="height:50px" required>
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="skill3" class="form-control" disabled value="{{$offer->skill3}}"  placeholder="skill4" style="height:50px" required>
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="skill4" class="form-control" disabled value="{{$offer->skill4}}"  placeholder="skill5" style="height:50px" required>
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="skill5" class="form-control" disabled value="{{$offer->skill5}}"  placeholder="skill6" style="height:50px" required>
                        </div>
                    </div>
                    <div style="padding-bottom: 20px;margin-top: 20px">
                        <div class="input-group" >
                            <input disabled type="text"  value="Expected Salary: {{$offer->salary_range}}"  required name="expected_salary" class="form-control" placeholder="salary range" style="height:50px">
                        </div>
                    </div>
                    <div style="padding-bottom: 20px">
                        <div class="input-group" >
                            <input disabled type="text" required name="experience-years" value="Posted : {{$offer->created_at->diffForHumans() }}" class="form-control" placeholder="experience years" style="height:50px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
