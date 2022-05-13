@extends('Layouts._EmployeeHomeLayoute')

@section('content')
<div>
    <div class="row">
        <div class="col-md-4 " style="width: 25%;height:500px;margin-top: 20px">
            <div class="list-group" >
                <a href={{route('employee.general')}} type="button" class="list-group-item list-group-item-action {{url()->current() == route('employee.general')?'active':''}}" style="height: 70px;padding-left: 20px;padding-top: 20px">General Info</a>
                <a href={{route('employee.career_interest')}}  type="button" class="list-group-item list-group-item-action {{url()->current() == route('employee.career_interest')?'active':''}}" style="height: 70px;padding-left: 20px;padding-top: 20px" >Career Interest</a>
                <a href="{{route('employee.education')}}" type="button" class="list-group-item list-group-item-action {{url()->current() == route('employee.education')?'active':''}}" style="height: 70px;padding-left: 20px;padding-top: 20px">Education Info</a>
                <a href="{{route('employee.experience')}}" type="button" class="list-group-item list-group-item-action {{url()->current() == route('employee.experience')?'active':''}}" style="height: 70px;padding-left: 20px;padding-top: 20px">Experience Info</a>
                <a href="{{route('exit')}}" type="button" class="list-group-item list-group-item-action" style="height: 70px;padding-left: 20px;padding-top: 20px">Logout</a>
            </div>
        </div>
        <div class="col-md-8" style="margin-top: 20px;width: 65%">
            @if(url()->current() == route('employee.profile'))
                <h5 style="text-align:center;margin-top:60px">Click any list item to show/update your info.</h5>
            @else
                @yield('profile_info')
                @yield('scripts')
            @endif
        </div>

    </div>
</div>
@endsection
