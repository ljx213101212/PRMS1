@extends('template.master')
@section('css')
    <link href="{{URL::asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/bootstrap-social.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('custome_navbar_footer.css')}}" rel="stylesheet" type="text/css"/>
    @yield('css-child')
    @stop



@section('middle')
    <div class="full_width_container">
        @yield('content')
    </div>
    @stop


@section('js')
    {{--<script src="{{URL::asset('jquery/jquery.min.js')}}"></script>--}}
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/moment.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('js/custome_widget_1.js')}}"></script>
    @yield('js-child')
@stop
