@extends('Layouts._EmployeeHomeLayoute')

@section('content')
    @forelse($applications as $application)

        <div class="card shadow-sm p-3 mb-4 bg-white rounded " style="width: 94%;margin-top: 40px">
            <div class="row">
                @php
                    $employer = \App\Models\EmployerGeneral::where('user_id',$application->employer_id)->first();
                    $image = $employer->image_url;
                @endphp
                <div class="col-md-1">
                    <img width="60px" src="{{asset('uploads/employer_images/'.$image)}}">
                </div>
                <div class="col-md-8">
                    <h5>{{$application->offer->job_title}}</h5>
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
                    <a href="{{route('offer.details',$application->offer->id)}}" style="width: 20%" class="btn btn-primary btn-sm">Details</a>
                </div>
                <div class="col-md-2">
                    <h5>Application Status</h5>
                    <div style="width: 100%;height:50px;background-color:#e8e8e8;margin-top: 15px">
                        <h5 style="text-align: center;padding-top:10px">{{$application->status}}</h5>
                    </div>
                </div>
            </div>
    </div>
    @empty
        <h4>No Applications Found.</h4>
    @endforelse
@endsection
