<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img width="45px" src="{{url('Home/images')}}/icon.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu" style="font-size:30px;">
                    <li class="menu-active" ><a href="{{url('/')}}" style="font-size:16px; ">Home</a></li>
                    @if (Route::has('login'))
                            @auth
                            <li><a href="{{ url('/home') }}" style="font-size:17px;text-transform: lowercase">welcome, {{auth()->user()->name}}</a></li>
                            @else
                            <li> <button class="btn btn-danger"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></button></li>

                                @if (Route::has('register'))
                                <li> <button class="btn btn-success"> <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a></button></li>
                                @endif
                            @endauth
                    @endif
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header>
