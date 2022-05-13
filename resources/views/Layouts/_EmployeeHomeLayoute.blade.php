<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <link rel="stylesheet" href="{{url('Home')}}/home.css">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body style="background-color:#faf9f9">
<div class="card shadow-sm p-2  bg-white rounded">
<header>
        <div class="container ">
            <nav class="navbar navbar-expand-lg navbar-light " >
                <div class="container-fluid">
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarExample01"
                        aria-controls="navbarExample01"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarExample01">
                        <img src={{url('Home/images/icon.png')}} width="40px">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 60px">
                            <li class="nav-item active">
                                <a class="nav-link {{url()->current() == route('employee.home')?'active':''}}" aria-current="page" href="{{route('employee.home')}}" style="font-size: 19px;font-weight: bold">HOME</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{url()->current() == route('applications.return')?'active':''}}" href="{{route('applications.return')}}" style="font-size: 19px;font-weight: bold;padding-left: 40px">APPLICATIONS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{url()->current() == route('saved_offers.return')?'active':''}}" href="{{route('saved_offers.return')}}" style="font-size: 19px;font-weight: bold;padding-left: 40px">SAVED</a>
                            </li>

                        </ul>
                        <a href={{route('employee.profile')}}><img src="{{url('uploads/employee_images/'.\App\Models\EmployeeGeneral::where('employee_id',auth()->user()->id)->first()->image_url)}}" width="40px" height="40px" class="rounded-circle"></a>
                    </div>
                </div>
            </nav>
        </div>
</header>
</div>
<div class="container">
    @yield('content')
</div>
</body>

</html>
