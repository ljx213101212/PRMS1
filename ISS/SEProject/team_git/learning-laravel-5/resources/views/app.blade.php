<!doctype html>
<html lang="en">
<head>
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href=" {{URL::asset('css/component.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/widget.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('custome_navbar_footer.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/bootstrap-social.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{URL::asset('jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/custome_widget_1.js')}}"></script>
    <script src="{{URL::asset('js/moment.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>

    <title>App Name - @yield('title')</title>
</head>

<body>

<!--Header-->
@section('sidebar')
<nav class="navbar navbar-default">
    <div class="container-fluid">

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">
                    <div class="custome_rectangle">

                        <a href="#"><img alt="Brand" src="//../bootstrap/img/main_page_nav_bar_facebook.png"
                                         height="30" width="30"></a>
                    </div>

                </li>

                <li><a href="#">photos</a></li>
                <li><a href="#">twitter</a></li>
                <li><a href="#">{{ url('/auth/logout') }}</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div class="custome_container">
                        <form class="searchbox">
                            <input type="search" placeholder="Search......" name="search" class="searchbox-input"
                                   onkeyup="buttonUp();" required>
                            <input type="submit" class="searchbox-submit" value="GO">
                            <span class="searchbox-icon"><img src="//../bootstrap/img/main_page_nav_bar_search.png"
                                                              style="width: 30px;height: 30px;"/></span>
                        </form>
                    </div>
                </li>
                <li>
                <li id="prototype_1"><a href="{{ url('/twitterREST') }}" onMouseOver=mOver(1) onMouseOut=mOut()>REST_pt</a>
                </li>
                <li id="prototype_2"><a href="twitter_pt2_STREAMING.php" onMouseOver=mOver(1) onMouseOut=mOut()>STREAMING_pt</a>
                </li>
                <li id="sign_in"><a href="register.php" onMouseOver=mOver(1) onMouseOut=mOut()>SignUp</a></li>
                <li id="login_in"><a href="login.php" onMouseOver=mOver(2) onMouseOut=mOut()>LogIn</a></li>
                </li>
                <li>

                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
@show
        <div class="full_width_container">
            @yield('content')
        </div>


@section('footer')
<!--footer-->

<div>
    <div class="main-main-footer-div">
        <a name="name_footer"></a>
        <div class="row">
            <div class="col-md-5">
                <div class="text-center">
                    <div class="row centered-form">
                        <div class="main-main-footer-panel">

                            <div class="panel-body">
                                <form role="form">

                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                    </div>


                                    <div class="col-xs-8 col-sm-8 col-md-8">
                                        <div class="main-main-footer-panel-sign_up_panel">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Sign up for Our Love letter
                                                    <small> It's free!</small>
                                                </h3>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control input-sm"
                                                       placeholder="Name">
                                            </div>

                                            <div class="form-group">
                                                <input type="email" name="email" id="email"
                                                       class="form-control input-sm" placeholder="Email">
                                            </div>

                                            <input type="submit" value="Register" class="main-main-footer-submit-btn">
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="text-left">
                    <div class="row">
                        <div class="main-main-footer-panel-sign_up_panel">
                            <h2>Contact US</h2>
                            <a herf="#">Contact@OurWeddingHQ.com</a>
                            <br>
                            <h6>Our Wedding HQ</h6>
                            <h6>Peter Griffin</h6>
                            <h6>+65 123456</h6>
                            <h6>Copyright &copy 2015</h6>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="text-left">
                    <div class="row">
                        <div class="row margin-bottom-30px">
                            <h2>Our wedding HQ</h2>

                            <div class="col-xs-6">
                                <ul class="list-unstyled footer-nav">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Community</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-6">
                                <ul class="list-unstyled footer-nav">
                                    <li><a href="#">Press Kit</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@show
</body>

</html>