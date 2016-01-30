@extends('template.custFront')
@section('title','loveStories')

@section('css-child')
    <link href=" {{URL::asset('css/custome_love.css')}}" rel="stylesheet" type="text/css"/>
@stop

@section('content')

    <div class="container">
        <div class="love-header-logo">
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

        <div class="love-body-up">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="love-ad-big-1">
                        <div class="love-ad-big-1-frame">
                            img
                        </div>

                        <div class="love-ad-big-1-majortitle">

                        </div>

                        <div class="love-ad-big-1-subtitle">

                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="love-ad-big-2">
                        <div class="love-ad-big-2-frame">
                            img
                        </div>

                        <div class="love-ad-big-2-majortitle">

                        </div>

                        <div class="love-ad-big-2-subtitle">

                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="love-ad-small-1">
                        <div class="love-ad-small-1-frame">
                            img
                        </div>

                        <div class="love-ad-small-1-majortitle">

                        </div>

                        <div class="love-ad-small-1-subtitle">

                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="love-ad-small-2">
                        <div class="love-ad-small-2-frame">
                            img
                        </div>

                        <div class="love-ad-small-2-majortitle">

                        </div>

                        <div class="love-ad-small-2-subtitle">

                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="love-ad-small-3">
                        <div class="love-ad-small-3-frame">
                            img
                        </div>

                        <div class="love-ad-small-3-majortitle">

                        </div>

                        <div class="love-ad-small-3-subtitle">

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="love-sign-up">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="love-sign-up-cover">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    <div class="love-sign-up-img">
                        <img src="{{URL::asset('img/love_page_signup_pic1.png')}}"/>
                    </div>
                </div>

                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <div class="love-sign-up-form">
                        <div class="row">
                            <div class="love-sign-up-form-title">

                            </div>

                            <div class="love-sign-up-form-subtitle">

                            </div>

                            <div class="love-sign-up-form-textfield">

                            </div>

                            <div class="love-sign-up-form-button">
                                <a href="javascript:void(0)" class="btn btn-primary">Primary<div class="ripple-container"></div></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="love-header-logo">
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

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>Blog Post Title</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Start Bootstrap</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

                <!--pagination-->

                <div class="love-pagination">
                    <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
    </div>


@section('js-child')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/js/bootstrap-select.min.js"></script>
@stop
@stop