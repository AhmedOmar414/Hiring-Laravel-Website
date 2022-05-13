@extends('Layouts._EmployeeHomeLayoute')

@section('content')
    <h4 style="text-align:center;padding-top: 20px">Complete Your Application</h4>
    <form method="POST" action="{{route('application.save',['offer_id'=>$offer_id,'employer_id'=>$employer_id])}}">
        @csrf
        <div style="display:flex;justify-content: center;align-items: center;">
            <div class="card" style="width:50%;margin-top:10px;background-color:#f6f6f6">
                <div class="inner">
                    <h6 style="padding-left:10px;font-weight: normal">Tell us about your self and why we should hire you?</h6>
                    <div style="padding:10px 0 20px 10px">
                        <textarea class="form-control" name="about" style="width:90%;background-color:#f5f5f5" rows="3" required></textarea>
                    </div>
                </div>
                <div class="inner" style="margin-top: -60px">
                    <h6 style="padding-left:10px;font-weight: normal">Why you choose our company?</h6>
                    <div style="padding:10px 0 20px 10px">
                        <textarea class="form-control" name="why_join" style="width:90%;background-color:#f5f5f5" rows="3" required></textarea>
                    </div>
                </div>
                <div class="inner" style="margin-top: -60px">
                    <h6 style="padding-left:10px;font-weight: normal">When you ready to start?</h6>
                    <div style="padding:10px 0 20px 10px">
                        <textarea class="form-control" name="start_date" style="width:90%;background-color:#f5f5f5" rows="3" required></textarea>
                    </div>
                </div>
                <div class="inner" style="margin-top: -60px">
                    <h6 style="padding-left:10px;font-weight: normal">Whats your expected salary?</h6>
                    <div style="padding:10px 0 20px 10px">
                        <input type=text" class="form-control" name="expected_salary" style="width:90%;background-color:#f5f5f5"  required>
                    </div>
                </div>
                <div style="display:flex;align-items: center;justify-content: center;margin-bottom: 20px">
                    <button type="submit" class="btn btn-primary" style="width: 50%;">Apply</button>
                </div>
            </div>
        </div>
    </form>
@endsection
