@extends('Layouts.Complete_Reg_Layoute')

@section('content')
    <div class="complete d-flex justify-content-center " style="margin-top:40px">
        <div class="col-md-4">
            <div>
                <div class="circlee bg-primary">
                    <p class="text-center pt-2 text-light">1</p>
                </div>
                <p class="pt-1">career</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="circlee" style="background-color:#e3e2e2">
                <p class="text-center pt-2">2</p>
            </div>
            <p class="pt-1">general</p>
        </div>
    </div>
    <div class="step">
        <p style="text-align:center">Step 1/2 <br><span style="font-size:20px;font-weight:500">Career Interest</span></p>
    </div>
    <form method="POST" action="{{route('save_career_info')}}">
        @csrf
        @if($errors->any)
            <div class="custom">
                <div class="card card-css">
            @foreach($errors->all() as $error)
                        <div class="inner">
                            <ul>
                                <li style="color: red">{{$error}}</li>
                            </ul>
                        </div>
            @endforeach
                </div>
            </div>
        @endif
        {{--Career level--}}
        <div class="custom">
            <div class="card card-css">
                <div class="inner">
                    <h4 style="padding-left:25px;">What's your current Level?</h4>
                    <div class="wrapper">
                        <input type="radio" name="level" id="option-1" value="student" required>
                        <input type="radio" name="level" id="option-2" value="junior" required>
                        <input type="radio" name="level" id="option-3" value="senior" required>
                        <label for="option-1" class="option option-1">
                            <div class="dot"></div>
                            <span style="padding:0 15px 0 15px">Student</span>
                        </label>
                        <label for="option-2" class="option option-2">
                            <div class="dot"></div>
                            <span style="padding:0 15px 0 15px">Junior</span>
                        </label>
                        <label for="option-3" class="option option-3">
                            <div class="dot"></div>
                            <span style="padding:0 15px 0 15px">Senior</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        {{--Job Title--}}
        <div class="custom">
            <div class="card card-css">
                <div class="inner">
                    <h4 style="padding-left:25px;">What's your Job Title?</h4>
                    <div style="padding:15px 0 20px 25px">
                        <input class="form-control" name="job_title" value="{{old('job_title')}}" id="job_title" type="text" placeholder="enter your job title" style="width:65%;height:50px" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom">
            <div class="card card-css">
                <div class="inner ">
                    <h4 style="padding-left:25px;"> Select your Job Category and Job Type !</h4>
                    <div class="row" style="padding:20px 0 15px 15px">
                        <div style="padding:15px 0 20px 25px; width:40%;" class="col-md-4">
                            <select class="form-select" name="job_category" id="category_list"  aria-label="Default select example" style=" color: grey;border-color: darkgray" required>
                                <option selected disabled>select category</option>
                                @foreach($categories as $category)
                                    <option  value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div style="padding:15px 0 20px 25px; width:40%" class="col-md-4">
                            <select class="form-select" name="job_cat" id="sub_cat" aria-label="Default select example" style=" color: grey;border-color: darkgray" required>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{--Skills--}}
        <div class="custom">
            <div class="card card-css">
                <div class="inner">
                    <h4 style="padding-left:25px;">Enter your skills ! <span style="font-size:12px;color:red;">* at least 5</span></h4>
                    <div style="padding:30px 0 20px 25px" class="row">

                        <div class="col-md-3">
                            <input class="form-control" value="{{old('skill1')}}" name="skill1"  required  type="text" placeholder="skill 1 *" style="width:65%;height:50px">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" value="{{old('skill2')}}" name="skill2"  required type="text" placeholder="skill 2 *" style="width:65%;height:50px">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" value="{{old('skill3')}}" name="skill3"  required type="text" placeholder="skill 3 *" style="width:65%;height:50px">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" value="{{old('skill4')}}" name="skill4"  required type="text" placeholder="skill 4 *" style="width:65%;height:50px">
                        </div>
                    </div>
                    <div style="padding:10px 0 20px 25px" class="row">
                        <div class="col-md-3">
                            <input class="form-control" value="{{old('skill5')}}" name="skill5"  required type="text" placeholder="skill 5 *" style="width:65%;height:50px">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" value="{{old('skill6')}}" name="skill6"  type="text" placeholder="skill 6" style="width:65%;height:50px">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" value="{{old('skill7')}}"  name="skill7"  type="text" placeholder="skill 7" style="width:65%;height:50px">
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" value="{{old('skill8')}}" name="skill8"  type="text" placeholder="skill 8" style="width:65%;height:50px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--Expected salary--}}
        <div class="custom">
            <div class="card card-css">
                <div class="inner">
                    <h4 style="padding-left:25px;">What's your expected salary?</h4>
                    <div style="padding:15px 0 20px 25px">
                        <label for="salary">starts from</label>
                        <input id="salary" value="{{old('salary')}}" class="form-control" name="salary" type="text" placeholder="your expected salary in dollars" style="width:65%;height:50px">
                    </div>
                </div>
            </div>
        </div>
        {{--Education--}}
        <div class="custom">
            <div class="card card-css">
                <div class="inner">
                    <h4 style="padding-left:25px;">What's your Education? <span style="font-size:12px;color:red;">* at least 1</span></h4>
                   <div style="padding:20px 0 20px 25px;">
                       <div style="width:75%"  class="card">
                           <div style="width:80%;padding:25px 0 0 25px ">
                               <div class="form-group" >
                                   <label for="usr">University/Institution</label>
                                   <input type="text" value="{{old('university1')}}" name="university1" class="form-control" id="usr" required>
                               </div>
                               <div class="form-group">
                                   <label for="usr">Field of study</label>
                                   <input type="text" value="{{old('field1')}}" name="field1" class="form-control" id="usr" required>
                               </div>
                               <div class="row pb-2">
                                   <div class="form-group col-md-6" >
                                       <label for="usr">*starts year</label>
                                       <select class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="startyear1">
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

                                       </select>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="usr">*end year</label>
                                       <select class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="endyear1">
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
                               </div>
                           </div>
                       </div><br>
                       <div style="width:75%"  class="card">
                           <div style="width:80%;padding:25px 0 0 25px ">
                               <div class="form-group" >
                                   <label for="usr">University/Institution</label>
                                   <input type="text" value="{{old('university2')}}" name="university2" class="form-control" id="usr">
                               </div>
                               <div class="form-group">
                                   <label for="usr">Field of study</label>
                                   <input type="text" value="{{old('field2')}}" name="field2" class="form-control" id="usr">
                               </div>
                               <div class="row pb-2">
                                   <div class="form-group col-md-6" >
                                       <label for="usr">*starts year</label>
                                       <select class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="startyear2">
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

                                       </select>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="usr">*end year</label>
                                       <select class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="endyear2">
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
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        {{--Work Experience--}}
        <div class="custom">
            <div class="card card-css">
                <div class="inner">
                    <h4 style="padding-left:25px;">What's your work Experience? <span style="font-size:12px;color:red;">* at least 1</span></h4>
                    <div style="padding:20px 0 20px 25px;">
                        <div style="width:75%"  class="card">
                            <div style="width:80%;padding:25px 0 0 25px ">
                                <div class="form-group" >
                                    <label for="usr">Company Name</label>
                                    <input type="text" value="{{old('company1')}}" class="form-control" id="usr" name="company1">
                                </div>
                                <div class="form-group">
                                    <label for="usr">Job Position</label>
                                    <input type="text" value="{{old('position1')}}" name="position1" class="form-control" id="usr">
                                </div>
                                <div class="row pb-2">
                                    <div class="form-group col-md-4" >
                                        <label for="usr">*starts year</label>
                                        <select class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="startyear3">
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

                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="usr">*end year</label>
                                        <select class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="endyear3">
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
                                    <div class="form-group col-md-4">
                                        <label for="usr">Location</label>
                                        <select class="form-select" required name="location1" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
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
                                </div>
                            </div>
                        </div><br>
                        <div style="width:75%"  class="card">
                            <div style="width:80%;padding:25px 0 0 25px ">
                                <div class="form-group" >
                                    <label for="usr">Company Name</label>
                                    <input type="text" value="{{old('company2')}}" name="company2" class="form-control" id="usr">
                                </div>
                                <div class="form-group">
                                    <label for="usr">Job Position</label>
                                    <input type="text" value="{{old('position2')}}" name="position2" class="form-control" id="usr">
                                </div>
                                <div class="row pb-2">
                                    <div class="form-group col-md-4" >
                                        <label for="usr">*starts year</label>
                                        <select class="form-select"  aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="startyear4">
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

                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="usr">*end year</label>
                                        <select class="form-select"  aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="endyear4">
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
                                    <div class="form-group col-md-4">
                                        <label for="usr">Location</label>
                                        <select class="form-select" name="location2" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <div class="custom">
            <div class="card card-css">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </div>
    </form>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#category_list").on('change',function(){
                let id = $(this).val();
                $('#sub_cat').empty();
                $.ajax({
                    method:'Get',
                    url:'/jobcat/'+id,
                    success: function(response) {
                        $.each(response.data,function(key,val){
                            $('#sub_cat').append("<option value='"+val.id+"'>"+val.job_name+"</option>");
                        });

                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endsection
