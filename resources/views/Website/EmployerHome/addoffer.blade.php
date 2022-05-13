@extends('Layouts.employerHomeLayoute')

@section('content')
    <div style="display:flex;justify-content: center;align-items: center;margin-left:200px" class="row">
        <form method="POST" action="{{route('offer.save')}}">
            @csrf
        <div class="card" style="width:75%;margin-top: 20px;padding: 0;display:flex">
            <div class="card-header" >
                <div style="margin-top: 30px;margin-left: 30px">
                    <h3 style="padding-bottom: 10px">Add Offer</h3>
                    <div style="padding-bottom: 20px">
                        <div class="input-group">
                            <input type="text"  required name="offer_name" class="form-control" placeholder="enter job offer title" style="height:50px">
                        </div>
                    </div>
                    <div style="padding-bottom: 20px">
                        <div class="input-group">
                            <select class="form-select" name="type" required style="height:50px;color:grey">
                                <option >Select Job Type</option>
                                <option value="FullTime">FullTime</option>
                                <option value="PartTime">PartTime</option>
                                <option value="Freelance">Freelance</option>
                            </select>
                        </div>
                    </div>
                    <div style="padding-bottom: 20px">
                        <div class="input-group">
                            <textarea  required class="form-control" name="offer_desc" rows="4" placeholder="enter job offer desc"></textarea>
                        </div>
                    </div >
                    <div style="padding-bottom: 20px">
                        <div class="input-group">
                            <select class="form-select" name="career_level" required style="height:50px;color:grey">
                                <option >Select career level</option>
                                <option value="Student">Student</option>
                                <option value="Junior">Junior</option>
                                <option value="Senior">Senior</option>
                            </select>
                        </div>
                    </div>
                    <div style="padding-bottom: 20px">
                        <select class="form-select" id="category_list2" name="category_name" required style="height:50px;color:grey">
                            <option >Select job category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div style="padding-bottom: 20px">
                        <select class="form-select" id="sub_cat2" name="jobs-type" required style="height:50px;color:grey">

                        </select>
                    </div>
                    <div style="padding-bottom: 20px">
                        <div class="input-group" >
                            <input type="number" required name="experience-years" class="form-control" placeholder="experience years" style="height:50px">
                        </div>
                    </div>
                    <div style="padding-bottom: 20px">
                        <div class="input-group row">
                            <div class="col-md-2">
                                <input type="text" name="skill1" class="form-control" placeholder="skill2" style="height:50px" required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="skill2" class="form-control" placeholder="skill3" style="height:50px" required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="skill3" class="form-control" placeholder="skill4" style="height:50px" required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="skill4" class="form-control" placeholder="skill5" style="height:50px" required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="skill5" class="form-control" placeholder="skill6" style="height:50px" required>
                            </div>
                        </div>
                        <div style="padding-bottom: 20px;margin-top: 30px">
                            <select class="form-select" required name="location" aria-label="Default select example" style="color:grey;height:50px">
                                <option value="1">Select Location</option>
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
                        <div style="padding-bottom: 20px">
                            <div class="input-group" >
                                <input type="text" required name="expected_salary" class="form-control" placeholder="salary range" style="height:50px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="width:75%;margin-top:10px;margin-bottom:50px;padding:0">
            <button type="submit" class="btn btn-primary" style="height: 50px;font-size:22px">
                Post
            </button>
        </div>
        </form>
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#category_list2").on('change',function(){
                let id = $(this).val();
                $('#sub_cat2').empty();
                $.ajax({
                    method:'Get',
                    url:'/jobcat/'+id,
                    success: function(response) {
                        $.each(response.data,function(key,val){
                            $('#sub_cat2').append("<option value='"+val.id+"'>"+val.job_name+"</option>");
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
