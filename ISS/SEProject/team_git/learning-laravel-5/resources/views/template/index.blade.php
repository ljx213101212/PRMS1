@extends('template.custFront')
@section('title','home')
@section('css-child')
    <link href="{{URL::asset('css/custome_index.css')}}" rel="stylesheet" type="text/css"/>
@stop



@section('content')
    <div class="main-main-carousel-div">
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
                    <img class="img-responsive" src="{{URL::asset('img/main_page_carousel_pic1.png')}}"/>

                    <div class="carousel-caption">
                        <h3>Caption Text</h3>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="{{URL::asset('img/main_page_carousel_pic1.png')}}"/>

                    <div class="carousel-caption">
                        <h3>Caption Text</h3>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="{{URL::asset('img/main_page_carousel_pic1.png')}}"/>

                    <div class="carousel-caption">
                        <h3>Caption Text</h3>
                    </div>
                </div>
            </div>

            <div class="main-text">
                <div class="main-text-wrapper">
                    <div class="col-md-12 text-center">
                        <h1>
                            Create your wedding website</h1>

                        <form class="form-inline">
                            <div class="form-group">
                                <input type="text" class="input-wedding" id="exampleInputName2" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="input-wedding" id="exampleInputEmail2"
                                       placeholder="Email">
                            </div>

                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="input-wedding"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn-wedding btn-wedding-black">Try it free</button>
                            </div>
                        </form>

                    </div>
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
        <!-- Carousel -->
    </div>

    <div class="main-main-learn-div">
        <div class="main-main-learn-div-top">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="photo-wrapper">
                        <div class="photo">
                            <a class="fancybox" href="assets/img/portfolio/port06.jpg"><img class="img-responsive"
                                                                                            src="/img/main_page_learn_crown_pic.png"
                                                                                            alt=""></a>
                        </div>

                        <div class="main-main-learn-div-top-photo-title">

                            <h1>QUICK & SIMPLE</h1>
                        </div>

                        <div class="txt-wrapper">
                            Lorem ipsum dolor sit amet, vidit alienum copiosae usu cu. Per ei dolorum veritus dignissim.
                            Per
                            unum
                            constituam ei, nec commodo ancillae constituto an. Sea docendi volutpat democritum ei.
                            Legere
                            aperiri
                            nec
                            te, sea ex noluisse singulis accusamus. Eos no lorem labitur, ut aperiri conceptam
                            voluptatum vel.
                        </div>
                    </div>


                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="photo-wrapper">
                        <div class="photo">
                            <a class="fancybox" href="assets/img/portfolio/port06.jpg"><img class="img-responsive"
                                                                                            src="/img/main_page_learn_crown_pic.png"
                                                                                            alt=""></a>
                        </div>

                        <div class="main-main-learn-div-top-photo-title">

                            <h1>100+ TEMPLATES</h1>
                        </div>

                        <div class="txt-wrapper">
                            Lorem ipsum dolor sit amet, vidit alienum copiosae usu cu. Per ei dolorum veritus dignissim.
                            Per
                            unum
                            constituam
                            ei, nec commodo ancillae constituto an. Sea docendi volutpat democritum ei. Legere aperiri
                            nec te,
                            sea
                            ex
                            noluisse singulis accusamus. Eos no lorem labitur, ut aperiri conceptam voluptatum vel.
                        </div>

                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="photo-wrapper">
                        <div class="photo">
                            <a class="fancybox" href="assets/img/portfolio/port06.jpg"><img class="img-responsive"
                                                                                            src="/img/main_page_learn_crown_pic.png"
                                                                                            alt=""></a>
                        </div>

                        <div class="main-main-learn-div-top-photo-title">

                            <h1>EASY TO SHARE</h1>
                        </div>

                        <div class="txt-wrapper">
                            Lorem ipsum dolor sit amet, vidit alienum copiosae usu cu. Per ei dolorum veritus dignissim.
                            Per
                            unum
                            constituam
                            ei, nec commodo ancillae constituto an. Sea docendi volutpat democritum ei. Legere aperiri
                            nec te,
                            sea
                            ex
                            noluisse singulis accusamus. Eos no lorem labitur, ut aperiri conceptam voluptatum vel.
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="main-main-learn-div-bottom">
            <button type="button" class="btn-wedding btn-wedding-black btn-wedding-black-40">
                LEARN MORE
            </button>
        </div>
    </div>


    <div class="main-main-lookbook-div">
        <div class="col-md-11 col-md-offset-2">


            {{--<div class="row">--}}
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-padding">
                <div class="margin-center-photo">
                    <div class="margin-center-inner-photo">
                        <img class="img-responsive" src="/img/look_page_theme_pic1.png"
                             alt="Frontpage image 66de8ef465b10bc3825624401b8611d60a4c58030e650d2a7239bd9d86be21ff">
                        <div class="margin-center-inner-photo-btn">
                            <button type="button"
                                    class="btn-wedding btn-wedding-pink btn-wedding-pink-transparent btn-wedding-pink-80">
                                Launch Site
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="margin-center-photo-6">

                    <div class="look-book-info">
                        <div class="font-wedding-GreatVibe font-wedding-GreatVibe-250">
                            <h2>Featured Design</h2>
                        </div>
                        <div class="div-wedding-rectangle-pink">
                            <div class="div-wedding-rectangle-pink-inner">

                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                                    <img src="http://localhost:8888/img/look_page_theme_pic2.png">
                                                </div>

                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <p>Robin - New Anchor</p>
                                                    <div class="look-book-info-text">
                                                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                        veniam, quis
                                                        nostrud
                                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat. Duis aute
                                                        irure
                                                        dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                                        fugiat nulla
                                                        pariatur.
                                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                        qui officia
                                                        deserunt
                                                        mollit anim id est laborum.</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-caption">
                                                <h3>page1</h3>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                                    <img src="http://localhost:8888/img/look_page_theme_pic2.png">
                                                </div>

                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <p>Robin - New Anchor</p>
                                                    <div class="look-book-info-text">
                                                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                            eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                            veniam, quis
                                                            nostrud
                                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                            consequat. Duis aute
                                                            irure
                                                            dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                                            fugiat nulla
                                                            pariatur.
                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                            qui officia
                                                            deserunt
                                                            mollit anim id est laborum.</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-caption">
                                                <h3>page2</h3>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                                    <img src="http://localhost:8888/img/look_page_theme_pic2.png">
                                                </div>

                                                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                                    <p>Robin - New Anchor</p>
                                                    <div class="look-book-info-text">
                                                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                            eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                            veniam, quis
                                                            nostrud
                                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                            consequat. Duis aute
                                                            irure
                                                            dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                                            fugiat nulla
                                                            pariatur.
                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                            qui officia
                                                            deserunt
                                                            mollit anim id est laborum.</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-caption">
                                                <h3>page3</h3>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button"
                                       data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button"
                                       data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-button-6">
                        <button type="button" class="btn btn-primary btn-lg btn-block">
                            Browse the Look Book
                        </button>
                    </div>
                </div>
            </div>

            {{--</div>--}}
        </div>
    </div>


    <div class="main-main-love_story-div">
        <div class="row">

            <div class="col-lg-12">
                <div class="col-md-4 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/500x250" alt="">
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x550" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x550" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x550" alt="">
                </a>
            </div>
        </div>


    </div>

    <div class="main-main-sign-up-div">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Business Features</h2>
            </div>

            <div class="col-md-5">
                <div class="pull-right">
                    <img class="img-responsive" src="http://placehold.it/265x265" alt="">
                </div>
            </div>
            <div class="col-md-7">

                <div class="col-lg-8">
                    <div class="panel-heading">
                        <h3>Sign Up for your wedding </h3>
                    </div>
                    <div class="text-center">
                        Lorem ipsum dolor sit amet, vidit alienum copiosae usu cu. Per ei dolorum veritus dignissim. Per
                        unum
                        constituam
                        ei, nec commodo ancillae constituto an. Sea docendi volutpat democritum ei. Legere aperiri nec
                        te,
                        sea
                        ex
                        noluisse singulis accusamus. Eos no lorem labitur, ut aperiri conceptam voluptatum vel.
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-sm"
                                       placeholder="Password">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                       class="form-control input-sm" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="button" class="btn btn-primary btn-lg btn-block">
                                Receive Love Letter today
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <div class="main-main-keep_in_touch-div">
        <div class="row">

            <div class="text-center">

                <div class="list-inline social-buttons">
                    <a class="btn btn-lg btn-social-icon btn-facebook" href="#" title="Sign in with Facebook"
                       rel="nofollow">
                        <span class="fa fa-facebook"></span>

                    </a>


                    <a class="btn btn-lg btn-social-icon btn-instagram" href="#" title="Sign in with Instagram"
                       rel="nofollow">
                        <span class="fa fa-instagram"></span>

                    </a>

                    <a class="btn btn-lg btn-social-icon btn-twitter" href="#" title="Sign in with Twitter"
                       rel="nofollow">
                        <span class="fa fa-twitter"></span>

                    </a>

                    <a class="btn btn-lg btn-social-icon btn-pinterest" href="#" title="Sign in with pinterest"
                       rel="nofollow">
                        <span class="fa fa-pinterest"></span>

                    </a>
                </div>


            </div>

            <div class="text-keep-in-touch">
                <span class="lets-keep-in-touch">LET'S KEEP IN TOUCH</span>
            </div>
        </div>
    </div>

    <script language=JavaScript>

        //    var about;
        //    function mOver(p) {
        //
        //        if (p == 1) {
        //            about = document.getElementById("sign_in").style.backgroundColor = '#775A5A';
        //            console.info("mover");
        //        } else if (p == 2) {
        //            about = document.getElementById("login_in").style.backgroundColor = '#775A5A';
        //        }
        //
        //    }
        //
        //    function mOut() {
        //
        //        document.getElementById("login_in").style.backgroundColor = "";
        //        document.getElementById("sign_in").style.backgroundColor = "";
        //    }
        //
        //    $('.carousel').carousel({
        //        interval: 3000
        //    })
        //
        //    $(function () {
        //        $('#datetimepicker1').datetimepicker();
        //    });

    </script>

@stop
