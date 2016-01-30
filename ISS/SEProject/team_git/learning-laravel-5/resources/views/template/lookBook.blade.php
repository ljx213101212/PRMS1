@extends('template.custFront')
@section('title','lookBook')

@section('css-child')
    <link href=" {{URL::asset('css/custome_look.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/css/bootstrap-select.min.css"
          rel="stylesheet" type="text/css"/>
@stop

@section('content')

    <div class="look-favorite-theme">
        <div class="look-favorite-theme-head">
            <header id="top" class="header">

                <div class="img-vertical-center">
                    <img src="{{URL::asset('img/look_page_theme_up.png')}}"/>
                </div>
                <div class="text-vertical-center">
                    <h3>CHOOSE YOUR FAVORITE THEME</h3>
                </div>
                <div class="img-vertical-center">
                    <img src="{{URL::asset('img/look_page_theme_down.png')}}"/>
                </div>
            </header>

        </div>

        <div class="row">
            <div class="look-favorite-theme-launchside-1">
                <div class="look-favorite-theme-container">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

                        <div class="look_page_theme_pic1">
                            <div class="look_page_theme_pic1_outline">
                                <div class="look_page_theme_pic1_button">
                                    <a href="javascript:void(0)" class="btn btn-primary btn-lg">LAUNCH SITE</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="row">
                            <h2>Yellow Blossom</h2>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="infobox">
                            <div class="row">
                                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit anim id est laborum.</h5>
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


            </div>
        </div>

        <div class="row">

            <div class="look-favorite-theme-launchside-2">
                <div class="look-favorite-theme-container">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                            <h2>Yellow Blossom</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <div class="infobox1">
                                <div class="row">
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

                                <div class="row">
                                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                        <img src="http://localhost:8888/img/look_page_theme_pic2.png">
                                    </div>

                                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                        <p>Robin - New Anchor</p>
                                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                            aute
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

                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

                            <div class="look_page_theme_pic1">
                                <div class="look_page_theme_pic1_outline">
                                    <div class="look_page_theme_pic1_button">
                                        <a href="javascript:void(0)" class="btn btn-primary btn-lg">LAUNCH SITE</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>


            </div>
        </div>

    </div>

    <div class="look-favorite-theme-launchside-button">
        <a href="javascript:void(0)" class="btn btn-primary btn-lg">GET YOURS NOW, FOR FREE NOW</a>
    </div>


    <div class="look-search-theme">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h3 style="text-align: right">LOOKING FOR PARTICULAR THEME?</h3>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <select class="selectpicker" multiple title="Select Category" data-width="100%">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                </select>

            </div>

        </div>

    </div>


    <div class="look-theme-gallery">


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thumbnail Gallery</h1>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                    <div class="caption-style-2">
                        <a class="thumbnail" href="#">
                            <img src="http://placehold.it/400x300" alt="">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h1>Amazing Caption</h1>

                                    <p>Whatever It Is - Always Awesome</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                    <div class="caption-style-2">
                        <a class="thumbnail" href="#">
                            <img src="http://placehold.it/400x300" alt="">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h1>Amazing Caption</h1>

                                    <p>Whatever It Is - Always Awesome</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                    <div class="caption-style-2">
                        <a class="thumbnail" href="#">
                            <img src="http://placehold.it/400x300" alt="">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h1>Amazing Caption</h1>

                                    <p>Whatever It Is - Always Awesome</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                    <div class="caption-style-2">
                        <a class="thumbnail" href="#">
                            <img src="http://placehold.it/400x300" alt="">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h1>Amazing Caption</h1>

                                    <p>Whatever It Is - Always Awesome</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                    <div class="caption-style-2">
                        <a class="thumbnail" href="#">
                            <img src="http://placehold.it/400x300" alt="">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h1>Amazing Caption</h1>

                                    <p>Whatever It Is - Always Awesome</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                    <div class="caption-style-2">
                        <a class="thumbnail" href="#">
                            <img src="http://placehold.it/400x300" alt="">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h1>Amazing Caption</h1>

                                    <p>Whatever It Is - Always Awesome</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                    <div class="caption-style-2">
                        <a class="thumbnail" href="#">
                            <img src="http://placehold.it/400x300" alt="">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h1>Amazing Caption</h1>

                                    <p>Whatever It Is - Always Awesome</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                    <div class="caption-style-2">
                        <a class="thumbnail" href="#">
                            <img src="http://placehold.it/400x300" alt="">

                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h1>Amazing Caption</h1>

                                    <p>Whatever It Is - Always Awesome</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="look-staff">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="http://placehold.it/1200x315" alt="...">

                    <div class="carousel-caption">
                        <h3>Caption Text</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="http://placehold.it/1200x315" alt="...">

                    <div class="carousel-caption">
                        <h3>Caption Text</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="http://placehold.it/1200x315" alt="...">

                    <div class="carousel-caption">
                        <h3>Caption Text</h3>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>

                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <!-- Carousel -->

    </div>

    <div class="look-convinced">

        <div class="row">
            <div class="text-center">
                <p>Convinced yet?</p>
            </div>
        </div>

        <div class="row">
            <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-primary btn-lg">GET YOURS NOW, FOR FREE NOW</a>
            </div>
        </div>
    </div>


    <div class="look-search-theme">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h3 style="text-align: right">LOOKING FOR PARTICULAR THEME?</h3>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <select class="selectpicker" multiple title="Select Category" data-width="100%">
                    <option>Mustard</option>
                    <option>Ketchup</option>
                    <option>Relish</option>
                </select>

            </div>

        </div>
    </div>


@section('js-child')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/js/bootstrap-select.min.js"></script>
@stop
@stop