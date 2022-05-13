@extends('Website.EmployeeHome.profile')

@section('profile_info')
    <form method="POST" action="{{route('employee.education.update',$edu->employee_id)}}">
        @csrf
        <div class="card card-css" style="width:75%">
            <div class="inner" style="width:120%">
                <div style="padding:20px 0 20px 25px;">
                        <div style="width:75%"  class="card">
                            <div style="width:80%;padding:25px 0 0 25px ">
                                <div class="form-group" >
                                    <input type="text" value="{{$edu->university}}" name="university" placeholder="University/Institution" class="form-control" id="usr" required>
                                </div>
                                <div class="form-group" style="margin-top:25px">
                                    <input type="text" value="{{$edu->study_field}}" name="study_field" placeholder="Field of study"  class="form-control" id="usr" required>
                                </div>
                                <div class="inner" style="margin-left: -17px">
                                    <div class="row">
                                        <input disabled class="form-control" name="category_name" value="{{$edu->starts_year}}" id="job_title" type="text" placeholder="job title" style="width:40%;height:40px" required>
                                        <input  disabled class="form-control" name="job_name" value="{{$edu->end_year}}" id="job_title" type="text" placeholder="job title" style="width:40%;height:40px;margin-left:25px" required>
                                    </div>
                                </div>

                                <div class="row pb-2" style="margin-bottom:20px">
                                    <div class="form-group col-md-6" >
                                        <select class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="starts_year">
                                            <option disabled>{{$edu->starts_year}}</option>
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

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="end_year">
                                            <option disabled>{{$edu->end_year}}</option>
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
                                </div>
                            </div>
                        </div><br>
                </div>
            </div>
        </div>
        <div class="card" style="width:75%;margin-top:10px">
            <div>
                <button type="submit" class="btn btn-primary"  style="width:100%;padding-top:10px"> Update </button>
            </div>
        </div>
    </form>
@endsection
