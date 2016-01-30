@extends('template.custFront')
@section('title','Features')

@section('css-child')
    <link href=" {{URL::asset('css/custome_features.css')}}" rel="stylesheet" type="text/css"/>
@stop


@section('content')
    <div class="features-carousel">
        <header id="top" class="header">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="bs-well">
                    <div class="text-left">
                        asdasd
                    </div>
                    <div class="text-left">
                        asdasd
                    </div>
                    <div class="text-left">
                        asdasd
                    </div>

                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <img src="{{URL::asset('img/look_page_theme_pic2.png')}}"/>
                        </div>

                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <p>Robin - New Anchor</p>
                            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt
                                mollit anim id est laborum.</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="bs-well">
                        <div class="text-left">
                            asdasd
                        </div>
                        <div class="text-left">
                            asdasd
                        </div>
                        <div class="text-left">
                            asdasd
                        </div>

                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <img src="{{URL::asset('img/look_page_theme_pic2.png')}}"/>
                            </div>

                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <p>Robin - New Anchor</p>
                                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt
                                    mollit anim id est laborum.</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -35px">
                    <div class="bs-well">
                        <div class="text-left">
                            asdasd
                        </div>
                        <div class="text-left">
                            asdasd
                        </div>
                        <div class="text-left">
                            asdasd
                        </div>

                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <img src="{{URL::asset('img/look_page_theme_pic2.png')}}"/>
                            </div>

                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                <p>Robin - New Anchor</p>
                                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt
                                    mollit anim id est laborum.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>


    <div class="features-try">

        <div class="row">
            <div class="text-center">
                <p>Try this Free Today!</p>
            </div>
        </div>

        <div class="row">
            <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-primary btn-lg">TRY IT NOW</a>
            </div>
        </div>
    </div>

    <div class="features-services">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <hr class="small">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>

                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
    </div>

    <div class="features-convince">

        <div class="row">
            <div class="text-center">
                <p>Convinced yet?</p>
            </div>
        </div>

        <div class="row">
            <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-primary btn-lg">TRY IT NOW</a>
            </div>
        </div>
    </div>

    <div class="features-favorite-theme-head">

            <div class="img-vertical-center">
                <img src="{{URL::asset('img/look_page_theme_up.png')}}"/>
            </div>
            <div class="text-vertical-center">
                <h3>CHOOSE YOUR FAVORITE THEME</h3>
            </div>
            <div class="img-vertical-center">
                <img src="{{URL::asset('img/look_page_theme_down.png')}}"/>
            </div>

    </div>



    <div class="features-services">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <hr class="small">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>

                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
    </div>

@stop