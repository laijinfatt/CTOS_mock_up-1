<!DOCTYPE html>
<html>
    <head>
        <title>CTOS Mock-Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <style type="text/css">
           @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
            body{
                margin: 0;
                font-size: .9rem;
                font-weight: 400;
                line-height: 1.6;
                color: #212529;
                text-align: left;
                background-color: #f5f8fa;
            }
            .navbar-laravel
            {
                box-shadow: 0 2px 4px rgba(0,0,0,.04);
            }
            .navbar-brand , .nav-link, .my-form, .login-form
            {
                font-family: Raleway, sans-serif;
            }
            .sidenav{
            height: 100%; 
            width: 0; 
            position: fixed; 
            z-index: 1; /* Stay on top */
            top: 0; 
            left: 0;
            background-color: #000;
            box-shadow: 0 2px 10px rgba(0,0,0,.04);
            overflow-x: hidden; 
            padding-top: 60px;
            transition: 0.5s; 
            }

            .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            margin-top:0.5rem;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
            }

            .sidenav li:hover {
            background-color:grey;
            transition: 0.5s; 
            color:white;
            }

            .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            }
            .my-form
            {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }
            .my-form .row
            {
                margin-left: 0;
                margin-right: 0;
            }
            .login-form
            {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }
            .login-form .row
            {
                margin-left: 0;
                margin-right: 0;
            }
            .img-circle{
                border-radius: 50%;
            }

        </style>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
        <span style="font-size:20px;cursor:pointer;margin-right:5px;margin-bottom:2px;" onclick="openNav()">&#9776;</span>
            <div id="mySideNav" class="sidenav">
            <ul style="padding-left:10px;">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>     
            <li><a href="#">About Us</a></li> 
            </ul>
            </div>
        <!--TopNav-->
            <a class="navbar-brand" href="{{ route('dashboard') }}"> CTOS Mock-Up</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" style="margin-top:3px;" href="{{ route('logout') }}">Logout</a>
                            </li>
                        @endguest
                        <!--Sample profile-->
                        <li class="nav-item">
                                <a class="nav-link" href="{{route('profile.view')}}">    <img src="img/person1.jpg" 
                                height="30px" width="30px" alt="" class="pull-left img-circle profile"> </a>
                        </li>
                    </ul>
        
                </div>
            </div>
        </nav>
        </div>
        </nav>
        @yield('content')
        <script>
            function openNav() {
            document.getElementById("mySideNav").style.width = "250px";
            }

            function closeNav() {
            document.getElementById("mySideNav").style.width = "0";
            }
            </script>
   
    </body>
</html>