<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Book Manager</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: left;
                left: 20px;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            footer {
                background-color: #c5c5c5;
                right: 0;
                bottom: 0;
                left: 0;
                padding: 1rem;
                text-align: center;


            }

        </style>
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
                        @else
                            <a href="{{ route('login') }}"></a>
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