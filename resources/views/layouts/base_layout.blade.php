<!doctype html>
<html lang="en">
    <head>
        <title>IPS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        @yield('head')

    </head>

    <body>
        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar" class="active">
                <div class="custom-menu">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                </div>
                <div class="p-4">
                    <h1><a href="{{route('home')}}" class="logo"><image src="{{asset('images/logo_ips.png')}}"></image></a></h1>
                    <ul class="list-unstyled components mb-5">
                        <li class="active">
                            <a href="{{route('home')}}"><span class="fa fa-home mr-3"></span> Home</a>
                        </li>
                        <li>
                            <a href="{{route('getUsers')}}"><span class="fa fa-user mr-3"></span> Users List</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}"><span class="fa fa-briefcase mr-3"></span> About</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}"><span class="fa fa-paper-plane mr-3"></span> Contact</a>
                        </li>
                    </ul>

                    <div class="mb-5">

                        <form action="{{route('searchUser')}}" class="subscribe-form">


                            <div class="form-group">
                                <h3 class="h6 mb-3">
                                    <button type="submit" class="btn btn-outline-"><i class="fa fa-search"></i> Search...</button>
                                </h3>

                                <div class="icon"><span class="icon-paper-plane"></span></div>
                                {!! Form::text('value', null, ['class' => 'form-control']) !!}

                            </div>
                        </form>
                    </div>

                    <div class="footer">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>

                </div>
            </nav>

            <!-- Page Content  -->
            <div id="content" class="p-4 p-md-5 pt-5">
                @if ($errors->any())
                    <div class="mt-2 alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('status'))
                    <div class="mt-2 alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

                @yield('content')
            </div>
        </div>

        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>

        @yield('scripts')

    </body>
</html>
