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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <li class="nav-item ">
                                <a class="nav-link {{url()->current() == route('employer.home')? 'active':''}} " aria-current="page" href="{{route('employer.home')}}"  style="font-size: 19px;font-weight: bold">OFFERS</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{url()->current() == route('addoffer')? 'active':''}}" href="{{route('addoffer')}}" style="font-size: 19px;font-weight: bold;padding-left: 40px">ADD OFFER</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{url()->current() == route('employer.applications.pending')? 'active':''}}" href="{{route('employer.applications.pending')}}" style="font-size: 19px;font-weight: bold;padding-left: 40px">APPLICATIONS</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{url()->current() == route('employer.reviews')? 'active':''}}" href="{{route('employer.reviews')}}" style="font-size: 19px;font-weight: bold;padding-left: 40px">REVIEWS</a>
                            </li>
                        </ul>
                        <div class="form-outline" >
                            <input type="text" id="form12" class="form-control" placeholder="search your offers" />
                        </div>
                        <img src="{{url('Home/images/search.png')}}" width="40px" style="margin-right: 20px">
                        @php
                         $data = \App\Models\User::find(auth()->user()->id)->employer_general;
                        foreach ($data as $emp){
                            $image = $emp->image_url;
                        }
                        @endphp
                        <a href={{route('employer.profile')}}><img src={{asset('uploads/employer_images/'.\App\Models\EmployerGeneral::where('user_id',auth()->user()->id)->first()->image_url)}} width="45px" height="40px" style="border-radius: 50%;background-size: cover"></a>
                       <a href="{{route('exit')}}" style="text-decoration: none;margin-left: 30px">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</div>
<div class="container">
    @include('notify::components.notify')
    @yield('content')
</div>
@yield('scripts')
@notifyJs
</body>

</html>
