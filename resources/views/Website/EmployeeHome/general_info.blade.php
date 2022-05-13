@extends('Website.EmployeeHome.profile')

@section('profile_info')
    <div >
        <form method="POST" action="{{route('employee.general.update',$employee->employee_id)}}" enctype="multipart/form-data" >
            @csrf
            <div class="row" >
                <div class="col-md-2" style="margin-bottom:15px">
                    <img class="rounded-circle" style="background-size: cover" height="100px" width="100px" src="{{url('uploads/employee_images/'.$employee->image_url)}}">
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
            <div class="card" style="width: 75%;height:600px">
                <h5 style="padding-left:30px;padding-top:20px">Your Personal Info</h5>
                <div class="inner" style="margin-top: -20px">
                    <div>
                        <label style="padding-bottom: 5px;color:#656565">Name</label>
                        <input class="form-control" name="name" value="{{$user->name}}" id="job_title" type="text" placeholder="Name" style="width:90%;height:50px" required>
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
                            <option value="male">{{$employee->gender}}</option>
                        </select>
                    </div>
                </div>
                <div class="inner" style="margin-top: -40px">
                    <div>
                        <label style="padding-bottom: 5px;color:#626262">Mobile Number 1</label>
                        <input  class="form-control" name="phone1" value="{{$employee->phone1}}" id="job_title" type="text" placeholder="Name" style="width:90%;height:50px" required>
                    </div>
                </div>
                <div class="inner" style="margin-top: -40px">
                    <div>
                        <label style="padding-bottom: 5px;color:#5d5d5d">Mobile Number 2</label>
                        <input  class="form-control" name="phone2" value="{{$employee->phone2}}" id="job_title" type="text" placeholder="Name" style="width:90%;height:50px" required>
                    </div>
                </div>
            </div>
            <div class="card" style="width:75%;margin-top:10px">
                <div>
                    <button type="submit" class="btn btn-primary"  style="width:100%;padding-top:10px"> Update </button>
                </div>
            </div>
        </form>
    </div>
@endsection
