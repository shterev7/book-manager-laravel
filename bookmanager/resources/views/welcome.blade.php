<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Book Manager</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>

    <body>
    <div class="container-fluid" style="min-height:95%; ">
        <div class="row">
            <div class="col-sm-2">
                <br>
                <center>
                    <img src="{{  asset('/img/books.png')}}" class="responsive-img" alt="head" height="100" width="150">
                </center>
            </div>
            <div class="col-sm-10">
                <br>
                <center>
                    <h3>Book managing system</h3>
                </center>
            </div>
        </div><hr>

        <div class="row">
            {{--<div class="col-sm-2">--}}
                {{--<br>--}}

                {{--<br>--}}

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Profile</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

                <div class="well bs-sidebar" id="sidebar" style="background-color:#f7f7f7">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href='/'>Home</a></li>

                        @if (Auth::check())
                        <li><a href='/books/'>Books</a></li>
                        <li><a href='/authors/'>Authors</a></li>
                        {{--@else--}}
                            {{--<a href="{{ route('login') }}"></a>--}}
                        @endif
                    </ul>

                </div> <!--well bs-sidebar affix-->

                <div class="col-sm-10">
                    <div class='container-fluid'>
                        <br><br>
                        @yield('content')
                        <br><br>

                    </div>
                </div>
        </div> <!--col-sm-2-->

            </div>

        </div>
    </div>

    </body>

    <footer>
        <div class="container-fluid" style='margin-left:15px'>
            <div class="contactline">
                <p><a href="#" target="blank">Contact</a> | <a href="#" target="blank">LinkedIn</a> | <a href="#" target="blank">Twitter</a> | <a href="#" target="blank">Google+</a></p>
            </div>
        </div>
    </footer>

</html>