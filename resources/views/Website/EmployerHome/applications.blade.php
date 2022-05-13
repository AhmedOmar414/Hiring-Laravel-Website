@extends('Layouts.employerHomeLayoute')

@section('content')
    <div class="row" style="margin-top: 30px">
        <div class="col-md-1">
            <a class="btn btn-{{url()->current() == route('employer.applications.pending')? 'primary':'secondary'}}" href="{{route('employer.applications.pending')}}">Pending </a>
        </div>
        <div class="col-md-1">
            <a class="btn btn-{{url()->current() == route('employer.applications.accepted')? 'primary':'secondary'}}" href="{{route('employer.applications.accepted')}}">Accepted </a>
        </div>
        <div class="col-md-1">
            <a class="btn btn-{{url()->current() == route('employer.applications.rejected')? 'primary':'secondary'}}" href="{{route('employer.applications.rejected')}}">Rejected </a>
        </div>

    </div>
    @forelse($applications as $application)
        <div class="card shadow-sm p-3 mb-4 bg-white rounded " style="width: 94%;margin-top: 40px">
            <div class="row">
                @php
                    $employee = \App\Models\EmployeeGeneral::where('employee_id',$application->user_id)->first();
                    $user = \App\Models\User::where('id',$application->user_id)->first();
                    $image = $employee->image_url;
                @endphp
                <div class="col-md-1">
                    <img width="60px" src="{{asset('uploads/employee_images/'.$image)}}">
                </div>
                <div class="col-md-5">
                    <h5> Name: {{$user->name}}</h5>
                    <h6> Position: {{$application->offer->job_title}}</h6>
                    <div class="row" >
                        <div class="card-title col-md-11">
                            <p style="color: #4a4ae3;font-size: 21px;font-weight: 500"></p>
                            <div class="row" style="margin-left:0">
                                <div class="col-md-6" style="width: 90px;height: 25px;background-color:#d9d9d9;border-radius: 2px;text-align: center;padding-top: 3px">
                                    <p style="font-size:13px"> {{$application->offer->career_level}}</p>
                                </div>
                                <div class="col-md-6" style="width: 90px;height: 25px;background-color:#d9d9d9;border-radius: 2px;margin-left:5px;text-align: center;padding-top: 3px">
                                    <p style="font-size:13px">{{$application->offer->type}} </p>
                                </div>
                            </div>
                            <p style="padding-top: 20px;font-size:18px"></p>
                        </div>
                        <div class="card-body col-md-1">
                            <img src="" width="50px">
                        </div>
                    </div>
                    <p style="margin-top: -30px;color: grey">applied {{$application->created_at->diffForHumans() }}</p>
                    <a style="margin-left: -100px" href="{{route('offer_details',$application->offer->id)}}" style="width: 20%" class="btn btn-danger ">Offer Details</a>
                    <a href="{{route('conditate.profile',$application->user_id)}}" style="width: 40%" class="btn btn-success ">Show Candidate Profile</a>

                </div>
                <div class="col-md-2" >
                    <img @if(url()->current() == route('employer.applications.pending')) src="{{url('Home/images/question.png')}}"
                         @elseif(url()->current() == route('employer.applications.accepted') )
                           src="{{url('Home/images/happy.png')}}"
                         @else
                           src="{{url('Home/images/fired.png')}}"
                         @endif
                         width="150px" style="margin-left:-100px;margin-top: 40px">
                </div>
                <div class="col-md-3">
                    <h5>Application Status</h5>
                    <div style="width: 100%;height:50px;background-color:#e8e8e8;margin-top: 15px">
                        <h5 style="text-align: center;padding-top:10px">{{$application->status}}</h5>
                    </div>
                    <h6 style="margin-top:20px">Accept to start the hiring process</h6>
                    <div style="padding-top:20px">
                        <a  data-toggle="modal" data-target="#exampleModal"  @if($application->status == 'Pending') style="width: 40%;" @else style="width: 40%;pointer-events: none;" @endif    class="btn btn-success ">Accept </a>
                        <a  @if($application->status == 'Pending') style="width: 40%;margin-left:20px" @else style="width: 40%;pointer-events: none;margin-left:20px" @endif  href="{{route('application.reject',$application->id)}}"  class="btn btn-danger ">Reject</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">You are about to accept that candidate :) </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6>You can Complete Hiring process by contact him on this mail</h6>
                        <div class="form-group">
                            <input type="text" class="form-control" style="font-size:22px" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a type="button" class="btn btn-primary" href="{{route('application.accept',$application->id)}}">Confirm</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
    @empty
        <div style="display:flex;flex-direction: column-reverse;justify-content: center;align-items: center">
            <h4 style="margin-top:20px">No Applications Found.</h4>
            <img src="{{url('Home/images/question.png')}}" width="150px" style="margin-top: 40px">

        </div>
    @endforelse
@endsection
