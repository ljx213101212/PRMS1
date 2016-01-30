@extends('template.custFront')
@section('title','pricing')

@section('css-child')
    <link href=" {{URL::asset('css/custome_pricing.css')}}" rel="stylesheet" type="text/css"/>
@stop

@section('content')

    <div class="container">

        <div class="pricing-header-logo">
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

        <div class="pricing-body">

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="pricing-body-basic">
                        <div class="pricing-body-basic-top"></div>
                        <div class="pricing-body-basic-container">
                            <div class="pricing-body-basic-title">
                                <p>BASIC</p>
                            </div>
                            <br>

                            <div class="pricing-body-basic-ul">
                                <ul class="pricing p-green">
                                    <li>
                                        <img src="http://bread.pp.ua/n/settings_g.svg" alt="">
                                        <big>Start</big>
                                    </li>
                                    <li>Responsive Design</li>
                                    <li>Color Customization</li>
                                    <li>HTML5 & CSS3</li>
                                    <li>Styled elements</li>
                                    <li>
                                        <h3>$199</h3>
                                        <span>per month</span>
                                    </li>
                                </ul>
                                <a href="javascript:void(0)" class="btn btn-primary">Primary
                                    <div class="ripple-container"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="pricing-body-premium">
                        <div class="pricing-body-premium-top"></div>
                        <div class="pricing-body-premium-container">
                            <div class="pricing-body-premium-title">
                                <p>PREMIUM</p>
                            </div>
                            <br>

                            <div class="pricing-body-premium-ul">
                                <ul class="pricing p-green">
                                    <li>
                                        <img src="http://bread.pp.ua/n/settings_g.svg" alt="">
                                        <big>Start</big>
                                    </li>
                                    <li>Responsive Design</li>
                                    <li>Color Customization</li>
                                    <li>HTML5 & CSS3</li>
                                    <li>Styled elements</li>
                                    <li>
                                        <h3>$199</h3>
                                        <span>per month</span>
                                    </li>
                                </ul>
                                <a href="javascript:void(0)" class="btn btn-primary">Primary
                                    <div class="ripple-container"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="pricing-body-basic-feature">
                        <ul class="pricing p-green">
                            <li>
                                <img src="http://bread.pp.ua/n/settings_g.svg" alt="">
                                <big>Start</big>
                            </li>
                            <li>Responsive Design</li>
                            <li>Color Customization</li>
                            <li>HTML5 & CSS3</li>
                            <li>Styled elements</li>
                            <li>
                                <h3>$199</h3>
                                <span>per month</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="pricing-body-premium-feature">
                        <ul class="pricing p-green">
                            <li>
                                <img src="http://bread.pp.ua/n/settings_g.svg" alt="">
                                <big>Start</big>
                            </li>
                            <li>Responsive Design</li>
                            <li>Color Customization</li>
                            <li>HTML5 & CSS3</li>
                            <li>Styled elements</li>
                            <li>
                                <h3>$199</h3>
                                <span>per month</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="pricing-body-try-button">
                    <a href="javascript:void(0)" class="btn btn-primary">Primary
                        <div class="ripple-container"></div>
                    </a>
                </div>
            </div>
        </div>


    </div>


@section('js-child')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/js/bootstrap-select.min.js"></script>
@stop
@stop