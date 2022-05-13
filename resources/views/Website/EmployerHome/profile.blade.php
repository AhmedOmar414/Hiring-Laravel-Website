@extends('Layouts.employerHomeLayoute')

@section('content')

    <div class="container" style="margin-left:20%;margin-top:3%">
        <form method="POST" action="{{route('employer.profile.update')}}" enctype="multipart/form-data">
            @csrf
            <div style="width:75%">
                <div class="row" >
                    <div class="col-md-2" style="margin-bottom:15px">
                        <img class="rounded-circle" style="background-size: cover" height="100px" width="100px" src="{{url('uploads/employer_images/'.$profile->image_url)}}" name="image">
                    </div>
                    <div class="col-md-4" style="margin-left: -30px">
                        <div>
                            <h5 style="padding-top: 10px">Update Image</h5>
                            <div class="row" style="padding-top: 15px">
                                <div class="col-md-6">
                                    <input type="file" name="image">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 75%;margin-bottom: 10px">
                    <h5 style="padding-left:30px;padding-top:20px">Your Personal Info</h5>
                    <div class="inner" style="margin-top: -20px">
                        @if($errors->any)
                            @foreach($errors->all() as $error)
                                <div>
                                    <ul>
                                        <li>{{$error}}</li>
                                    </ul>
                                </div>
                            @endforeach
                        @endif
                        <div>
                            <label style="padding-bottom: 5px;color:#656565">company name</label>
                            <input class="form-control" name="company_name" value="{{$profile->company_name}}" type="text" style="width:75%;height:50px" required>
                        </div>
                    </div>
                    <div class="inner" style="margin-top: -40px">
                        <div>
                            <label style="padding-bottom: 5px;color:#595858">email</label>
                            <input disabled class="form-control" name="email" value="{{$user->email}}" id="job_title" type="text" placeholder="Name" style="width:75%;height:50px">
                        </div>
                    </div>
                    <div class="inner" style="margin-top: -40px">
                        <div>
                            <label style="padding-bottom: 5px;color:#595858">company location</label>
                            <input  class="form-control" name="company_location" value="{{$profile->company_location}}"  type="text" placeholder="Name" style="width:75%;height:50px" required>
                        </div>
                    </div>
                    <div class="inner" style="margin-top: -40px">
                        <div>
                            <label style="padding-bottom: 5px;color:#595858">company location</label>
                            <input  class="form-control" name="company_starting" value="{{$profile->company_starting}}"  type="text" placeholder="Name" style="width:75%;height:50px" required>
                        </div>
                    </div>
                    <div class="inner" style="margin-top: -40px">
                        <div>
                            <label style="padding-bottom: 5px;color:#626262">mobile1 </label>
                            <input  class="form-control" name="phone1" value="{{$profile->phone1}}" id="job_title" type="text" placeholder="Name" style="width:75%;height:50px" required>
                        </div>
                    </div>
                    <div class="inner" style="margin-top: -40px">
                        <div>
                            <label style="padding-bottom: 5px;color:#5d5d5d">mobile2</label>
                            <input  class="form-control" name="phone2" value="{{$profile->phone2}}" id="job_title" type="text" placeholder="Name" style="width:75%;height:50px" required>
                        </div>
                    </div>

                </div>
                <div class="card" style="width:75%">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>

    </div>
@endsection




