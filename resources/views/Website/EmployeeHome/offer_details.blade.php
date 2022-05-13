@extends('Layouts._EmployeeHomeLayoute')

@section('content')
    <div class="row" style="margin-top: 25px">
        <div class="col-md-9">
            <div class="container" style="width: 90%">
                <div class="card shadow-sm p-3 mb-5 bg-white rounded " style="width: 100%;">
                    <div class="row" style="margin-left:15px">
                        <div class="card-title col-md-11">
                            <h4>{{$offer->job_title}}</h4>
                            <div class="row" style="margin-left:0;padding-top: 10px">
                                <div class="col-md-6" style="width: 90px;height: 25px;background-color:#d9d9d9;border-radius: 2px;text-align: center;padding-top: 3px">
                                    <p style="font-size:13px"> {{$offer->career_level}}</p>
                                </div>
                                <div class="col-md-6" style="width: 90px;height: 25px;background-color:#d9d9d9;border-radius: 2px;margin-left:5px;text-align: center;padding-top: 3px">
                                    <p style="font-size:13px"> {{$offer->type}}</p>
                                </div>
                                <div class="row" style="margin-top: 30px">
                                        <div style="padding: 10px;border: 2px solid rgba(232,232,245,0.54);background-color:rgb(233,233,234)" class="col-md-3">
                                            <p style="font-size:15px"><span style="font-size:20px;padding-right: 10px">0</span>Applications</p>
                                        </div>
                                    <div style="margin-left:5px;padding: 10px;border: 2px solid rgba(232,232,245,0.54);background-color:rgb(233,233,234)" class="col-md-4">
                                        <p style="font-size:15px;"><span style="font-size:20px;padding-right: 10px">0</span>Open Positions</p>
                                    </div>

                                    <div style="margin-left:5px;padding:10px;border: 2px solid rgba(232,232,245,0.54);width: 22%;background-color:rgb(233,233,234)" class="col-md-1">
                                        <p style="font-size:15px"><span style="font-size:20px;padding-right: 10px">0</span>Selected</p>
                                    </div>

                                </div>

                                <div style="margin-top: 30px;border:2px solid rgba(232,232,245,0.54);background-color:rgb(233,233,234);width: 30%;padding-top: 12px">
                                    <p>Posted {{$offer->created_at->diffForHumans() }}</p>
                                </div>

                            </div>
                            {{--                    <p><br>{{\Illuminate\Support\Str::limit($offers->job_desc,250 )}}</p>--}}
                        </div>
                        <div class="card-body col-md-1" style="">
                            @php
                                $user = \App\Models\EmployerGeneral::where('user_id',$offer->user_id)->first();
                                $image = $user->image_url;
                            @endphp
                            <img src={{asset('uploads/employer_images/'.$image)}} width="55px" height="60px" style="margin-left: -20px">
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm p-3 mb-5 bg-white rounded " style="width: 100%;margin-top: -23px">
                    <div class="row" style="margin-left:15px">
                        <div class="card-title col-md-11">
                            <h3 >Job Details</h3>
                            <div style="padding-top: 10px">
                                <p style="font-size:20px">Experience Nedded : {{$offer->experience_years}} years</p>
                                <p style="font-size:20px">Career Level : {{$offer->career_level}}</p>
                                <p style="font-size:20px">Salary : {{$offer->salary_range}}</p>
                                <p style="font-size:20px">Job Category : {{$category->category_name}} </p>

                                <div class="card" style="background-color: #f5f4f4;width: 90%;margin-top:20px;">
                                    <div style="margin: 15px 0 10px 15px">
                                        <h4>Skills And Tools:</h4>
                                        <div class="row" style="padding-left: 13px;padding-top: 15px">
                                            <input class="form-control" required name="company_name" type="text" value="{{$offer->skill1}}" style="width: 110px;font-size:20px" >
                                            <input class="form-control" required name="company_name" type="text" value="{{$offer->skill2}}" style="width: 110px;margin-left: 10px;font-size:19px">
                                            <input class="form-control" required name="company_name" type="text" value="{{$offer->skill3}}" style="width: 110px;margin-left: 10px;font-size:19px">
                                            <input class="form-control" required name="company_name" type="text" value="{{$offer->skill4}}" style="width: 110px;margin-left: 10px;font-size:19px">
                                            <input class="form-control" required name="company_name" type="text" value="{{$offer->skill5}}" style="width: 110px;font-size:19px;margin-left: 10px">
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
                            <p style="font-size: 19px">{{$offer->job_desc}}</p>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 40%;margin: -30px 0  ">
                    <a href="{{route('application.questions',['offer_id'=>$offer->id,'employer_id'=>$offer->user_id])}}" class="btn btn-primary btn-lg">Apply For This Job</a>
                </div>

            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width:110%;height:400px;margin-left:-15%">
                <div class="row" style="margin-left: 15px;margin-top: 20px">
                    <div class="col-md-3">
                        <img class="rounded-circle" src="{{asset('uploads/employer_images/'.$employer->image_url)}}" width="45px" height="45px" >
                    </div>
                    <div class="col-md-8">
                        <p style="padding-top:8px;font-size:20px;font-weight:500;margin-left:-20px">{{$employer->company_name}}</p>
                    </div>

                </div>
                <div style="margin-top:50px">
                    <div class="inner" style="margin-top: -40px">
                        <div>
                            <input disabled class="form-control" name="email" value="{{$employer->user->email}}" id="job_title" type="email" placeholder="email" style="width:90%;height:50px" >
                        </div>
                    </div>
                    <div class="inner" style="margin-top: -40px">
                        <div>
                            <input disabled class="form-control" name="location" value="{{$employer->company_location}}" id="job_title" type="text" placeholder="location" style="width:90%;height:50px" required>
                        </div>
                    </div>
                    <div class="inner" style="margin-top: -40px">
                        <div>
                            <input disabled class="form-control" name="phone1" value="{{$employer->phone1}}" id="job_title" type="text" placeholder="phone1" style="width:90%;height:50px" required>
                        </div>
                    </div>
                    <div class="inner" style="margin-top: -40px;">
                        <div>
                            <input disabled class="form-control" name="phone2" value="{{$employer->phone2}}" id="job_title" type="text" placeholder="phone2" style="width:90%;height:50px" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 110%;margin: 20px 0 50px -47px">
                <a href="{{route('application.questions',['offer_id'=>$offer->id,'employer_id'=>$offer->user_id])}}" class="btn btn-primary btn-lg">Apply For This Job</a>
            </div>
            <div class="" style="width: 110%;margin: 20px 0 50px -47px">
                @php
                  $employer = \App\Models\EmployerGeneral::where('user_id',$offer->user_id)->first();
                  $employer_id = $employer->id;
                @endphp
                <form method="post" action="{{route('review',$employer_id)}}">
                    @csrf
                    <textarea rows="5" name="review" style="width: 100%;padding:10px;font-size:18px;border:2px solid #c0bfbf" placeholder="write review about this company" required></textarea>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
            </div>
            <div class="card" style="width: 110%;margin: 20px 0 50px -47px">
                <div style="margin: 15px">
                    <h6 style="margin-bottom:20px">Employees Reviews ({{$reviews->count()}})</h6>
                    @forelse($reviews as $review)
                        @php
                          $user = \App\Models\User::where('id',$review->user_id)->first();
                          $general = \App\Models\EmployeeGeneral::where('employee_id',$user->id)->first();
                        @endphp
                        <div class="card" style="margin-bottom:15px">
                            <div class="row" style="margin-left: 1px;margin-top: 5px">
                                <div class="col-md-1">
                                    <img class="rounded-circle" src="{{asset('uploads/employee_images/'.$general->image_url)}}" width="30px" height="30px" style="background-color:black;margin-top: 2px">
                                </div>
                                <div class="col-md-8">
                                    <p style="margin-left: 15px;margin-top:5px">{{$user->name}}</p>
                                </div>
                            </div>
                            <div style="margin-left:15px;margin-top: 5px">
                                <p>{{$review->review}}</p>
                                <p style="font-size:11px;margin-top: 10px;margin-bottom:10px">added {{$review->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    @empty
                        <p>no reviews found!</p>
                    @endforelse
                </div>
            </div>
        </div>

    </div>


@endsection
