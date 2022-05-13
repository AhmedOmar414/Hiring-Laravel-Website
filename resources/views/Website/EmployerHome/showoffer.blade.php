@extends('Layouts.employerHomeLayoute')

@section('content')


    <div class="container" style="width: 75%">
        <div class="card shadow-sm p-3 mb-5 bg-white rounded " style="width: 100%;margin-top: 25px">
            <div class="row" style="margin-left:15px">
                <div class="card-title col-md-11">
                    <h4 >{{$offers->job_title}}</h4>
                    <div class="row" style="margin-left:0;padding-top: 10px">
                        <div class="col-md-6" style="width: 90px;height: 25px;background-color:#d9d9d9;border-radius: 2px;text-align: center;padding-top: 3px">
                            <p style="font-size:13px"> {{$offers->career_level}}</p>
                        </div>
                        <div class="col-md-6" style="width: 90px;height: 25px;background-color:#d9d9d9;border-radius: 2px;margin-left:5px;text-align: center;padding-top: 3px">
                            <p style="font-size:13px"> {{$offers->type}}</p>
                        </div>
                        <div style="margin-left:-15px;padding-top: 15px">
                            <p style="font-size:20px"><span style="font-size:25px;padding-right: 10px">0</span>Applications</p>
                        </div>
                        <div style="margin-left:-15px">
                            <p>Posted {{$offers->created_at->diffForHumans() }}</p>
                        </div>

                    </div>
{{--                    <p><br>{{\Illuminate\Support\Str::limit($offers->job_desc,250 )}}</p>--}}
                </div>
                <div class="card-body col-md-1" style="">
                    @php
                        $data = \App\Models\User::find(auth()->user()->id)->employer_general;
                       foreach ($data as $emp){
                           $image = $emp->image_url;
                       }
                    @endphp
                    <img src={{asset('uploads/employer_images/'.$image)}} width="55px" height="40px" style="margin-left: -20px">
                </div>
            </div>
        </div>
        <div class="card shadow-sm p-3 mb-5 bg-white rounded " style="width: 100%;margin-top: -23px">
            <div class="row" style="margin-left:15px">
                <div class="card-title col-md-11">
                    <h3 >Job Details</h3>
                    <div style="padding-top: 10px">
                        <p style="font-size:20px">Experience Nedded : {{$offers->experience_years}} years</p>
                        <p style="font-size:20px">Career Level : {{$offers->career_level}}</p>
                        <p style="font-size:20px">Salary : {{$offers->salary_range}}</p>
                        <p style="font-size:20px">Job Category : {{$category->category_name}}</p>

                        <div class="card" style="background-color: #f5f4f4;width: 90%;margin-top:20px;height:150px">
                            <div style="margin: 15px 0 10px 15px">
                                <h4>Skills And Tools:</h4>
                                <div class="row" style="padding-left: 13px;padding-top: 15px">
                                    <input class="form-control" required name="company_name" type="text" value="{{$offers->skill1}}" style="width: 110px;font-size:20px" >
                                    <input class="form-control" required name="company_name" type="text" value="{{$offers->skill2}}" style="width: 110px;margin-left: 10px;font-size:19px">
                                    <input class="form-control" required name="company_name" type="text" value="{{$offers->skill3}}" style="width: 110px;margin-left: 10px;font-size:19px">
                                    <input class="form-control" required name="company_name" type="text" value="{{$offers->skill4}}" style="width: 110px;margin-left: 10px;font-size:19px">
                                    <input class="form-control" required name="company_name" type="text" value="{{$offers->skill5}}" style="width: 110px;margin-left: 10px;font-size:19px">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
        <div class="card shadow-sm p-3 mb-5 bg-white rounded " style="width: 100%;margin-top: -23px;">
            <div style="margin-left:15px">
                <h3 >Job Description</h3>
                <div style="padding-top: 10px;width:80%">
                    <p style="font-size: 19px">{{$offers->job_desc}}</p>
                </div>
            </div>

        </div>


    </div>
@endsection
