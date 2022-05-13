@extends('Layouts.employerHomeLayoute')

@section('content')
    <div  style="margin-top:50px;">
                <div  style="margin-bottom:15px;margin-left:34%">
                    <img class="rounded-circle" style="background-size: cover;" height="100px" width="100px" src="{{asset('uploads/employee_images/'.$general->image_url)}}">
                </div>
            <div class="card" style="width: 75%;height:600px">
                <h4 style="padding-left:30px;padding-top:20px">Personal Info</h4>
                <div class="inner" style="margin-top: -20px">
                    <div>
                        <label style="padding-bottom: 5px;color:#656565">Name</label>
                        <input disabled class="form-control" name="name" value="{{$user->name}}" id="job_title" type="text" placeholder="Name" style="width:90%;height:50px" required>
                    </div>
                </div>
                <div class="inner" style="margin-top: -40px">
                    <div>
                        <label style="padding-bottom: 5px;color:#595858">Email</label>
                        <input disabled class="form-control" name="email" value="{{$user->email}}" id="job_title" type="text" placeholder="Name" style="width:90%;height:50px" required>
                    </div>
                </div>
                <div class="inner" style="margin-top: -40px">
                    <div>
                        <label style="padding-bottom: 5px;color:#605f5f">Gender</label>
                        <select class="form-select" disabled  name="gender" aria-label="Default select example" style=" width: 90%; color: grey;border-color: darkgray;border-radius: 4px">
                            <option>{{$general->gender}}</option>
                        </select>
                    </div>
                </div>
                <div class="inner" style="margin-top: -40px">
                    <div>
                        <label style="padding-bottom: 5px;color:#626262">Mobile Number 1</label>
                        <input disabled class="form-control" name="phone1" value="{{$general->phone1}}" id="job_title" type="text" placeholder="Name" style="width:90%;height:50px" required>
                    </div>
                </div>
                <div class="inner" style="margin-top: -40px">
                    <div>
                        <label style="padding-bottom: 5px;color:#5d5d5d">Mobile Number 2</label>
                        <input disabled  class="form-control" name="phone2" value="{{$general->phone2}}" id="job_title" type="text" placeholder="Name" style="width:90%;height:50px" required>
                    </div>
                </div>
            </div>
    </div>
    <div class="card" style="width: 75%;margin-top: 30px;">
        <h4 style="padding: 30px 0 0 30px">Career Info</h4>
        <div class="wrapper" style="width: 90%;margin-top: 30px">
            <input type="radio" name="career_level" id="option-1" value="student" disabled required {{$career->career_level=='student'?'checked':''}}>
            <input type="radio" name="career_level" id="option-2" value="junior" disabled required {{$career->career_level=='junior'?'checked':''}}>
            <input type="radio" name="career_level" id="option-3" value="senior" disabled required {{$career->career_level=='senior'?'checked':''}}>
            <label for="option-1" class="option option-1">
                <div class="dot"></div>
                <span style="padding:0 15px 0 15px">Student</span>
            </label>
            <label for="option-2" class="option option-2">
                <div class="dot"></div>
                <span style="padding:0 15px 0 15px">Junior</span>
            </label>
            <label for="option-3" class="option option-3">
                <div class="dot"></div>
                <span style="padding:0 15px 0 15px">Senior</span>
            </label>
        </div>
        <div style="width: 90%;margin-top:10px;margin-left: 25px;margin-bottom: 40px;">
            <div>
                <div class="row" style="padding-left: 13px;padding-top: 15px">
                    <input class="form-control" required name="skill1" disabled type="text" value="{{$career->skill1}}" style="width: 105px;font-size:16px" >
                    <input class="form-control" required name="skill2" disabled type="text" value="{{$career->skill2}}" style="width: 105px;margin-left: 10px;font-size:16px">
                    <input class="form-control" required name="skill3" disabled type="text" value="{{$career->skill3}}" style="width: 105px;margin-left: 10px;font-size:16px">
                    <input class="form-control" required name="skill4" disabled type="text" value="{{$career->skill4}}" style="width: 105px;margin-left: 10px;font-size:16px">
                </div>
                <div class="row" style="padding-left: 13px;padding-top: 15px">
                    <input class="form-control" required name="skill5" disabled type="text" value="{{$career->skill5}}" style="width: 105px;font-size:16px" >
                    <input class="form-control" required name="skill6" disabled type="text" value="{{$career->skill6}}" style="width: 105px;margin-left: 10px;font-size:16px">
                    <input class="form-control" required name="skill7" disabled type="text" value="{{$career->skill7}}" style="width: 105px;margin-left: 10px;font-size:16px">
                    <input class="form-control" required name="skill8" disabled type="text" value="{{$career->skill8}}" style="width: 105px;margin-left: 10px;font-size:16px">
                </div>
            </div>
        </div>
        <div class="inner" style="margin-top: -40px">
            <div>
                <input disabled  class="form-control" name="job_title" value="{{$career->job_title}}" id="job_title" type="text" placeholder="job title" style="width:90%;height:50px" required>
            </div>
        </div>
        <div class="inner" style="margin-top: -20px;margin-left: 12px">
            <div class="row">
                <input disabled class="form-control" name="category_name" value="{{$career->category->category_name}}" id="job_title" type="text" placeholder="job title" style="width:40%;height:50px" required>
                <input  disabled class="form-control" name="job_name" value="{{$career->job->job_name}}" id="job_title" type="text" placeholder="job title" style="width:40%;height:50px;margin-left:25px" required>
            </div>
        </div>
        <div class="inner" style="margin-top: -20px;margin-bottom:20px">
            <div>
                <input disabled  class="form-control" name="expected_salary" value="{{$career->expected_salary}}" id="job_title" type="text" placeholder="accepted salary" style="width:90%;height:50px" required>
            </div>
        </div>
    </div>
    <div class="card card-css" style="width:75%;margin-top:30px">
        <h4 style="padding:30px 0  0 30px">Education Info</h4>
        <div class="inner" style="width:120%">
            <div style="padding:20px 0 20px 25px;">
                <div style="width:75%"  class="card">
                    <div style="width:80%;padding:25px 0 0 25px ">
                        <div class="form-group" >
                            <input disabled type="text" value="{{$edu->university}}" name="university" placeholder="University/Institution" class="form-control" id="usr" required>
                        </div>
                        <div class="form-group" style="margin-top:25px">
                            <input disabled type="text" value="{{$edu->study_field}}" name="study_field" placeholder="Field of study"  class="form-control" id="usr" required>
                        </div>
                        <div class="inner" style="margin-left: -17px">
                            <div class="row">
                                <input disabled class="form-control" name="category_name" value="{{$edu->starts_year}}" id="job_title" type="text" placeholder="job title" style="width:40%;height:40px" required>
                                <input  disabled class="form-control" name="job_name" value="{{$edu->end_year}}" id="job_title" type="text" placeholder="job title" style="width:40%;height:40px;margin-left:25px" required>
                            </div>
                        </div>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
    <div class="card card-css" style="width:75%;margin-top:30px">
        <h4 style="padding: 30px 0 0 30px">Experience Info</h4>
        <div class="inner" style="width: 120%">
            <div style="padding:20px 0 20px 25px;">
                <div style="width:75%"  class="card">
                    <div style="width:80%;padding:25px 0 0 25px;margin-bottom: 25px ">
                        <div class="form-group" >
                            <input disabled type="text" value="{{$experience->company}}" class="form-control" id="usr" placeholder="CompanyName" name="company1">
                        </div>
                        <div class="form-group" style="margin-top: 20px">
                            <input disabled type="text" placeholder="job position" name="position1" value="{{$experience->job_position}}" class="form-control" id="usr">
                        </div>
                        <div class="row pb-2" style="margin-top: 20px">
                            <div class="form-group col-md-4" >
                                <select disabled class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="startyear3">
                                    <option >{{$experience->starts_year}}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4" >
                                <select disabled class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="endyear3">
                                    <option >{{$experience->end_year}}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4" >
                                <select disabled class="form-select" required name="location1" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                                    <option value="1"> {{$experience->location}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
@endsection
