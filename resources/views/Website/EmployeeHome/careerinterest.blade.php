@extends('Website.EmployeeHome.profile')

@section('profile_info')
    <form method="POST" action="{{route('employee.career.update',$career->user_id)}}">
        @csrf
        @if($errors->any)
           @foreach($errors->all() as $error)
                 <div class="inner">
                     <ul>
                           <li style="color: red">{{$error}}</li>
                     </ul>
                 </div>
          @endforeach
        @endif
        <div class="card" style="width: 75%;">
            <div class="wrapper" style="width: 90%;margin-top: 30px">
                <input type="radio" name="career_level" id="option-1" value="student" required {{$career->career_level=='student'?'checked':''}}>
                <input type="radio" name="career_level" id="option-2" value="junior" required {{$career->career_level=='junior'?'checked':''}}>
                <input type="radio" name="career_level" id="option-3" value="senior" required {{$career->career_level=='senior'?'checked':''}}>
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
            <div style="width: 90%;margin-top:10px;margin-left: 25px;margin-bottom: 40px;">
                <div>
                    <div class="row" style="padding-left: 13px;padding-top: 15px">
                        <input class="form-control" required name="skill1" type="text" value="{{$career->skill1}}" style="width: 105px;font-size:16px" >
                        <input class="form-control" required name="skill2" type="text" value="{{$career->skill2}}" style="width: 105px;margin-left: 10px;font-size:16px">
                        <input class="form-control" required name="skill3" type="text" value="{{$career->skill3}}" style="width: 105px;margin-left: 10px;font-size:16px">
                        <input class="form-control" required name="skill4" type="text" value="{{$career->skill4}}" style="width: 105px;margin-left: 10px;font-size:16px">
                    </div>
                    <div class="row" style="padding-left: 13px;padding-top: 15px">
                        <input class="form-control" required name="skill5" type="text" value="{{$career->skill5}}" style="width: 105px;font-size:16px" >
                        <input class="form-control" required name="skill6" type="text" value="{{$career->skill6}}" style="width: 105px;margin-left: 10px;font-size:16px">
                        <input class="form-control" required name="skill7" type="text" value="{{$career->skill7}}" style="width: 105px;margin-left: 10px;font-size:16px">
                        <input class="form-control" required name="skill8" type="text" value="{{$career->skill8}}" style="width: 105px;margin-left: 10px;font-size:16px">
                    </div>
                </div>
            </div>
            <div class="inner" style="margin-top: -40px">
                <div>
                    <input  class="form-control" name="job_title" value="{{$career->job_title}}" id="job_title" type="text" placeholder="job title" style="width:90%;height:50px" required>
                </div>
            </div>
            <div class="inner" style="margin-top: -20px;margin-left: 12px">
                <div class="row">
                    <input disabled class="form-control" name="category_name" value="{{$career->category->category_name}}" id="job_title" type="text" placeholder="job title" style="width:40%;height:50px" required>
                    <input  disabled class="form-control" name="job_name" value="{{$career->job->job_name}}" id="job_title" type="text" placeholder="job title" style="width:40%;height:50px;margin-left:25px" required>
                </div>
            </div>
            <div class="row" style="padding:1px 0 23px 20px">
                <div style="padding:15px 0 20px 25px; width:40%;" class="col-md-4">
                    <select class="form-select" name="category_id" id="category_list"  aria-label="Default select example" style=" color: grey;border-color: darkgray" required>
                        @foreach($categories as $category)
                            <option  value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div style="padding:15px 0 20px 25px; width:40%" class="col-md-4">
                    <select class="form-select" name="job_id" id="sub_cat" aria-label="Default select example" style=" color: grey;border-color: darkgray" required>
                    </select>
                </div>
            </div>
            <div class="inner" style="margin-top: -40px;margin-bottom:20px">
                <div>
                    <input  class="form-control" name="expected_salary" value="{{$career->expected_salary}}" id="job_title" type="text" placeholder="accepted salary" style="width:90%;height:50px" required>
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
