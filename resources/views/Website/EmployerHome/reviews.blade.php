@extends('Layouts.employerHomeLayoute')

@section('content')
    <div class="card" style="width: 80%;margin: 20px 0 50px -47px">
        <div style="margin: 25px">
            <h4 style="margin-bottom:20px">Employees Reviews ({{$reviews->count()}})</h4>
            @forelse($reviews as $review)
                @php
                    $user = \App\Models\User::where('id',$review->user_id)->first();
                    $general = \App\Models\EmployeeGeneral::where('employee_id',$user->id)->first();
                @endphp
                <div class="card" style="margin-bottom:15px">
                   <div style="margin: 20px">
                       <div class="row" style="margin-left: 1px;margin-top: 5px">
                           <div class="col-md-1">
                               <img class="rounded-circle" src="{{asset('uploads/employee_images/'.$general->image_url)}}" width="70px" height="65px" style="background-color:black;margin-top: 2px">
                           </div>
                           <div class="col-md-8">
                               <h3 style="margin-left: 15px;margin-top:20px">{{$user->name}}</h3>
                           </div>
                       </div>
                       <div style="margin-left:15px;margin-top: 20px">
                           <h4>{{$review->review}}</h4>
                           <h5 style="font-size:16px;margin-top: 20px;margin-bottom:20px">added {{$review->created_at->diffForHumans() }}</h5>
                       </div>
                   </div>
                </div>
            @empty
                <p>no reviews found!</p>
            @endforelse
        </div>
    </div>
@endsection
