<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Jquery -->
        <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
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
                justify-content: center;
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
            .container{
                min-width:940px;
                display:flex;
                flex-direction:column;
                align-items:stretch ;
            }
            nav{
                display:flex;
                flex-direction:row;
                justify-content:space-around;
            }
            nav li{
                list-style:none;
                max-width:250px;
                min-width:150px;
                height:50px;
                background:#404040;
                display:flex;
                align-items: center;
                justify-content: center;
            }
            nav a{
                text-decoration:none;
                color:white;
            }
            footer li a img{
                    width:30px;
                    height:30px;
                }
            footer{
                display:flex;
                flex-direction:row;
                justify-content:space-between;
            }
            footer article{
                width:200px;
            }
            footer article.cr{
                display:flex;
                flex-direction:row;
                justify-content:center;
            }
            footer article.rrss ul{
                display:flex;
                flex-direction:row;
                justify-content:space-around;
                width:40%;
            }
            footer article p,footer article li a{
                color:#404040;
                font-weight:bold;
            }
            footer li{
                list-style:none;
                margin-right: 10px;
            }
            #menu-responsive-father{
                display:none;
            }
            nav#menu{
                display:flex;
            }
            .carousel-item img{
                height:300px;
                width:1043px!important;
            }
            @media only screen and (max-width: 940px) {
                nav{
                    flex-direction:column;
                    width:100%;
                }
                nav li{
                    width:100%;
                    max-width:100%;
                    min-width:100%;
                }
                .container{
                    width:100%; 
                    min-width:100%;
                    padding:0;
                }
                #menu-responsive-father{
                display:flex;
                flex-direction:row;
                justify-content:flex-end;
                background-color:#404040;
                }
                #menu-responsive-father img{
                    width:80px;
                    height:50px;
                }
                .carousel-item img{
                height:200px;
                width:400px!important;
                }
            }
        </style>

    </head>
    <body>
    <div class="container">
        @include('partials/nav')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="links">
                    @yield('textoPrincipal')
                </div>
            </div>
        </div>
    </div>
    @include('partials/footer')
    </body>
</html>
