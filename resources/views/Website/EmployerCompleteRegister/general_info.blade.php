@extends('Layouts.Complete_Reg_Layoute')

@section('content')

    <div class="step" style="margin-top: 50px">
        <p style="text-align:center">Step 1/1 <br><span style="font-size:20px;font-weight:500">general info</span></p>
    </div>
    <form method="POST" action="{{route('employer.save')}}" enctype="multipart/form-data">
        @csrf
        <div class="custom">
            <div class="card card-css" style="margin-bottom: 100px">
                <div class="inner">
                    @if($errors->any)
                        @foreach($errors->all() as $error)
                            <div style="padding-top: 15px">
                                <p style="color:red">{{$error}}</p>
                            </div>
                        @endforeach
                    @endif
                    <div style="padding-top: 15px">
                        <h6 style="padding-left:25px;color:grey">Enter Company Name</h6>
                        <div style="padding:15px 0 20px 25px">
                            <input class="form-control" required name="company_name" type="text" placeholder="enter company name" style="width:65%;height:50px">
                        </div>
                    </div>
                        <div class="form-group col-md-4" style="margin-left: 10px">
                            <h6 style="color:grey;padding-bottom: 10px">Company Location</h6>
                            <select class="form-select" required name="company_location" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                                <option value="1"></option>
                                <option value="Cairo">Cairo</option>
                                <option value="Giza">Giza</option>
                                <option value="NaserCity">Naser City</option>
                                <option value="Alex">Alex</option>
                                <option value="Mansoura">Mansoura</option>
                                <option value="Maadi">Maadi</option>
                                <option value="Asyut">Asyut</option>
                                <option value="Doki">Doki</option>
                                <option value="Zahraa">Zahraa</option>
                            </select>
                        </div>
                        <div style="padding-top: 15px">
                            <h6 style="padding-left:25px;color:grey">Enter Company Phone</h6>
                            <div style="padding:15px 0 20px 25px">
                                <input class="form-control" required name="phone1" type="text" placeholder="company phone" style="width:65%;height:50px">
                            </div>
                        </div>
                    <div style="padding-top: 15px">
                        <h6 style="padding-left:25px;color:grey">Enter Company additional phone</h6>
                        <div style="padding:15px 0 20px 25px">
                            <input class="form-control" required name="phone2" type="text" placeholder="company additional phone" style="width:65%;height:50px">
                        </div>
                    </div>
                        <div class="form-group col-md-4" style="margin-left: 10px">
                            <h6 style="color:grey;padding-bottom: 10px">Company Starting Date</h6>
                            <select class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="company_starting">
                                <option disabled></option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                            </select>
                        </div>
                    <div style="padding-top: 15px">
                        <h6 style="padding-left:25px;color:grey">Company Image</h6>
                        <div style="padding:15px 0 20px 25px; width:50%">
                            <input type="file" name="image">
                        </div>
                    </div>
                    <div style="text-align:center">
                        <button type="submit" class="btn btn-primary btn-lg">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

{{--<div class="row" style="padding-left:35px">--}}
{{--    <div class="col-md-2">--}}
{{--        <img class="rounded-circle" style="background-size: cover" height="100px" width="100px" alt="100x100" src="{{url('Home/images/def.png')}}" data-holder-rendered="true">--}}
{{--    </div>--}}
{{--    <div class="col-md-4">--}}
{{--        <div>--}}
{{--            <h4 style="padding-top: 10px">Profile Photo</h4>--}}
{{--            <div class="row" style="padding-top: 20px">--}}
{{--                <div class="col-md-6">--}}
{{--                    <button class="btn btn-primary">Upload Image</button>--}}
{{--                </div>--}}
{{--                <div class="col-md-6" style="padding:10px 0 0 50px">--}}
{{--                    <a href="#" style="font-size: 16px">delete</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
