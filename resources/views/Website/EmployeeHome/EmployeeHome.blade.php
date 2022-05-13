@extends('Layouts._EmployeeHomeLayoute')

@section('content')
    <div style="margin-top:40px;">
        <div style="margin-left: 5%">
            @foreach($offers as $offer)

                <div class="card shadow-sm p-3 mb-4 bg-white rounded " style="width: 94%;">
                    <div class="row" style="margin-left:15px">
                        <div class="card-title col-md-11">
                            <p style="color: #4a4ae3;font-size: 21px;font-weight: 500">{{$offer->job_title}}</p>
                            <div class="row" style="margin-left:0">
                                <div class="col-md-6" style="width: 90px;height: 25px;background-color:#d9d9d9;border-radius: 2px;text-align: center;padding-top: 3px">
                                    <p style="font-size:13px"> {{$offer->career_level}}</p>
                                </div>
                                <div class="col-md-6" style="width: 90px;height: 25px;background-color:#d9d9d9;border-radius: 2px;margin-left:5px;text-align: center;padding-top: 3px">
                                    <p style="font-size:13px"> {{$offer->type}}</p>
                                </div>
                            </div>
                            <p style="padding-top: 20px;font-size:18px">{{$offer->job_desc}} </p>
                        </div>
                        @php
                            $user = \App\Models\EmployerGeneral::where('user_id',$offer->user_id)->first();
                            $image = $user->image_url;
                        @endphp
                        <div class="card-body col-md-1">
                            <img src="{{url('uploads/employer_images/'.$image)}}" width="50px">
                        </div>
                    </div>
                    <div style="margin-left:15px" class="row">
                        <div class="col-md-1">
                            <form method="post" action="{{url('Employee/save_job/'.$offer->id.'/'.$offer->user_id)}}">
                                @csrf
                                <button style="width: 45px" type="submit" class="btn btn-primary btn-sm btn-"><img src="{{url('Home/images/save.png')}}" width="23px"></button>
                            </form>
                        </div>
                        <a type="submit" href="{{route('offer.details',$offer->id)}}" class="btn btn-primary btn-sm" style="width: 75px;margin-left:-20px">details</a>
                    </div>
                </div>
            @endforeach
            <div style="display: flex;justify-content: center;align-items: center;font-size:20px;margin-bottom: 30px">
                {!! $offers->links() !!}
            </div>
        </div>
    </div>
@endsection
