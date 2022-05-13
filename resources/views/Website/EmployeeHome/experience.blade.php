@extends('Website.EmployeeHome.profile')

@section('profile_info')
    <div class="card card-css" style="width:80%">
        <div class="inner" style="width: 120%">
            <div style="padding:20px 0 20px 25px;">
                <div style="width:75%"  class="card">
                    <div style="width:80%;padding:25px 0 0 25px;margin-bottom: 25px ">
                        <div class="form-group" >
                            <input type="text" value="{{old('company1')}}" class="form-control" id="usr" placeholder="CompanyName" name="company1">
                        </div>
                        <div class="form-group" style="margin-top: 20px">
                          <input type="text" placeholder="job position" name="position1" class="form-control" id="usr">
                        </div>
                        <div class="row pb-2" style="margin-top: 20px">
                            <div class="form-group col-md-4" >
                                <select class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="startyear3">
                                    <option >starts year</option>
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
                            <div class="form-group col-md-4" >
                                <select class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="endyear3">
                                    <option >end year</option>
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
                            <div class="form-group col-md-4" >
                                <select class="form-select" required name="location1" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                                    <option value="1"> location</option>
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
                    <div style="width:80%;padding:25px 0 0 25px;margin-bottom: 25px ">
                        <div class="form-group" >
                            <input type="text" value="{{old('company1')}}" class="form-control" id="usr" placeholder="CompanyName" name="company1">
                        </div>
                        <div class="form-group" style="margin-top: 20px">
                            <input type="text" placeholder="job position" name="position1" class="form-control" id="usr">
                        </div>
                        <div class="row pb-2" style="margin-top: 20px">
                            <div class="form-group col-md-4" >
                                <select class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="startyear3">
                                    <option >starts year</option>
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
                            <div class="form-group col-md-4" >
                                <select class="form-select" required aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px" name="endyear3">
                                    <option >end year</option>
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
                            <div class="form-group col-md-4" >
                                <select class="form-select" required name="location1" aria-label="Default select example" style=" color: grey;border-color: darkgray;border-radius: 4px">
                                    <option value="1"> location</option>
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
@endsection
