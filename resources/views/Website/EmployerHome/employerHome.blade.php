@extends('Layouts.employerHomeLayoute')

@section('content')

    <div class="container" style="width: 75%">
        @foreach($offers as $offer)
            <a href="{{route('offer.show',$offer->id)}}" style="text-decoration: none;color: black">
            <div class="card shadow-sm p-3 mb-5 bg-white rounded " style="width: 100%;height:270px;margin-top: 15px">
                <div class="row" style="margin-left:15px">
                    <div class="card-title col-md-11">
                        <h4 style="color: #4a4ae3">{{$offer->job_title}}</h4>
                        <div class="row" style="margin-left:0;padding-top: 10px">
                            <div class="col-md-6" style="width: 90px;height: 25px;background-color:#d9d9d9;border-radius: 2px;text-align: center;padding-top: 3px">
                                <p style="font-size:13px"> {{$offer->career_level}}</p>
                            </div>
                            <div class="col-md-6" style="width: 90px;height: 25px;background-color:#d9d9d9;border-radius: 2px;margin-left:5px;text-align: center;padding-top: 3px">
                                <p style="font-size:13px"> {{$offer->type}}</p>
                            </div>
                        </div>
                        <p><br>{{\Illuminate\Support\Str::limit($offer->job_desc,250 )}}</p>
                        <hr>
                        <p > Posted {{$offer->created_at->diffForHumans()}} </p>
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
            </a>
        @endforeach
    </div>

@endsection

{{--<form method="POST" action="{{route('save_general_info')}}" enctype="multipart/form-data">--}}
{{--    @csrf--}}
{{--    <div class="card" style="padding-top:40px;padding-left:50px">--}}
{{--        <div class="card-title">--}}
{{--            <h3>Add New Job Offer</h3>--}}
{{--        </div>--}}
{{--        <div class="input-group " style="width: 65%;height:65px;margin-bottom: 20px">--}}
{{--            <input style="font-size:19px" type="text" class="form-control" placeholder="job title" name="job_title" aria-label="Username" aria-describedby="basic-addon1">--}}
{{--        </div>--}}
{{--        <div class="input-group " style="width: 65%;height:65px;margin-bottom: 20px">--}}
{{--            <input style="font-size:19px" type="text" class="form-control" placeholder="job title" name="job_title" aria-label="Username" aria-describedby="basic-addon1">--}}
{{--        </div>--}}
{{--        <div class="input-group " style="width: 65%;height:65px;margin-bottom: 20px">--}}
{{--            <input style="font-size:19px" type="text" class="form-control" placeholder="job title" name="job_title" aria-label="Username" aria-describedby="basic-addon1">--}}
{{--        </div>--}}
{{--        <div class="input-group " style="width: 65%;height:65px;margin-bottom: 20px">--}}
{{--            <input style="font-size:19px" type="text" class="form-control" placeholder="job title" name="job_title" aria-label="Username" aria-describedby="basic-addon1">--}}
{{--        </div>--}}
{{--        <div class="input-group " style="width: 65%;height:65px;margin-bottom: 20px">--}}
{{--            <input style="font-size:19px" type="text" class="form-control" placeholder="job title" name="job_title" aria-label="Username" aria-describedby="basic-addon1">--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</form>--}}
