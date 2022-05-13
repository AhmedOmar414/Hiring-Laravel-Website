@extends('Layouts._EmployeeHomeLayoute')

@section('content')
    <div style="margin-top:40px;margin-left:10%">
        @forelse($offers as $offer)
            <div class="card shadow-sm p-3 mb-4 bg-white rounded " style="width: 94%;">
                <div class="row" style="margin-left:15px">
                    <div class="card-title col-md-11">
                        <h4 style="color: #4a4ae3">{{$offer->job_title}}</h4>
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
                        $user = \App\Models\EmployerGeneral::where('user_id',$offer->employer_id)->first();
                        $image = $user->image_url;
                    @endphp
                    <div class="card-body col-md-1">

                        <img src="{{url('uploads/employer_images/'.$image)}}" width="50px">
                    </div>
                    <div style="margin-left:10px;" class="row">
                        <div class="col-md-1">
                            <a href="{{route('offer.details',$offer->id)}}" type="submit" class="btn btn-primary btn-sm" style="width: 75px;margin-left:-20px">details</a>
                        </div>
                        <a type="submit" href="{{route('offer.saved.delete',$offer->id)}}" class="btn btn-primary btn-sm btn-danger" style="width: 75px;margin-left:-10px;">delete</a>
                    </div>
                </div>
            </div>
        @empty
            <div style="text-align:center">
                <h3>No Saved Jobs Found .</h3>
            </div>
        @endforelse
    </div>
@endsection
