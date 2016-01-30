@extends('template.custFront')
@section('title','About')

@section('css-child')
<link href=" {{URL::asset('css/custome_about.css')}}" rel="stylesheet" type="text/css"/>
@stop


@section('content')
    <div class="about-carousel">
        <header id="top" class="header">
            <div class="text-vertical-center">
                <h3>Our Wedding HQ is an online destination that features beautiful design & culture wedding stories
                    inspired by you.</h3>
                <br>

                <h3>We are here to tell the tale of your love story so you can share it with the world.</h3>
            </div>
        </header>
    </div>

    <div class="about-services">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>Our Services</h2>
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


    <div class="about-staff">


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
@stop